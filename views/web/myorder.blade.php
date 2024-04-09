<main class="main-wrapper">

    <!-- Start Cart Area  -->
    <div class="axil-product-cart-area axil-section-gap">
        <div class="container">
            <div class="axil-product-cart-wrap">
                <div class="product-table-heading">
                    <h4 class="title">My Order</h4>
                    <a href="#" class="cart-clear">My Orders</a>
                </div>
                <div class="table-responsive">
                    <table class="table axil-product-table axil-cart-table mb--40">
                        <thead>
                            <tr>
                                <th scope="col" class="product-thumbnail">Order ID</th>
                                <th scope="col" class="product-price">Price</th>
                                <th scope="col" class="product-quantity">Payment Mode</th>
                            </tr>
                        </thead>
                        <tbody id="show_cart">
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>
    <!-- End Cart Area  -->

</main>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Order details</h1>
                <button type="button" class="mfp-close"><i class="fas fa-times-circle"></i></button>
            </div>
            <div class="modal-body">
                <table>
                    <thead>
                        <tr>
                            <th class="thumbnail-col">S.no.</th>
                            <th class="product-col">Image</th>
                            <th class="price-col">Product name</th>
                            <th class="qty-col">Quantity</th>
                            <th class="text-right">Price</th>
                            <th class="text-right">Sub Total</th>
                        </tr>
                    </thead>
                    <tbody id="data">

                    </tbody>
                </table>
                <div class="total border border-solid">
                    <h1>Total:- Rs. <span class="amount"></span></h1>
                </div>

            </div>

        </div>

    </div>
</div>



<div class="service-area">
    <div class="container">
        <div class="row row-cols-xl-4 row-cols-sm-2 row-cols-1 row--20">
            <div class="col">
                <div class="service-box service-style-2">
                    <div class="icon">
                        <i class="icon-shipping"></i>
                    </div>
                    <div class="content">
                        <h6 class="title">Fast &amp; Secure Delivery</h6>
                        <p>Tell about your service.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="service-box service-style-2">
                    <div class="icon">
                        <i class="icon-money"></i>
                    </div>
                    <div class="content">
                        <h6 class="title">Money Back Guarantee</h6>
                        <p>Within 10 days.</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="service-box service-style-2">
                    <div class="icon">
                        <i class="icon-support"></i>
                    </div>
                    <div class="content">
                        <h6 class="title">Pro Quality Support</h6>
                        <p>24/7 Live support.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        view_cart();

        function view_cart() {
            cart = '';

            $.ajax({
                url: "{{url('My_order')}}",
                method: "post",
                success: function(data) {
                    $.each(data, function(index, value) {
                        if (value.payment_id == 0) {
                            var mode = 'COD';
                        } else {
                            var mode = 'Online Payment'
                        }
                        cart += ` <tr>
                            <td class="product-title"><a href="{{ url('/view-product/') }}/${value.p_name}/${value.p_brand}/${value.p_category}">${value.o_id}</a></td>
                            <td class="product-price" data-title="Price"><span class="currency-symbol">Rs. </span>${value.o_amount}</td>
                            <td class="product-price" data-title="Price"><span class="currency-symbol"></span>${mode}</td>
                            <td class="product-subtotal" data-id="${value.o_id}" data-title="Subtotal"><a href="#">view detail</a></td>
                        </tr>`;
                    });
                    $('#show_cart').html(cart);

                }

            });
        }

        $(document).on('click', '.product-subtotal', function() {
            var id = $(this).attr('data-id');

            html = '';
            $.ajax({
                method: 'post',
                url: "{{url('view-order-detail')}}",
                data: {
                    id: id
                },
                success: function(result) {
                    $('#exampleModal').modal('show');
                    total = 0;
                    $.each(result, function(index, value) {
                        console.log(value.p_name);
                        total += value.p_s_p * value.ca_p_cou
                        html += `<tr class="product-row">
								<td>${index + 1}</td>
								<td>
									<figure class="product-image-container">
										<a href="{{url('product')}}" class="product-image">
											<img style="width:100px; height:100px;" src="{{url('public/images/${value.img}')}}" alt="product">
										</a>

									</figure>
								</td>
								<td class="product-col">
									<h5 class="product-title">
										<a href="{{url('product-detail/')}}/${value.p_name}">${value.p_name}</a>
									</h5>
								</td>
								<td>
									<div class="product-single-qty">
										<input class="horizontal-quantity form-control" type="text" value=${value.ca_p_cou}>
									</div>
								</td>
								<td>${value.p_s_p}</td>
								<td class="text-right"><span class="subtotal-price">${value.ca_p_cou*value.p_s_p}</span></td>
							 </tr>`

                    });

                    $('#data').html(html);
                    $('.amount').html(result[0].o_amount);
                }

            })
        });

        $(document).on('click', '.mfp-close', function() {
            $('#exampleModal').modal('hide');
        });

    });
</script>