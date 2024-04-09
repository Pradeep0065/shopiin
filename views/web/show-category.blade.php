           <div class="col-lg-12 main-content">

               <div class="row">
               @foreach($alldata as $item)
                   <div class="col-6 col-sm-4">
                       <div class="product-default text-center">
                           <figure>
                               <a href="{{url('product-detail/'.$item->p_name)}}" style="position:relative; left:100px">
                                   <img src="{{url('public/images/'.$item->img)}}"  style="height:200px; width:200px !important" alt="product">
                                   <img src="{{url('public/images/'.$item->img)}}"  style="height:200px; width:200px !important" alt="product">
                               </a>

                               <div class="label-group">
                                   <div class="product-label label-hot">HOT</div>
                                   <div class="product-label label-sale">-20%</div>
                               </div>
                           </figure>

                           <div class="product-details">
                               <div class="category-wrap">
                                   <div class="category-list">
                                       <a href="{{url('product-detail/'.$item->p_name)}}" class="product-category">{{$item->c_name}}</a>
                                   </div>
                               </div>

                               <h3 class="product-title"> <a href="{{url('product-detail/'.$item->p_name)}}">{{$item->p_name}}
                                       </a> </h3>

                               <div class="ratings-container">
                                   <div class="product-ratings">
                                       <span class="ratings" style="width:100%"></span>
                                       <!-- End .ratings -->
                                       <span class="tooltiptext tooltip-top"></span>
                                   </div>
                                   <!-- End .product-ratings -->
                               </div>
                               <!-- End .product-container -->

                               <div class="price-box">
                                   <span class="old-price">{{$item->p_h_p}}</span>
                                   <span class="product-price">{{$item->p_s_p}}</span>
                               </div>
                               <!-- End .price-box -->

                               <div class="product-action">
                                   <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i class="icon-heart"></i></a>
                                   <a href="{{url('product-detail/'.$item->p_name)}}" class="btn-icon btn-add-cart"><i class="fa fa-arrow-right"></i><span>Add to
                                           Cart</span></a>
                                   <a href="{{url('product-detail/'.$item->p_name)}}" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                               </div>
                           </div>
                           <!-- End .product-details -->
                       </div>
                   </div>
                   @endforeach
               </div>
               <!-- End .row -->


           </div>
          