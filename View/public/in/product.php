<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<?php include_once Url_public.'in/catalog_sub.php'; ?>
		</div>
		<div class="col-sm-9">

			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-5">
						<img src="<?php echo Url_public ?>img/<?php echo $data[0]['img'] ?>" alt="">
					</div>
					<div class="col-sm-7">
						<div class="product_main">
							<h2><?php echo ($data[0]['name']) ?></h2>
							<div class="product__price">
								<?php if ($data[0]['sale'] > 0) {
									?>
									<p class="pro__price"><?php echo $data[0]['price_new']-(($data[0]['price_new']*$data[0]['sale'])/100); ?>₫</p>
									<p class="pro__price__del">
										<del><?php echo $data[0]['price_new']; ?>₫</del>
									</p>
									<?php
								}else{
									?>
									<p class="pro__price"><?php echo $data[0]['price_new'] ?>₫</p>
									<?php
								} 
								?>

							</div>
							<div class="form-group">
								<label for="name">sale</label>
								<input required name="sale" type="number" class="sale form-control" placeholder="0">
							</div>
							<div class="form-group">
								<label for="name">Màu</label>
								<select  class="form-control">
									<option>Đen</option>
									<option>Trắng</option>
								</select>
							</div>
							<div class="form-group" style="width: 50%; margin: 0 auto" >
								<a class="form-control" style="background: #e63535;color:white; text-align: center;" href="?cart=<?php echo $data[0]['id'] ?>">Mua Ngay</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>