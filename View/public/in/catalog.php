<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<?php include_once Url_public.'in/catalog_sub.php'; ?>
		</div>
		<div class="col-sm-9">

			<div class="container-fluid catalog">

				<div class="row">
					<?php if (isset($data) && $data!=0) {
						# code...
					 foreach ($data as $key => $value) {
			# code...
						?>
						<div class="col-md-3">
							<div class="item__product">
								<div class="product__img">
									<?php if ($value['sale'] > 0 ) {
										?><div class="product-sale">
											<span><label class="sale-lb">- </label> <?php echo $value['sale']; ?>%</span>
										</div>
										<?php
									} ?>

									<a href="?view=product&p=<?php echo $value['id'] ?>">
										<img src="<?php echo Url_public ?>img/<?php echo $value['img'] ?>" alt="">
									</a>
									<div class="shop__view">
										<div class="add__cart">
											<a href=""><i class="bi bi-cart-plus"></i></a>
										</div>
										<div class="show__product__dilog">
											<a href=""><i class="bi bi-eye-fill"></i>
											</a>
										</div>
									</div>
								</div>
								<div class="product__detail text-center">
									<div class="product__name">
										<a href="?view=product&p=<?php echo $value['id'] ?>"><?php echo $value['name']; ?></a>
									</div>
									<div class="product__price">
										<?php if ($value['sale'] > 0) {
											?>
											<p class="pro__price"><?php echo $value['price_new']-(($value['price_new']*$value['sale'])/100); ?>₫</p>
											<p class="pro__price__del">
												<del><?php echo $value['price_new']; ?>₫</del>
											</p>
											<?php
										}else{
											?>
											<p class="pro__price"><?php echo $value['price_new'] ?>₫</p>
											<?php
										} 
										?>

									</div>
								</div>
							</div>
						</div>
					<?php }
					}else{
						?><h3 style="widows: 100%; text-align: center;">Không Có Sản Phẩm</h3><?php
					} ?>
				</div>
				<div class="d-flex justify-content-center more">
					<a href="">Xem Thêm</a>
				</div>
			</div>
		</div>