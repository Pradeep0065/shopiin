<!DOCTYPE html>
<html lang="en">


<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Porto - Bootstrap eCommerce Template</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{url('public/web/assets/images/icons/favicon.png')}}">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        WebFontConfig = {
            google: {
                families: ['Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700,800', 'Oswald:300,400,500,600,700,800']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = 'public/web/assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{url('public/web/assets/css/bootstrap.min.css')}}">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{url('public/web/assets/css/demo4.min.css')}}">
    <link rel="stylesheet" href="{{url('public/web/assets/css/style.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{url('public/web/assets/vendor/fontawesome-free/css/all.min.css')}}">
</head>

<body>
    <div class="page-wrapper">
        <div class="top-notice bg-primary text-white">
            <div class="container text-center">
                <h5 class="d-inline-block">Get Up to <b>40% OFF</b> New-Season Styles</h5>
                <a href="{{url('category.html')}}" class="category">MEN</a>
                <a href="{{url('category.html')}}" class="category ml-2 mr-3">WOMEN</a>
                <small>* Limited time only.</small>
                <button title="Close (Esc)" type="button" class="mfp-close">×</button>
            </div>
            <!-- End .container -->
        </div>
        <!-- End .top-notice -->

        <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-left d-none d-sm-block">
                        <p class="top-message text-uppercase">FREE Returns. Standard Shipping Orders $99+</p>
                    </div>
                    <!-- End .header-left -->

                    <div class="header-right header-dropdowns ml-0 ml-sm-auto w-sm-100">
                        <div class="header-dropdown dropdown-expanded d-none d-lg-block">
                            <a href="{{url('#')}}">Links</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="{{url('dashboard.html')}}">My Account</a></li>
                                    <li><a href="{{url('about.html')}}">About Us</a></li>
                                    <li><a href="{{url('blog.html')}}">Blog</a></li>
                                    <li><a href="{{url('wishlist.html')}}">My Wishlist</a></li>
                                    <li><a href="{{url('cart.html')}}">Cart</a></li>
                                    <li><a href="{{url('userlogin')}}" class="login-link">Log In</a></li>
                                </ul>
                            </div>
                            <!-- End .header-menu -->
                        </div>
                        <!-- End .header-dropown -->

                        <span class="separator"></span>

                        <div class="header-dropdown">
                            <a href="{{url('#')}}"><i class="flag-us flag"></i>ENG</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="{{url('#')}}"><i class="flag-us flag mr-2"></i>ENG</a>
                                    </li>
                                    <li><a href="{{url('#')}}"><i class="flag-fr flag mr-2"></i>FRA</a></li>
                                </ul>
                            </div>
                            <!-- End .header-menu -->
                        </div>
                        <!-- End .header-dropown -->

                        <div class="header-dropdown mr-auto mr-sm-3 mr-md-0">
                            <a href="{{url('#')}}">USD</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="{{url('#')}}">EUR</a></li>
                                    <li><a href="{{url('#')}}">USD</a></li>
                                </ul>
                            </div>
                            <!-- End .header-menu -->
                        </div>
                        <!-- End .header-dropown -->

                        <span class="separator"></span>

                        <div class="social-icons">
                            <a href="{{url('#')}}" class="social-icon social-facebook icon-facebook" target="_blank"></a>
                            <a href="{{url('#')}}" class="social-icon social-twitter icon-twitter" target="_blank"></a>
                            <a href="{{url('#')}}" class="social-icon social-instagram icon-instagram" target="_blank"></a>
                        </div>
                        <!-- End .social-icons -->
                    </div>
                    <!-- End .header-right -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .header-top -->

            <div class="header-middle sticky-header" data-sticky-options="{'mobile': true}">
                <div class="container">
                    <div class="header-left col-lg-2 w-auto pl-0">
                        <button class="mobile-menu-toggler text-primary mr-2" type="button">
                            <i class="fas fa-bars"></i>
                        </button>
                        <a href="{{url('#')}}" class="logo">
                            <img src="{{url('public/web/assets/images/logo.png')}}" width="111" height="44" alt="Porto Logo">
                        </a>
                    </div>
                    <!-- End .header-left -->

                    <div class="header-right w-lg-max">
                        <div class="header-icon header-search header-search-inline header-search-category w-lg-max text-right mt-0">
                            <a href="{{url('#')}}" class="search-toggle" role="button"><i class="icon-search-3"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search..." required>
                                    <div class="select-custom">
                                        <select id="cat" name="cat">
                                            <option value="">All Categories</option>
                                            <option value="4">Fashion</option>
                                            <option value="12">- Women</option>
                                            <option value="13">- Men</option>
                                            <option value="66">- Jewellery</option>
                                            <option value="67">- Kids Fashion</option>
                                            <option value="5">Electronics</option>
                                            <option value="21">- Smart TVs</option>
                                            <option value="22">- Cameras</option>
                                            <option value="63">- Games</option>
                                            <option value="7">Home &amp; Garden</option>
                                            <option value="11">Motors</option>
                                            <option value="31">- Cars and Trucks</option>
                                            <option value="32">- Motorcycles &amp; Powersports</option>
                                            <option value="33">- Parts &amp; Accessories</option>
                                            <option value="34">- Boats</option>
                                            <option value="57">- Auto Tools &amp; Supplies</option>
                                        </select>
                                    </div>
                                    <!-- End .select-custom -->
                                    <button class="btn icon-magnifier p-0" title="search" type="submit"></button>
                                </div>
                                <!-- End .header-search-wrapper -->
                            </form>
                        </div>
                        <!-- End .header-search -->

                        <div class="header-contact d-none d-lg-flex pl-4 pr-4">
                            <img alt="phone" src="{{url('public/web/assets/images/phone.png')}}" width="30" height="30" class="pb-1">
                            <h6><span>Call us now</span><a href="{{url('tel:6205646243')}}" class="text-dark font1">+91 620 564 6243</a></h6>
                        </div>

                        <a href="{{url('userlogin')}}" class="header-icon" title="login"><i class="icon-user-2"></i></a>

                        <a href="{{url('wishlist.html')}}" class="header-icon" title="wishlist"><i class="icon-wishlist-2"></i></a>

                        <div class="dropdown cart-dropdown">
                            <a href="{{url('#')}}" title="Cart" class="dropdown-toggle dropdown-arrow cart-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="minicart-icon"></i>
                                <span class="cart-count badge-circle">0</span>
                            </a>

                            <div class="cart-overlay"></div>

                            <div class="dropdown-menu mobile-cart">
                                <a href="{{url('#')}}" title="Close (Esc)" class="btn-close">×</a>

                                <div class="dropdownmenu-wrapper custom-scrollbar">
                                    <div class="dropdown-cart-header">Shopping Cart</div>
                                    <!-- End .dropdown-cart-header -->
                                    <div class="dropdown-cart-products">

                                    </div>
                                    <!-- End .cart-product -->

                                    <div class="dropdown-cart-total">
                                        <span>SUBTOTAL:</span>

                                        <span class="cart-total-price float-right subtotal-amount">Rs.</span>
                                    </div>
                                    <!-- End .dropdown-cart-total -->

                                    <div class="dropdown-cart-action">
                                        <a href="{{url('cart')}}" class="btn btn-gray btn-block view-cart">View
                                            Cart</a>
                                        <a href="{{url('checkout')}}" class="btn btn-dark btn-block">Checkout</a>
                                    </div>
                                    <!-- End .dropdown-cart-total -->
                                </div>
                                <!-- End .dropdownmenu-wrapper -->
                            </div>
                            <!-- End .dropdown-menu -->
                        </div>
                        <!-- End .dropdown -->
                    </div>
                    <!-- End .header-right -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .header-middle -->

            <div class="header-bottom sticky-header d-none d-lg-block" data-sticky-options="{'mobile': false}">
                <div class="container">
                    <nav class="main-nav w-100">
                        <ul class="menu">
                            <li class="active">
                                <a href="{{url('/')}}">Home</a>
                            </li>
                            <li>

                                <a href="">Categories</a>
                                <div class="megamenu megamenu-fixed-width megamenu-3cols">
                                    <div class="row">
                                        <div class="col-lg-4">

                                            <ul class="submenu">
                                                @foreach($data3 as $item)
                                                <li><a href="{{url('show-all-data/'.$item->c_name)}}">{{$item->c_name}}</a></li>
                                                @endforeach
                            </li>
                            
                        </ul>
                </div>


            </div>
    </div>
    <!-- End .megamenu -->
    </li>


    <li><a href="{{url('contact.html')}}">Contact Us</a></li>

    @if(session('user'))
    <li class="float-right"><a href="{{url('logoutuser')}}" rel="noopener" class="pl-5" target="_blank">Logout</a></li>
    @else
    <li class="float-right"><a href="{{url('userlogin')}}" rel="noopener" class="pl-5" target="_blank">Login</a></li>
    @endif
   
    <li class="float-right"><a href="{{url('myorder')}}" class="pl-5">My order</a></li>
    </ul>
    </nav>
    </div>
    <!-- End .container -->
    </div>
    <script>
        var url = "{{url('/')}}";
    </script>
    <!-- End .header-bottom -->
    </header>
    <!-- End .header -->