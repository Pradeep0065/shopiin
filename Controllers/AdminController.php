<?php

namespace App\Http\Controllers;

use App\Models\adminmodel;
use App\Models\brandmodel;
use App\Models\categorymodel;
use App\Models\colormodel;
use App\Models\productmodel;
use App\Models\sizemodel;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function login()
    {
        if (session()->has('email')) {
            return redirect()->to('admin-dashboard');
        } else {
            return view('login');
        }
    }
    function register()
    {
        if (session()->has('email')) {
            return redirect()->to('admin-dashboard');
        } else {
            return view('register');
        }
    }
    function admindashboard()
    {
        if (session()->has('email')) {
            return view('common.header') . view('dashboard') . view('common.footer');
        } else {
            return redirect()->to('/admin');
        }
    }
    function adminregister(Request $req)
    {
        if (adminmodel::where('a_email', '=', $req->email)->count() == 0) {
            if (adminmodel::where('a_mob', '=', $req->mob)->count() == 0) {
                adminmodel::create(['a_name' => $req->name, 'a_email' => $req->email, 'a_mob' => $req->mob, 'a_pass' => $req->pass]);
            } else {
                return response()->json('Mobile number already exist');
            }
        } else {
            return response()->json('E-mail already exist');
        }
    }
    function adminlogin(Request $req)
    {
        $data = adminmodel::where('a_email', '=', $req->email)->where('a_pass', '=', $req->pass)->first();

        if ($data) {
            if ($data['a_status'] == 1) {
                return response()->json('You are blocked');
            } else if ($data['a_status'] == 0) {
                session()->put('email', $req->email);
                session()->put('name', $data['a_name']);
                session()->put('id', $data['a_id']);
                return response()->json(1);
            }
        } else {
            return response()->json('Invalid login credential');
        }
    }
    function logout()
    {
        session()->flush();
        return redirect()->to('/admin');
    }
    function managecategory()
    {
        if (session()->has('email')) {
            return view('common.header') . view('manage-category') . view('common.footer');
        } else {
            return redirect()->to('/admin');
        }
    }

    function managecolor()
    {
        if (session()->has('email')) {
            $data = categorymodel::where('c_status', '=', 0)->where('c_a_id', '=', session('id'))->get();
            return view('common.header') . view('manage-color', compact('data')) . view('common.footer');
        } else {
            return redirect()->to('/admin');
        }
    }

    function managebrand()
    {
        if (session()->has('email')) {
            return view('common.header') . view('manage-brand') . view('common.footer');
        } else {
            return redirect()->to('/admin');
        }
    }

    function managesize()
    {
        if (session()->has('email')) {
            return view('common.header') . view('manage-size') . view('common.footer');
        } else {
            return redirect()->to('/admin');
        }
    }

    function manageproduct()
    {
        if (session()->has('email')) {
            return view('common.header') . view('manage-product') . view('common.footer');
        } else {
            return redirect()->to('/admin');
        }
    }
    function addcategory(Request $req)
    {
        if (session()->has('email')) {
            if ($req->id == 0) {
                if (categorymodel::create(['c_name' => $req->c_name, 'c_a_id' => session('id')])) {
                    return response()->json('Data added successfully');
                }
            } else if ($req->id > 0) {
                $category =  categorymodel::find($req->id);
                $category->c_name = $req->c_name;
                if ($category->save()) {
                    return response()->json('Data updated successfully');
                }
            }
        } else {
            return response()->json('You are not logged in');
        }
    }
    function categorydata()
    {
        if (session()->has('email')) {
            $data = categorymodel::where('c_status', '=', 0)->where('c_a_id', '=', session('id'))->get();
            return response()->json($data);
        } else {
            return response()->json('You are not logged in');
        }
    }
    function getsinglecategory(Request $req)
    {
        if (session()->has('email')) {
            $data = categorymodel::find($req->id);
            return response()->json($data);
        } else {
            return response()->json('You are not logged in');
        }
    }
    function deletecategory(Request $req)
    {
        if (session()->has('email')) {
            $data = categorymodel::find($req->id);
            $data->c_status = 1;
            $data->save();
            return response()->json('Data Deleted');
        } else {
            return response()->json('You are not logged in');
        }
    }


    function colordata()
    {
        if (session()->has('email')) {
            $data = colormodel::where('co_status', '=', 0)->join('category', 'category.c_id', '=', 'color.c_co_id')->get();
            return response()->json($data);
        } else {
            return response()->json('You are not logged in');
        }
    }
    function addcolor(Request $req)
    {
        if (session()->has('email')) {
            if ($req->id == 0) {
                colormodel::create(['c_co_id' => $req->c_id, 'co_name' => $req->co_name]);
                return response()->json('Data Added Successfully');
            } elseif ($req->id > 0) {
                $data = colormodel::find($req->id);
                $data->c_co_id = $req->c_id;
                $data->co_name = $req->co_name;
                $data->save();
                return response()->json('Data Updated Successfully');
            }
        } else {
            return response()->json('You are not logged in');
        }
    }
    function getsinglecolor(Request $req)
    {
        if (session()->has('email')) {
            $data = colormodel::where('co_status', '=', 0)->find($req->id);
            return response()->json($data);
        } else {
            return response()->json('You are not logged in');
        }
    }

    function deletecolor(Request $req)
    {
        if (session()->has('email')) {
            $data = colormodel::find($req->id);
            $data->co_status = 1;
            $data->save();
            return response()->json('Data Deleted');
        } else {
            return response()->json('You are not logged in');
        }
    }
    function getcolorname(Request $req)
    {
        if (session()->has('email')) {
            $data = colormodel::where('c_co_id', '=', $req->id)->get();
            return response()->json($data);
        } else {
            return response()->json('you are not logged in');
        }
    }
    function getalldata()
    {
        if (session()->has('email')) {
            $data = brandmodel::where('b_status', '=', 0)->join('category', 'category.c_id', '=', 'brand.b_c_id')->join('color', 'brand.b_co_id', '=', 'color.co_id')->get();
            return response()->json($data);
        } else {
            return response()->json('you are not logged in');
        }
    }
    function addbrand(Request $req)
    {
        if (session()->has('email')) {
            if ($req->id == 0) {
                brandmodel::create(['b_c_id' => $req->c_id, 'b_co_id' => $req->co_id, 'b_name' => $req->b_name]);
                return response()->json('Data Added successfully');
            } else if ($req->id > 0) {
                $data = colormodel::find($req->id);
                $data->b_c_id = $req->c_id;
                $data->b_co_id = $req->co_id;
                $data->b_name = $req->b_name;
                $data->save();
                return response()->json('Data updated successfully');
            }
        } else {
            return response()->json('you are not logged in');
        }
    }
    function getsinglebrand(Request $req)
    {
        if (session()->has('email')) {
            $data = brandmodel::where('b_status', '=', 0)->find($req->id);
            return response()->json($data);
        } else {
            return response()->json('you are not logged in');
        }
    }
    function deletebrand(Request $req)
    {
        if (session()->has('email')) {
            $data = brandmodel::find($req->id);
            $data->b_status = 1;
            $data->save();
            return response()->json('Data Deleted');
        } else {
            return response()->json('You are not logged in');
        }
    }
    function getbrandname(Request $req)
    {
        if (session()->has('email')) {
            $data = brandmodel::where('b_co_id', '=', $req->id)->get();
            return response()->json($data);
        } else {
            return response()->json('you are not logged in');
        }
    }
    function addsize(Request $req)
    {
        if (session()->has('email')) {
            if ($req->id == 0) {
                sizemodel::create(['s_c_id' => $req->c_id, 's_co_id' => $req->co_id, 's_b_id' => $req->b_name, 's_name' => $req->s_name]);
                return response()->json('Data Added successfully');
            } else if ($req->id > 0) {
                $data = sizemodel::find($req->id);
                $data->s_c_id = $req->c_id;
                $data->s_co_id = $req->co_id;
                $data->s_b_id = $req->b_name;
                $data->s_name = $req->s_name;
                $data->save();
                return response()->json('Data updated successfully');
            }
        } else {
            return response()->json('you are not logged in');
        }
    }
    function getallsize()
    {
        if (session()->has('email')) {
            $data = sizemodel::where('s_status', '=', 0)->join('category', 'category.c_id', '=', 'size.s_c_id')->join('color', 'size.s_co_id', '=', 'color.co_id')->join('brand', 'size.s_b_id', '=', 'brand.b_id')->get();
            return response()->json($data);
        } else {
            return response()->json('you are not logged in');
        }
    }
    function getsinglesize(Request $req)
    {
        if (session()->has('email')) {
            $data = sizemodel::where('s_status', '=', 0)->find($req->id);
            return response()->json($data);
        } else {
            return response()->json('you are not logged in');
        }
    }
    function deletesize(Request $req)
    {
        if (session()->has('email')) {
            $data = sizemodel::find($req->id);
            $data->s_status = 1;
            $data->save();
            return response()->json('Data Deleted');
        } else {
            return response()->json('You are not logged in');
        }
    }

    function getsizename(Request $req)
    {
        if (session()->has('email')) {
            $data = sizemodel::where('s_b_id', '=', $req->id)->get();
            return response()->json($data);
        } else {
            return response()->json('you are not logged in');
        }
    }
    function addproduct(Request $req)
    {
        if (session()->has('email')) {
            if ($req->id == 0) {
                if ($req->img) {
                    $file = $req->file('img');
                    $filename = time() . "" . $file->getClientOriginalName();
                    $file->move('public/images', $filename);
                }
                $p_c_id = $req->c_id;
                $p_co_id = $req->co_id;
                $p_b_id = $req->b_name;
                $p_s_id = $req->s_name;
                $p_name = $req->p_name;
                $p_comment = $req->p_comment;
                productmodel::create(['p_c_id' => $p_c_id, 'p_co_id' => $p_co_id, 'img' => $filename, 'p_b_id' => $p_b_id, 'p_s_id' => $p_s_id, 'p_name' => $p_name, 'p_comment' => $p_comment]);
                //  response()->json('Data Added successfully');
                return redirect()->to('manage-product');
            }
        } else {
            return response()->json('you are not logged in');
        }
    }
    function updateproduct(Request $req)
    {
        if (session()->has('email')) {
            if ($req->id > 0) {
                $data = productmodel::find($req->id);
                if ($req->img) {
                    $file = $req->file('img');
                    $filename = time() . "" . $file->getClientOriginalName();
                    $file->move('public/images', $filename);
                    $data->img = $filename;
                }
                $data->p_c_id = $req->c_id;
                $data->p_co_id = $req->co_id;
                $data->p_b_id = $req->b_name;
                $data->p_s_id = $req->s_name;
                $data->p_name = $req->p_name;
                $data->save();
                // return response()->json('Data updated successfully');
                return redirect()->to('manage-product');
            }
        } else {
            return response()->json('you are not logged in');
        }
    }
    function getallproduct()
    {
        if (session()->has('email')) {
            $data = productmodel::where('p_status', '=', 0)->join('category', 'category.c_id', '=', 'product.p_c_id')->join('color', 'product.p_co_id', '=', 'color.co_id')->join('brand', 'product.p_b_id', '=', 'brand.b_id')->join('size', 'product.p_s_id', '=', 'size.s_id')->get();
            return response()->json($data);
        } else {
            return response()->json('you are not logged in');
        }
    }
    function addproductdata()
    {
        if (session()->has('email')) {
            return view('common.header') . view('add-product') . view('common.footer');
        } else {
            return response()->json('you are not logged in');
        }
    }
    function editproductdata($id)
    {
        if (session()->has('email')) {
            $data = productmodel::find($id);
            return view('common.header') . view('edit-product', compact('data')) . view('common.footer');
        } else {
            return response()->json('you are not logged in');
        }
    }
    function getsingleproduct(Request $req)
    {
        if (session()->has('email')) {
            $data = productmodel::where('p_status', '=', 0)->find($req->id);
            return response()->json($data);
        } else {
            return response()->json('you are not logged in');
        }
    }

    function deleteproduct(Request $req)
    {

        if (session()->has('email')) {
            $data = productmodel::find($req->id);
            $data->p_status = 1;
            $data->save();
            return response()->json('Data Deleted');
        } else {
            return response()->json('You are not logged in');
        }
    }

    function forget(){
        return view('forget');
    }
    function otp(){
        return view('otp');
    }
    function password(){
        return view('password');

    }


    function send_otp(Request $req){
        if ($admin = adminmodel::where('a_mob', '=', $req->mob)->where('a_status','=',0)->first()) {
            $otp = rand(111111,999999);
            $admin->f_otp = $otp;
            $admin->save();
            session()->flush();
            session()->put('mob', $req->mob);
            return response()->json(0);
        }else{
            return response()->json('Mobile number Not exists');
        }
    }
    function otp_success(Request $req){
        $admin = adminmodel::where('a_mob', '=', session('mob'))->where('f_otp', '=', $req->otp)->first();
        if($admin){
            return response()->json(1);
        }else{
            return response()->json('Your otp does not matched'); 
        }
        
    }
    function change_password(Request $req){
        $admin = adminmodel::where('a_mob', '=', session('mob'))->first();
        $admin->a_pass = $req->pass;
        if($admin->save()){
            return response()->json(1);
        }else{
            return response()->json('Your session are timeout');
        }
    }
}
