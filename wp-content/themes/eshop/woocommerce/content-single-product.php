<?php

	defined( 'ABSPATH' ) || exit;

	global $product;

?>

<div class="col-12">
	<?php do_action( 'woocommerce_before_single_product' ); ?>
</div>


<div id="product-<?php the_ID(); ?>" <?php wc_product_class( 'col-12 product-content-wrapper', $product ); ?>>

	<div class="row">
		<div class="col-md-5 col-lg-4 mb-3">
			<div class="bg-white h-100">
				<div id="carouselExampleFade" class="carousel carousel-dark slide carousel-fade">
					<div class="carousel-inner">
						<?php 
							$product_img_id = $product->get_image_id();
							if ($product_img_id) {

								$main_img = wp_get_attachment_url($product_img_id);
							} else {

								$main_img = wc_placeholder_img_src('woocommerce_full');
							}

							$product_img_ids = $product->get_gallery_image_ids();
						?>

						<div class="carousel-item active">
							<img src="<?php echo $main_img; ?>" class="d-block w-100" alt="<?php echo $product->get_title(); ?>">
						</div>

						<?php if ($product_img_ids): ?>
							<?php foreach ($product_img_ids as $product_img_id): ?>
								<div class="carousel-item">
									<img 
										src="<?php echo wp_get_attachment_url($product_img_id); ?>" 
										class="d-block w-100" 
										alt="<?php echo $product->get_title(); ?>"
									>
								</div>
							<?php endforeach; ?>
						<?php endif; ?>
					</div>

					<?php if ($product_img_ids): ?>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<div class="col-md-7 col-lg-8 mb-3">
			<div class="bg-white product-content p-3 h-100">
				<h1 class="section-title h3">
					<span>Product Name</span>
				</h1>

				<div class="product-price">
					<small>4000 tg</small>
					3000 tg
				</div>

				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. 
					Distinctio repellendus modi culpa provident velit accusantium 
					voluptate voluptatem veniam, aperiam fugiat illo dolorum nobis ipsum 
					voluptatum porro eum! At, nobis cumque.
				</p>

				<div class="product-add2cart">
					<div class="input-group">
						<input type="number" class="form-control" value="1" min="1">
						<button class="btn btn-warning">
							<i class="fas fa-shopping-cart"></i>
							Add to cart
						</button>
					</div>
				</div>

				<div class="row mt-3">
					<div class="col-lg-4 mb-3">
						<div class="card h-100">
							<div class="card-body">
								<h5 class="card-title">
									<i class="fa-solid fa-shield-halved"></i>
									&nbsp; Guarantee
								</h5>
								<ul class="list-unstyled">
									<li>Warranty 1 year</li>
									<!-- <li>Гарантия 1 год</li> -->
									<li>Return of goods within 14 days</li>
									<!-- <li>Возвращение товара в течение 14 дней</li> -->
									<li>Quality assurance</li>
									<!-- <li>Гарантия качества</li> -->
								</ul>
							</div>
						</div>
					</div>

					<div class="col-lg-4 mb-3">
						<div class="card h-100">
							<div class="card-body">
								<h5 class="card-title">
									<i class="fa-solid fa-truck-fast"></i>
									&nbsp; Delivery
								</h5>
								<ul class="list-unstyled">
									<li>Delivery throughout the country</li>
									<!-- <li>Доставка по всей стране</li> -->
									<li>Mail delivery</li>
									<!-- <li>Доставка почтой</li> -->
									<li>Pickup</li>
									<!-- <li>Самовывоз</li> -->
								</ul>
							</div>
						</div>
					</div>

					<div class="col-lg-4 mb-3">
						<div class="card h-100">
							<div class="card-body">
								<h5 class="card-title">
									<i class="fa-regular fa-credit-card"></i>
									&nbsp; Payment
								</h5>
								<ul class="list-unstyled">
									<li>Cash</li>
									<!-- <li>Наличный рачет</li> -->
									<li>Cashless payments</li>
									<!-- <li>Безналичный расчет</li> -->
									<li>VISA / MasterCard</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
