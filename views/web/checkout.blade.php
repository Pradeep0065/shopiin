<main class="main main-test">
    <div class="container checkout-container">
        <ul class="checkout-progress-bar d-flex justify-content-center flex-wrap">
            <li>
                <a href="cart.html">Shopping Cart</a>
            </li>
            <li class="active">
                <a href="checkout.html">Checkout</a>
            </li>
            <li class="disabled">
                <a href="#">Order Complete</a>
            </li>
        </ul>

        <div class="login-form-container">
            <h4>Returning customer?
                <button data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="btn btn-link btn-toggle">Login</button>
            </h4>

            <div id="collapseOne" class="collapse">
                <div class="login-section feature-box">
                    <div class="feature-box-content">
                        <form action="#" id="login-form">
                            <p>
                                If you have shopped with us before, please enter your details below. If you are a new customer, please proceed to the Billing & Shipping section.
                            </p>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="mb-0 pb-1">Username or email <span class="required">*</span></label>
                                        <input type="email" class="form-control" required />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="mb-0 pb-1">Password <span class="required">*</span></label>
                                        <input type="password" class="form-control" required />
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn">LOGIN</button>

                            <div class="form-footer mb-1">
                                <div class="custom-control custom-checkbox mb-0 mt-0">
                                    <input type="checkbox" class="custom-control-input" id="lost-password" />
                                    <label class="custom-control-label mb-0" for="lost-password">Remember
                                        me</label>
                                </div>

                                <a href="forgot-password.html" class="forget-password">Lost your password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="checkout-discount">
            <h4>Have a coupon?
                <button data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne" class="btn btn-link btn-toggle">ENTER YOUR CODE</button>
            </h4>

            <div id="collapseTwo" class="collapse">
                <div class="feature-box">
                    <div class="feature-box-content">
                        <p>If you have a coupon code, please apply it below.</p>

                        <form action="#">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-sm w-auto" placeholder="Coupon code" required="" />
                                <div class="input-group-append">
                                    <button class="btn btn-sm mt-0" type="submit">
                                        Apply Coupon
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <form method="post">
            <div class="row">
                <div class="col-lg-7">
                    <div class="axil-checkout-billing">

                        <h2 class="step-title">Billing details</h2>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First name
                                        <abbr class="required" title="required">*</abbr>
                                    </label>
                                    <input type="text" class="form-control" id="first_name" required />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Last name
                                        <abbr class="required" title="required">*</abbr></label>
                                    <input type="text" class="form-control" id="last_name" required />
                                </div>
                            </div>
                        </div>





                        <div class="form-group mb-1 pb-2">
                            <label>Street address
                                <abbr class="required" title="required">*</abbr></label>
                            <input type="text" class="form-control" id="street_address" placeholder="House number and street name" required />
                        </div>



                        <div class="form-group">
                            <label>Town / City
                                <abbr class="required" title="required">*</abbr></label>
                            <input type="text" class="form-control" id="town" required />
                        </div>



                        <div class="form-group">
                            <label>Postcode / Zip
                                <abbr class="required" title="required">*</abbr></label>
                            <input type="text" class="form-control" id="pincode" required />
                        </div>

                        <div class="form-group">
                            <label>Phone <abbr class="required" title="required">*</abbr></label>
                            <input type="tel" class="form-control" id="phone" required />
                        </div>

                        <div class="form-group">
                            <label>Email address
                                <abbr class="required" title="required">*</abbr></label>
                            <input type="email" class="form-control" id="email" required />
                        </div>



                        <div class="form-group">
                            <label>Create account password
                                <abbr class="required" title="required">*</abbr></label>
                            <input type="password" placeholder="Password" id="password" class="form-control" required />
                        </div>


                    </div>
                </div>
                <!-- End .col-lg-8 -->

                <div class="col-lg-5">
                    <div class="order-summary">
                        <h3>YOUR ORDER</h3>

                        <table class="table table-mini-cart">
                            <thead>
                                <tr>
                                    <th colspan="2">Product</th>
                                </tr>
                            </thead>
                            <tbody id="data">



                            </tbody>
                            <tfoot>
                                <tr class="cart-subtotal">
                                    <td>
                                        <h4>Total</h4>
                                    </td>

                                    <td class="price-col">
                                        <h6 class="total-amount">Rs.</h6>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>

                        <div class="payment-methods">
                            <h4 class="">Payment methods</h4>
                            <div class="info-box with-icon p-0">


                                <tr>
                                    <div class="form-group form-group-custom-control ">
                                        <div class="custom-control custom-radio d-flex">
                                            <input type="radio" class="custom-control-input" name="delivery" value="cashondelivery" checked />
                                            <label class="custom-control-label">Cash on delivery</label>
                                        </div>
                                        <!-- End .custom-checkbox -->
                                    </div>
                                </tr>
                                <tr>
                                    <div class="form-group form-group-custom-control mb-0">
                                        <div class="custom-control custom-radio d-flex mb-0">
                                            <input type="radio" name="delivery" class="custom-control-input" value="onlinepayment">
                                            <label class="custom-control-label">UPI</label>
                                        </div>
                                        <!-- End .custom-checkbox -->
                                    </div>


                                    <!-- End .form-group -->


                                    <!-- End .form-group -->


                                </tr>
                            </div>
                        </div>

                        <button type="button" class="btn btn-dark btn-place-order checkout-btn" form="checkout-form">
                            Place order
                        </button>
                    </div>
                    <!-- End .cart-summary -->
                </div>
                <!-- End .col-lg-4 -->
            </div>
        </form>

        <!-- End .row -->
    </div>
<script src="https://checkout.razorpay.com/v1/checkout.js "></script>


    <script>
        $(document).ready(function() {});
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        get_checkout();

        function get_checkout() {
            html = '';
            $.ajax({
                method: 'post',
                url: "{{url('add-cart')}}",
                success: function(item) {
                    items = 0;
                    subtotal = 0;
                    $.each(item, function(index, value) {
                        items += value.ca_p_cou;
                        subtotal += value.p_s_p * value.ca_p_cou;
                        html += `  <tr>
                                <td class="product-col">
                                    <h3 class="product-title">
                                    ${value.p_name} ×
                                        <span class="product-qty">${value.ca_p_cou}</span>
                                    </h3>
                                </td>

                                <td class="price-col">
                                    <span>Rs. ${value.p_s_p * value.ca_p_cou}</span>
                                </td>
                            </tr>`;

                    });
                    $('#data').html(html);
                    $('.total-amount').html('Rs. ' + subtotal);
                }

            })
            $(document).on('click', '.checkout-btn', function() {
                var cash = $('input[name="delivery"]:checked').val();
                if (items == 0) {
                    alert("Please add some product to cart");
                } else {
                    
                    if (cash == 'cashondelivery') {
                        placeorder(0);
                        window.location.href = "{{ url('/myorder') }}";
                    } else if (cash == 'onlinepayment') {
                        onlinepay();
                    }
                }

            });

            function placeorder(param) {
                var first_name = $('#first_name').val();
                var last_name = $('#last_name').val();
                var street_address = $('#street_address').val();
                var Pincode = $('#pincode').val();
                var town = $('#town').val();
                var phone = $('#phone').val();
                var email = $('#email').val();
                var password = $('#password').val();
                var cash = $('input[name="delivery"]:checked').val();

                


                $.ajax({
                    url: "{{url('placeorder') }}",
                    method: 'post',
                    data: {
                        //"_token": "{{ csrf_token() }}",
                        'first_name': first_name,
                        'last_name': last_name,
                        'street_address': street_address,
                        'Pincode': Pincode,
                        'town': town,
                        'phone': phone,
                        'email': email,
                        'password': password,
                        'cash': cash,
                        'paymentid': param


                    },
                    success: function(data) {
                        window.location.href = "{{url('myorder')}}"
                    }
                });

            }

            function onlinepay(e) {
                $.ajax({
                    url: "{{ url('add-cart') }}",
                    method: "post",
                    success: function(item) {
                        items = 0;
                        subtotal = 0;
                        $.each(item, function(index,
                            value) {
                            subtotal += value
                                .p_s_p * value
                                .ca_p_cou;
                        });

                        var amount = subtotal;
                        var options = {
                            "key": "rzp_test_zHhNFsppG7bIjH", // Enter the Key ID generated from the Dashboard
                            "amount": amount *
                                100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                            "name": "The Digital Oceans",
                            "description": 'My Payments',
                            "image": "https://example.com/your_logo",
                            "handler": function(
                                response) {
                                var paymentid =
                                    response
                                    .razorpay_payment_id;
                                placeorder(paymentid);
                            },
                            "theme": {
                                "color": "#3399cc"
                            }
                        };
                        var rzp1 = new Razorpay(options);
                        rzp1.open();
                        e.preventDefault();

                    }

                });
            }

        }
    </script>
</main>