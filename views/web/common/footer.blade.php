<footer class="footer bg-dark">
    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="widget">
                        <h4 class="widget-title">Contact Info</h4>
                        <ul class="contact-info">
                            <li>
                                <span class="contact-info-label">Address:</span>123 Street Name, City, England
                            </li>
                            <li>
                                <span class="contact-info-label">Phone:</span><a href="{{url('tel:')}}">(123)
                                    456-7890</a>
                            </li>
                            <li>
                                <span class="contact-info-label">Email:</span> <a href="{{url('https://portotheme.com/cdn-cgi/l/email-protection#563b373f3a16332e373b263a337835393b')}}"><span class="__cf_email__" data-cfemail="80ede1e9ecc0e5f8e1edf0ece5aee3efed">[email&#160;protected]</span></a>
                            </li>
                            <li>
                                <span class="contact-info-label">Working Days/Hours:</span> Mon - Sun / 9:00 AM - 8:00 PM
                            </li>
                        </ul>
                        <div class="social-icons">
                            <a href="{{url('#')}}" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
                            <a href="{{url('#')}}" class="social-icon social-twitter icon-twitter" target="_blank" title="Twitter"></a>
                            <a href="{{url('#')}}" class="social-icon social-instagram icon-instagram" target="_blank" title="Instagram"></a>
                        </div>
                        <!-- End .social-icons -->
                    </div>
                    <!-- End .widget -->
                </div>
                <!-- End .col-lg-3 -->

                <div class="col-lg-3 col-sm-6">
                    <div class="widget">
                        <h4 class="widget-title">Customer Service</h4>

                        <ul class="links">
                            <li><a href="{{url('#')}}">Help & FAQs</a></li>
                            <li><a href="{{url('#')}}">Order Tracking</a></li>
                            <li><a href="{{url('#')}}">Shipping & Delivery</a></li>
                            <li><a href="{{url('#')}}">Orders History</a></li>
                            <li><a href="{{url('#')}}">Advanced Search</a></li>
                            <li><a href="{{url('dashboard.html')}}">My Account</a></li>
                            <li><a href="{{url('#')}}">Careers</a></li>
                            <li><a href="{{url('about.html')}}">About Us</a></li>
                            <li><a href="{{url('#')}}">Corporate Sales</a></li>
                            <li><a href="{{url('#')}}">Privacy</a></li>
                        </ul>
                    </div>
                    <!-- End .widget -->
                </div>
                <!-- End .col-lg-3 -->

                <div class="col-lg-3 col-sm-6">
                    <div class="widget">
                        <h4 class="widget-title">Popular Tags</h4>

                        <div class="tagcloud">
                            <a href="{{url('#')}}">Bag</a>
                            <a href="{{url('#')}}">Black</a>
                            <a href="{{url('#')}}">Blue</a>
                            <a href="{{url('#')}}">Clothes</a>
                            <a href="{{url('#')}}">Fashion</a>
                            <a href="{{url('#')}}">Hub</a>
                            <a href="{{url('#')}}">Shirt</a>
                            <a href="{{url('#')}}">Shoes</a>
                            <a href="{{url('#')}}">Skirt</a>
                            <a href="{{url('#')}}">Sports</a>
                            <a href="{{url('#')}}">Sweater</a>
                        </div>
                    </div>
                    <!-- End .widget -->
                </div>
                <!-- End .col-lg-3 -->

                <div class="col-lg-3 col-sm-6">
                    <div class="widget widget-newsletter">
                        <h4 class="widget-title">Subscribe newsletter</h4>
                        <p>Get all the latest information on events, sales and offers. Sign up for newsletter:
                        </p>
                        <form action="#" class="mb-0">
                            <input type="email" class="form-control m-b-3" placeholder="Email address" required>

                            <input type="submit" class="btn btn-primary shadow-none" value="Subscribe">
                        </form>
                    </div>
                    <!-- End .widget -->
                </div>
                <!-- End .col-lg-3 -->
            </div>
            <!-- End .row -->
        </div>
        <!-- End .container -->
    </div>
    <!-- End .footer-middle -->

    <div class="container">
        <div class="footer-bottom">
            <div class="container d-sm-flex align-items-center">
                <div class="footer-left">
                    <span class="footer-copyright">© Porto eCommerce. 2021. All Rights Reserved</span>
                </div>

                <div class="footer-right ml-auto mt-1 mt-sm-0">
                    <div class="payment-icons">
                        <span class="payment-icon visa" style="background-image: url('public/web/assets/images/payments/payment-visa.svg')"></span>
                        <span class="payment-icon paypal" style="background-image:url('public/web/assets/images/payments/payment-paypal.svg')"></span>
                        <span class="payment-icon stripe" style="background-image: url('public/web/assets/images/payments/payment-stripe.png')"></span>
                        <span class="payment-icon verisign" style="background-image: url('public/web/assets/images/payments/payment-verisign.svg')"></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- End .footer-bottom -->
    </div>
    <!-- End .container -->
</footer>
<!-- End .footer -->
</div>
<!-- End .page-wrapper -->

<div class="loading-overlay">
    <div class="bounce-loader">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>

<div class="mobile-menu-overlay"></div>
<!-- End .mobil-menu-overlay -->

<div class="mobile-menu-container">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="fa fa-times"></i></span>
        <nav class="mobile-nav">
            <ul class="mobile-menu">
                <li><a href="{{url('/')}}">Home</a></li>
                <li>
                    <a href="{{url('#')}}">Categories</a>
                    <ul>
                    @foreach($data3 as $item)
                        <li><a href="{{url('show-all-data/'.$item->c_name)}}">{{$item->c_name}}</a></li>
                        @endforeach
                    </ul>
                </li>

            </ul>


        </nav>
        <!-- End .mobile-nav -->

        <form class="search-wrapper mb-2" action="#">
            <input type="text" class="form-control mb-0" placeholder="Search..." required />
            <button class="btn icon-search text-white bg-transparent p-0" type="submit"></button>
        </form>

        <div class="social-icons">
            <a href="{{url('#')}}" class="social-icon social-facebook icon-facebook" target="_blank">
            </a>
            <a href="{{url('#')}}" class="social-icon social-twitter icon-twitter" target="_blank">
            </a>
            <a href="{{url('#')}}" class="social-icon social-instagram icon-instagram" target="_blank">
            </a>
        </div>
    </div>
    <!-- End .mobile-menu-wrapper -->
</div>
<!-- End .mobile-menu-container -->

<div class="sticky-navbar">
    <div class="sticky-info">
        <a href="{{url('demo4.html')}}">
            <i class="icon-home"></i>Home
        </a>
    </div>
    <div class="sticky-info">
        <a href="{{url('category.html')}}" class="">
            <i class="icon-bars"></i>Categories
        </a>
    </div>
    <div class="sticky-info">
        <a href="{{url('wishlist.html')}}" class="">
            <i class="icon-wishlist-2"></i>Wishlist
        </a>
    </div>
    <div class="sticky-info">
        <a href="{{url('login.html')}}" class="">
            <i class="icon-user-2"></i>Account
        </a>
    </div>
    <div class="sticky-info">
        <a href="{{url('cart.html')}}" class="">
            <i class="icon-shopping-cart position-relative">
                <span class="cart-count badge-circle">3</span>
            </i>Cart
        </a>
    </div>
</div>

<div class="newsletter-popup mfp-hide bg-img" id="newsletter-popup-form" style="background: #f1f1f1 no-repeat center/cover " {{url('public/web/assets/images/newsletter_popup_bg.jpg')}}"">
    <div class="newsletter-popup-content">
        <img src="{{url('public/web/assets/images/logo.png')}}" width="111" height="44" alt="Logo" class="logo-newsletter">
        <h2>Subscribe to newsletter</h2>

        <p>
            Subscribe to the Porto mailing list to receive updates on new arrivals, special offers and our promotions.
        </p>

        <form action="#">
            <div class="input-group">
                <input type="email" class="form-control" id="newsletter-email" name="newsletter-email" placeholder="Your email address" required />
                <input type="submit" class="btn btn-primary" value="Submit" />
            </div>
        </form>
        <div class="newsletter-subscribe">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" value="0" id="show-again" />
                <label for="show-again" class="custom-control-label">
                    Don't show this popup again
                </label>
            </div>
        </div>
    </div>
    <!-- End .newsletter-popup-content -->

    <button title="Close (Esc)" type="button" class="mfp-close">
        ×
    </button>
</div>

<!-- End .newsletter-popup -->

<a id="scroll-top" href="{{url('#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
    <script src="{{url('public/web/assets/js/jquery.min.js')}}"></script>
    <script src="{{url('public/web/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('public/web/assets/js/optional/isotope.pkgd.min.js')}}"></script>
    <script src="{{url('public/web/assets/js/plugins.min.js')}}"></script>
    <script src="{{url('public/web/assets/js/jquery.appear.min.js')}}"></script>

    <!-- Main JS File -->
    <script src="{{url('public/web/assets/js/main.min.js')}}"></script>

    <script>
        addcart();

        function addcart() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var html = '';
            $.ajax({
                url: url + '/add-cart',
                method: 'post',
                success: function(data) {
                    items = 0;
                    total = 0;
                    $.each(data, function(key, value) {
                        items += parseFloat(value.ca_p_cou);
                        total += value.p_s_p * value.ca_p_cou;
                        html += `<div class="product">
        <div class="product-details">
            <h4 class="product-title">
                <a href="{{url('product-detail/')}}/${value.p_name}">${value.p_name}</a>
            </h4>

            <span class="cart-product-info">
                <span class="cart-product-qty">${value.ca_p_cou}</span> × ${value.p_s_p}
            </span>
        </div>
        <!-- End .product-details -->

        <figure class="product-image-container">
            <a href="{{url('product.html')}}" class="product-image">
                <img src="{{url('public/images/${value.img}')}}" alt="product" width="80" height="80">
            </a>

            <a href="{{url('#')}}" class="btn-remove"  data="${value.ca_id}" title="Remove Product"><span>×</span></a>
        </figure>
    </div>
`;
                    })
                    $('.dropdown-cart-products').html(html);
                    $('.cart-count').text(items);
                    $('.subtotal-amount').html('Rs. ' + total);
                }

            })
            $(document).on('click','.btn-remove',function(){
                var data = $(this).attr('data');
                $.ajax({  
                    method:'post',
                    url:"{{url('delete-cart')}}",
                    data:{
                        data:data
                    },
                    success: function(result){
                        addcart();
                    }
                })
            });
        }
    </script>


    </body>


    </html>