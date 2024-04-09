<main class="main">
	<div class="container">
		<ul class="checkout-progress-bar d-flex justify-content-center flex-wrap">
			<li class="active">
				<a href="{{url('cart')}}">Shopping Cart</a>
			</li>
			<li>
				<a href="{{url('checkout')}}">Checkout</a>
			</li>
			<li class="disabled">
				<a href="{{url('cart')}}">Order Complete</a>
			</li>
		</ul>

		<div class="row">
			<div class="col-lg-8">
				<div class="cart-table-container">
					<table class="table table-cart">
						<thead>
							<tr>
								<th class="thumbnail-col"></th>
								<th class="product-col">Product</th>
								<th class="price-col">Price</th>
								<th class="qty-col">Quantity</th>
								<th class="text-right">Subtotal</th>
							</tr>
						</thead>
						<tbody id="data">
							
						</tbody>


						<tfoot>
							<tr>
								<td colspan="5" class="clearfix">
									<div class="float-left">
										<div class="cart-discount">
											<form action="#">
												<div class="input-group">
													<input type="text" class="form-control form-control-sm" placeholder="Coupon Code" required>
													<div class="input-group-append">
														<button class="btn btn-sm" type="submit">Apply
															Coupon</button>
													</div>
												</div><!-- End .input-group -->
											</form>
										</div>
									</div><!-- End .float-left -->

									<div class="float-right">
										<button type="submit" class="btn btn-shop btn-update-cart">
											Update Cart
										</button>
									</div><!-- End .float-right -->
								</td>
							</tr>
						</tfoot>
					</table>
				</div><!-- End .cart-table-container -->
			</div><!-- End .col-lg-8 -->

			<div class="col-lg-4">
				<div class="cart-summary">
					<h3>CART TOTALS</h3>

					<table class="table table-totals">
						<tfoot>
							<tr>
								<td>Total</td>
								<td class="total-amount">Rs.</td>
							</tr>
						</tfoot>
					</table>

					<div class="checkout-methods">
						<a href="{{url('checkout')}}" class="btn btn-block btn-dark">Proceed to Checkout
							<i class="fa fa-arrow-right"></i></a>
					</div>
				</div><!-- End .cart-summary -->
			</div><!-- End .col-lg-4 -->
		</div><!-- End .row -->
	</div><!-- End .container -->

	<div class="mb-6"></div><!-- margin -->
	<script>
		$(document).ready(function() {
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

			getdata();

			function getdata() {
				html = '';
				$.ajax({
					method: 'post',
					url: "{{url('add-cart')}}",
					success: function(item){
					items = 0;
					total = 0;
					$.each(item , function(index, value){
                        items += value.ca_p_cou;
                        total += value.p_s_p * value.ca_p_cou;
						html +=`<tr class="product-row">
								<td>
									<figure class="product-image-container">
										<a href="{{url('product')}}" class="product-image">
											<img src="{{url('public/images/${value.img}')}}" alt="product">
										</a>

										<a href="#" class="btn-remove icon-cancel" title="Remove Product"></a>
									</figure>
								</td>
								<td class="product-col">
									<h5 class="product-title">
										<a href="{{url('product-detail/')}}/${value.p_name}">${value.p_name}</a>
									</h5>
								</td>
								<td>${value.p_s_p}</td>
								<td>
									<div class="product-single-qty">
										<input class="horizontal-quantity form-control" type="text" value=${value.ca_p_cou}>
									</div><!-- End .product-single-qty -->
								</td>
								<td class="text-right"><span class="subtotal-price">${value.ca_p_cou*value.p_s_p}</span></td>
							</tr>`

							

					})
					$('#data').html(html);
                    $('.total-amount').html('Rs. ' + total);

				}
				})
			}
			
		});
	</script>
</main><!-- End .main -->