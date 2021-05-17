<div class="header">
	<div class="header__top">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<a href=""><img src="<?php echo Url_public ?>img/logo.png" alt=""></a>
				</div>
				<div class="col-sm-8">
					<div class="login_sign d-flex justify-content-end">
						<div class="phone_login_sale">
							<div class="phone_login">
								<ul class="main-menu">
									<li><a href="">1900.636.099</a></li>
									<li><a href="">ĐĂNG KÝ</a></li>
									<?php if (isset($_SESSION['login'])) {
										?>
										<li><a href="<?php echo url_admin; ?>&out=0">ĐĂNG XUẤT</a></li>
										<?php
									}else {
										?>
										<li><a href="?action=login">ĐĂNG NHẬP</a></li>
										<?php
									} ?>
									
								</ul>
							</div>
							<div class="main-sale">
								<p>Miễn phí vận chuyển<span class="red"> ĐƠN HÀNG TRÊN 900K</span> </p>
							</div>

						</div>


						<div class="shop__cart_main ">
							<a href="">
								<i class="bi bi-cart4"></i>
							</a>

						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div class="header__menu">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light ">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">TRANG CHỦ<span class="sr-only">(current)</span></a>
						</li>
						<?php if (isset($menu)) {
							foreach ($menu['menu'] as $key => $hd) {
								if ($hd['visible']==1) {
									?>
									<li class="nav-item">
										<a class="nav-link"><?php echo $hd['name']; ?></a>
										<?php 
										if ($hd['childen']==1) {
											?>
											<ul class="sub-menu">
												<?php 
												foreach ($menu['menu1'] as $key => $v) {
													if ($hd['id']== $v['parent_id'] && $v['visible']==1) {
														?>
														<li class="nav-item"><a href="?view=catalog&c=<?php echo  $v['id']; ?>" class="nav-link"><?php echo  $v['name']; ?></a></li>

														<?php
													}
												}
												?>
											</ul>
											<?php

										}
										?>
								</li>
								<?php
							}
						}
					} ?>


					<li class="nav-item">
						<a class="nav-link" href="#">BLOG</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">GIỚI THIỆU</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">LIÊN HỆ</a>
					</li>
				</ul>
				<form class="form-inline ">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			</div>
		</nav>
	</div>
</div>
</div>
<div id="slider">
	<div class="owl-carousel owl-theme owl-loaded owl-drag">
		<div class="item">
			<img src="<?php echo Url_public ?>img/baner.jpg" alt="">
		</div>
		<div class="item">
			<img src="<?php echo Url_public ?>img/baner2.jpg" alt="">
		</div>
	</div>
</div>

