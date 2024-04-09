<?php

namespace App\Http\Controllers;

use App\Models\brandmodel;
use App\Models\cartmodel;
use App\Models\categorymodel;
use App\Models\coustmermodel;
use App\Models\ordermodel;
use App\Models\productmodel;
use Illuminate\Http\Request;

class webcontroller extends Controller
{

  function home()
  {

    $data = productmodel::where('p_status', '=', 0)->join('category', 'category.c_id', '=', 'product.p_c_id')->join('color', 'product.p_co_id', '=', 'color.co_id')->join('brand', 'product.p_b_id', '=', 'brand.b_id')->join('size', 'product.p_s_id', '=', 'size.s_id')->get();
    $data2 = productmodel::where('p_status', '=', 0)->join('category', 'category.c_id', '=', 'product.p_c_id')->join('color', 'product.p_co_id', '=', 'color.co_id')->join('brand', 'product.p_b_id', '=', 'brand.b_id')->join('size', 'product.p_s_id', '=', 'size.s_id')->orderBy('p_id', 'DESC')->get();
    $data3 = categorymodel::where('c_status', '=', 0)->get();
    $data4 = brandmodel::where('b_status', '=', 0)->select('b_name')->distinct()->get();

    return view('web.common.header', compact('data3')) . view('web.home', compact('data', 'data2', 'data3', 'data4')) . view('web.common.footer', compact('data3'));
  }
  function productdetail()
  {

    $data3 = categorymodel::where('c_status', '=', 0)->get();

    return view('web.common.header', compact('data3')) . view('web.product') . view('web.common.footer', compact('data3'));
  }
  function wishlist()
  {
    $data3 = categorymodel::where('c_status', '=', 0)->get();

    return view('web.common.header', compact('data3')) . view('web.wishlist') . view('web.common.footer', compact('data3'));
  }
  function cart()
  {
    $data3 = categorymodel::where('c_status', '=', 0)->get();

    return view('web.common.header', compact('data3')) . view('web.cart') . view('web.common.footer', compact('data3'));
  }
  function productdetails($param)
  {
    $data = productmodel::where('p_status', '=', 0)->where('p_name', '=', $param)->join('category', 'category.c_id', '=', 'product.p_c_id')->join('color', 'product.p_co_id', '=', 'color.co_id')->join('brand', 'product.p_b_id', '=', 'brand.b_id')->join('size', 'product.p_s_id', '=', 'size.s_id')->first();
    $alldata = productmodel::where('p_status', '=', 0)->where('c_name', '=', $data['c_name'])->join('category', 'category.c_id', '=', 'product.p_c_id')->join('color', 'product.p_co_id', '=', 'color.co_id')->join('brand', 'product.p_b_id', '=', 'brand.b_id')->join('size', 'product.p_s_id', '=', 'size.s_id')->get();
    $data3 = categorymodel::where('c_status', '=', 0)->get();

    return view('web.common.header', compact('data3')) . view('web.product', compact('data', 'alldata', 'data3')) . view('web.common.footer', compact('data3'));
  }
  function showalldata()
  {
    $data3 = categorymodel::where('c_status', '=', 0)->get();

    return view('web.common.header', compact('data3')) . view('web.show-category') . view('web.common.footer', compact('data3'));
  }
  function showalldatas($param)
  {
    $data3 = categorymodel::where('c_status', '=', 0)->get();

    $alldata = productmodel::where('p_status', '=', 0)->where('c_name', '=', $param)->join('category', 'category.c_id', '=', 'product.p_c_id')->join('color', 'product.p_co_id', '=', 'color.co_id')->join('brand', 'product.p_b_id', '=', 'brand.b_id')->join('size', 'product.p_s_id', '=', 'size.s_id')->get();
    return view('web.common.header', compact('data3')) . view('web.show-category', compact('alldata')) . view('web.common.footer', compact('data3'));
  }
  function showallbrand()
  {
    $data3 = categorymodel::where('c_status', '=', 0)->get();
    return view('web.common.header', compact('data3')) . view('web.show-brand') . view('web.common.footer', compact('data3'));
  }
  function showallbrands($param)
  {
    $data3 = categorymodel::where('c_status', '=', 0)->get();
    $alldata = productmodel::where('p_status', '=', 0)->where('b_name', '=', $param)->join('category', 'category.c_id', '=', 'product.p_c_id')->join('color', 'product.p_co_id', '=', 'color.co_id')->join('brand', 'product.p_b_id', '=', 'brand.b_id')->join('size', 'product.p_s_id', '=', 'size.s_id')->get();
    return view('web.common.header', compact('data3')) . view('web.show-brand', compact('alldata')) . view('web.common.footer', compact('data3'));
  }
  function addtocart(Request $req)
  {
    if (session()->has('user')) {
      $sessionid = session('user');
    } else if (session()->has('virtual')) {
      $sessionid = session('virtual');
    } else {
      $sessionid =  rand(1111, 9999) . time();
      session()->put('virtual', $sessionid);
    }

    $cart = cartmodel::where('ca_p_id', '=', $req->id)->where('ca_cu_id', '=', $sessionid)->where('item_status', '=', 0)->first();
    $price = productmodel::find($req->id)['p_s_p'];
    if ($cart) {
      $cart->ca_p_cou = $cart['ca_p_cou'] + $req->item;
      $cart->ca_price = $price;
      $cart->save();
    } else {
      cartmodel::create(['ca_p_id' => $req->id, 'ca_p_cou' => $req->item, 'ca_cu_id' => $sessionid, 'ca_price' => $price]);
    }

    $items = cartmodel::where('ca_cu_id', '=', $sessionid)->where('item_status', '=', 0)->sum('ca_p_cou');

    return response()->json($items);
  }
  function addcart()
  {
    if (session()->has('user')) {
      $session_id = session('user');
    } else {
      if (session()->has('virtual')) {
        $session_id = session('virtual');
      }
    }
    $item = cartmodel::where('ca_cu_id', '=',  $session_id)->where('item_status', '=', 0)->join('product', 'product.p_id', '=', 'cartitem.ca_p_id')->join('category', 'product.p_c_id', '=', 'category.c_id')->join('brand', 'product.p_b_id', '=', 'brand.b_id')->join('color', 'product.p_co_id', '=', 'color.co_id')->join('size', 'product.p_s_id', '=', 'size.s_id')->get();
    return response()->json($item);
  }
  function deletecart(Request $req)
  {
    if (session()->has('user')) {
      $session_id = session('user');
    } else {
      if (session()->has('virtual')) {
        $session_id = session('virtual');
      }
    }


    $item = cartmodel::where('ca_cu_id', '=',  $session_id)->find($req->data);
    return $item->delete();
  }
  function checkout(Request $req)
  {
    $data3 = categorymodel::where('c_status', '=', 0)->get();

    return view('web.common.header', compact('data3')) . view('web.checkout') . view('web.common.footer', compact('data3'));
  }

  function placeorder(Request $req)
  {
    if (session()->has('user')) {
      $session_id = session('user');
    } else {
      if (session()->has('virtual')) {
        $session_id = session('virtual');
      }
    }

    $coustmer = coustmermodel::where('cu_email', '=', $req->email)->where('cu_mob', '=', $req->phone)->first();
    if ($coustmer) {
      $cu_id = $coustmer['cu_id'];
    } else {
      $coustmer =  coustmermodel::create(['cu_namefirst' => $req->first_name, 'cu_namelast' => $req->last_name, 'cu_addre' => $req->street_address, 'cu_city' => $req->town, 'cu_pincode' => $req->Pincode, 'cu_mob' => $req->phone, 'cu_email' => $req->email, 'cu_pass' => $req->password]);
      $cu_id = $coustmer->cu_id;
    }
    session()->put('user', $cu_id);
    $cart = cartmodel::where('ca_cu_id', '=', $session_id)->where('item_status', '=', 0)->get();

    $order =  ordermodel::create(['o_c_id' => $cu_id, 'o_amount' => 0, 'payment_id' => $req->paymentid]);
    $order_id = $order->o_id;
    $amt = 0;
    foreach ($cart as $item) {
      $items = cartmodel::where('ca_id', '=', $item->ca_id)->first();
      $items->ca_cu_id  = $cu_id;
      $items->ca_o_id =  $order_id;
      $items->item_status =  1;
      $items->save();
      $amt += $item->ca_price * $item->ca_p_cou;
    }

    $order = ordermodel::find($order_id);
    $order->o_amount = $amt;
    $order->save();
    

    return response()->json(0);
  }




function userlogin(){
  $data3 = categorymodel::where('c_status', '=', 0)->get();

    return view('web.common.header', compact('data3')) . view('web.loginuser') . view('web.common.footer', compact('data3'));
}



function weblogin(Request $req){
  $email = $req->email;
  $password = $req->password;

  if ($admin = coustmermodel::where('cu_email', '=', $email)->where('cu_pass', '=', $password)->first()) {

    if ($admin) {
      Session()->put('user', $email);
      Session()->put('password', $password);
      Session()->put('cu_id', $admin->cu_id);
      return response()->json(1);


    }
  }
  return redirect()->to('/');
}
function myorder(){
  $data3 = categorymodel::where('c_status', '=', 0)->get();

  return view('web.common.header', compact('data3')) . view('web.myorder') . view('web.common.footer', compact('data3'));
}
function My_order(){

  if (session()->has('user')) {
    $session_id = session('user');
  } else {
    if (session()->has('virtual')) {
      $session_id = session('virtual');
    }
  }
  
  $data = ordermodel::where('o_c_id', '=', $session_id)->get();
 return response()->json($data);
}

function view_order_detail(Request $req){
 $data = ordermodel::where('o_id','=',$req->id)->join('cartitem','orderitem.o_id','=','cartitem.ca_o_id')->join('product','cartitem.ca_p_id','=','product.p_id')->get();
 return response()->json($data);
  
}

  function logoutuser(){
    session()->flush();
    return redirect()->to('/');
  }
}
