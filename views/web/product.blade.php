<main class="main">
    <div class="container">
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('demo4.html')}}"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Products</a></li>
            </ol>
        </nav>

        <div class="product-single-container product-single-default">
            <div class="cart-message d-none">
                <strong class="single-cart-notice">{{$data['p_name']}}</strong>
                <span>has been added to your cart.</span>
            </div>

            <div class="row">
                <div class="col-lg-5 col-md-6 product-single-gallery">
                    <div class="product-slider-container">
                        <div class="label-group">
                            <div class="product-label label-hot">HOT</div>

                            <div class="product-label label-sale">
                                -16%
                            </div>
                        </div>
                        <img src="{{url('public/images/'.$data['img'])}}" style="height:200px; width:200px !important" alt="product">


                        <!-- End .product-single-carousel -->
                        <span class="prod-full-screen">
                            <i class="icon-plus"></i>
                        </span>
                    </div>


                </div>
                <!-- End .product-single-gallery -->

                <div class="col-lg-7 col-md-6 product-single-details">

                    <h1 class="product-title">{{$data['p_name']}}</h1>



                    <div class="ratings-container">
                        <div class="product-ratings">
                            <span class="ratings" style="width:60%"></span>
                            <!-- End .ratings -->
                            <span class="tooltiptext tooltip-top"></span>
                        </div>
                        <!-- End .product-ratings -->

                        <a href="#" class="rating-link">( 6 Reviews )</a>
                    </div>
                    <!-- End .ratings-container -->

                    <hr class="short-divider">

                    <div class="price-box">
                        <span class="old-price">{{$data['p_h_p']}}</span>
                        <span class="new-price">{{$data['p_s_p']}}</span>
                    </div>
                    <!-- End .price-box -->

                    <div class="product-desc">
                        <p>
                            {!!$data['p_comment']!!}
                        </p>
                    </div>
                    <!-- End .product-desc -->

                    <ul class="single-info-list">

                        <li>
                            SKU: <strong>654613612</strong>
                        </li>

                        <li>
                            CATEGORY: <strong><a href="#" class="product-category">{{$data['c_name']}}</a></strong>
                        </li>

                        <li>
                            TAGs: <strong><a href="#" class="product-category">{{$data['p_name']}}</a></strong>,
                            <strong><a href="#" class="product-category">{{$data['p_name']}}</a></strong>
                        </li>
                    </ul>

                    <div class="product-action">
                        <div class="product-single-qty">
                            <input class="horizontal-quantity form-control quantity" type="text">
                        </div>
                        <!-- End .product-single-qty -->

                        <a href="javascript:;" class="btn btn-dark add-cart mr-2" id="cart" title="Add to Cart" data="{{$data['p_id']}}">Add to
                            Cart</a>

                        <a href="{{url('cart')}}" class="btn btn-gray view-cart d-none">View cart</a>
                    </div>
                    <!-- End .product-action -->

                    <!-- End .product single-share -->

                </div>
                <!-- End .product-single-details -->
            </div>
            <!-- End .row -->
        </div>
        <!-- End .product-single-container -->

        <div class="product-single-tabs">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="product-tab-desc" data-toggle="tab" href="#product-desc-content" role="tab" aria-controls="product-desc-content" aria-selected="true">Description</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="product-tab-size" data-toggle="tab" href="#product-size-content" role="tab" aria-controls="product-size-content" aria-selected="true">Size Guide</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="product-tab-tags" data-toggle="tab" href="#product-tags-content" role="tab" aria-controls="product-tags-content" aria-selected="false">Additional
                        Information</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="product-tab-reviews" data-toggle="tab" href="#product-reviews-content" role="tab" aria-controls="product-reviews-content" aria-selected="false">Reviews (1)</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel" aria-labelledby="product-tab-desc">
                    <div class="product-desc-content">
                        <p>{!!$data['p_comment']!!}</p>
                        <ul>
                            <li>Any Product types that You want - Simple, Configurable
                            </li>
                            <li>Downloadable/Digital Products, Virtual Products
                            </li>
                            <li>Inventory Management with Backordered items
                            </li>
                        </ul>
                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    </div>
                    <!-- End .product-desc-content -->
                </div>
                <!-- End .tab-pane -->

                <div class="tab-pane fade" id="product-size-content" role="tabpanel" aria-labelledby="product-tab-size">
                    <div class="product-size-content">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{url('public/web/assets/images/products/single/body-shape.png')}}" alt="body shape" width="217" height="398">
                            </div>
                            <!-- End .col-md-4 -->

                            <div class="col-md-8">
                                <table class="table table-size">
                                    <thead>
                                        <tr>
                                            <th>SIZE</th>
                                            <th>CHEST(in.)</th>
                                            <th>WAIST(in.)</th>
                                            <th>HIPS(in.)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>XS</td>
                                            <td>34-36</td>
                                            <td>27-29</td>
                                            <td>34.5-36.5</td>
                                        </tr>
                                        <tr>
                                            <td>S</td>
                                            <td>36-38</td>
                                            <td>29-31</td>
                                            <td>36.5-38.5</td>
                                        </tr>
                                        <tr>
                                            <td>M</td>
                                            <td>38-40</td>
                                            <td>31-33</td>
                                            <td>38.5-40.5</td>
                                        </tr>
                                        <tr>
                                            <td>L</td>
                                            <td>40-42</td>
                                            <td>33-36</td>
                                            <td>40.5-43.5</td>
                                        </tr>
                                        <tr>
                                            <td>XL</td>
                                            <td>42-45</td>
                                            <td>36-40</td>
                                            <td>43.5-47.5</td>
                                        </tr>
                                        <tr>
                                            <td>XXL</td>
                                            <td>45-48</td>
                                            <td>40-44</td>
                                            <td>47.5-51.5</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- End .row -->
                    </div>
                    <!-- End .product-size-content -->
                </div>
                <!-- End .tab-pane -->

                <div class="tab-pane fade" id="product-tags-content" role="tabpanel" aria-labelledby="product-tab-tags">
                    <table class="table table-striped mt-2">
                        <tbody>
                            <tr>
                                <th>Weight</th>
                                <td>23 kg</td>
                            </tr>

                            <tr>
                                <th>Dimensions</th>
                                <td>12 × 24 × 35 cm</td>
                            </tr>

                            <tr>
                                <th>Color</th>
                                <td>Black, Green, Indigo</td>
                            </tr>

                            <tr>
                                <th>Size</th>
                                <td>Large, Medium, Small</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- End .tab-pane -->

                <div class="tab-pane fade" id="product-reviews-content" role="tabpanel" aria-labelledby="product-tab-reviews">
                    <div class="product-reviews-content">
                        <h3 class="reviews-title">1 review for Men Black Sports Shoes</h3>

                        <div class="comment-list">
                            <div class="comments">
                                <figure class="img-thumbnail">
                                    <img src="{{url('public/web/assets/images/blog/author.jpg')}}" alt="author" width="80" height="80">
                                </figure>

                                <div class="comment-block">
                                    <div class="comment-header">
                                        <div class="comment-arrow"></div>

                                        <div class="ratings-container float-sm-right">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:60%"></span>
                                                <!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <!-- End .product-ratings -->
                                        </div>

                                        <span class="comment-by">
                                            <strong>Joe Doe</strong> – April 12, 2018
                                        </span>
                                    </div>

                                    <div class="comment-content">
                                        <p>Excellent.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="divider"></div>

                        <div class="add-product-review">
                            <h3 class="review-title">Add a review</h3>

                            <form action="#" class="comment-form m-0">
                                <div class="rating-form">
                                    <label for="rating">Your rating <span class="required">*</span></label>
                                    <span class="rating-stars">
                                        <a class="star-1" href="#">1</a>
                                        <a class="star-2" href="#">2</a>
                                        <a class="star-3" href="#">3</a>
                                        <a class="star-4" href="#">4</a>
                                        <a class="star-5" href="#">5</a>
                                    </span>

                                    <select name="rating" id="rating" required="" style="display: none;">
                                        <option value="">Rate…</option>
                                        <option value="5">Perfect</option>
                                        <option value="4">Good</option>
                                        <option value="3">Average</option>
                                        <option value="2">Not that bad</option>
                                        <option value="1">Very poor</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Your review <span class="required">*</span></label>
                                    <textarea cols="5" rows="6" class="form-control form-control-sm"></textarea>
                                </div>
                                <!-- End .form-group -->


                                <div class="row">
                                    <div class="col-md-6 col-xl-12">
                                        <div class="form-group">
                                            <label>Name <span class="required">*</span></label>
                                            <input type="text" class="form-control form-control-sm" required>
                                        </div>
                                        <!-- End .form-group -->
                                    </div>

                                    <div class="col-md-6 col-xl-12">
                                        <div class="form-group">
                                            <label>Email <span class="required">*</span></label>
                                            <input type="text" class="form-control form-control-sm" required>
                                        </div>
                                        <!-- End .form-group -->
                                    </div>

                                    <div class="col-md-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="save-name" />
                                            <label class="custom-control-label mb-0" for="save-name">Save my
                                                name, email, and website in this browser for the next time I
                                                comment.</label>
                                        </div>
                                    </div>
                                </div>

                                <input type="submit" class="btn btn-primary" value="Submit">
                            </form>
                        </div>
                        <!-- End .add-product-review -->
                    </div>
                    <!-- End .product-reviews-content -->
                </div>
                <!-- End .tab-pane -->
            </div>
            <!-- End .tab-content -->
        </div>
        <!-- End .product-single-tabs -->

        <div class="products-section pt-0">
            <h2 class="section-title">Related Products</h2>

            <div class="products-slider owl-carousel owl-theme dots-top dots-small">
                @php $i = 0; @endphp
                @foreach($alldata as $item)
                @php $i++; @endphp

                @if($i < 5) <div class="product-default">
                    <figure>
                        <a href="{{url('product-detail/'.$item->p_name)}}">
                            <img src="{{url('public/images/'.$item->img)}}" style="height:200px !important" alt="product">
                            <img src="{{url('public/images/'.$item->img)}}" style="height:200px !important" alt="product">
                        </a>
                        <div class="label-group">
                            <div class="product-label label-hot">HOT</div>
                            <div class="product-label label-sale">-20%</div>
                        </div>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="{{url('product-detail/'.$item->p_name)}}" class="product-category">{{$item->c_name}}</a>
                        </div>
                        <h3 class="product-title">
                            <a href="{{url('product-detail/'.$item->p_name)}}">{{$item->p_name}}</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <del class="old-price">{{$item->p_h_p}}</del>
                            <span class="product-price">{{$item->p_s_p}}</span>
                        </div>
                        <!-- End .price-box -->
                        <div class="product-action">
                            <a href="{{url('wishlist')}}" title="Wishlist" class="btn-icon-wish"><i class="icon-heart"></i></a>
                            <a href="{{url('product-detail/'.$item->p_name)}}" class="btn-icon btn-add-cart"><i class="fa fa-arrow-right"></i><span>Add to
                                    Cart</span></a>
                            <a href="{{url('product-detail/'.$item->p_name)}}" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    <!-- End .product-details -->
            </div>

            @endif
            @endforeach
        </div>
        <!-- End .products-slider -->
    </div>
    <!-- End .products-section -->

    <hr class="mt-0 m-b-5" />

    <!-- End .row -->
    </div>
    <!-- End .container -->
</main>
<!-- End .main -->

</div>
<!-- End .page-wrapper -->

<div class="loading-overlay">
    <div class="bounce-loader">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>




<a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

<!-- Plugins JS File -->
<script data-cfasync="false" href="{{url('public/web../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
<script href="{{url('public/web/assets/js/jquery.min.js')}}"></script>
<script href="{{url('public/web/assets/js/bootstrap.bundle.min.js')}}"></script>
<script href="{{url('public/web/assets/js/plugins.min.js')}}"></script>

<!-- Main JS File -->
<script href="{{url('public/web/assets/js/main.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#cart').on('click', function() {
            var item = $('.quantity').val();
            var id = $(this).attr('data');
           // console.log(id);
            if (item != '') {
                $.ajax({
                    method: 'post',
                    url: "{{url('add-to-cart')}}",
                    data: {
                        item: item,
                        id: id
                    },
                    success: function(result) {
                        addcart();
                    }
                })
            }

        });
    });
</script>