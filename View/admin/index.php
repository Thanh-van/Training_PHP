<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>

	<link rel="stylesheet" type="text/css" href="View/admin/css/style.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<!-- sidebar -->
			<div class="col-md-3 col-lg-2 px-0 position-fixed vh-100 bg-white shadow-sm sidebar" id="sidebar">
				<h1 class="bi bi-bootstrap text-primary d-flex my-4 justify-content-center"></h1>
				<div class="list-group rounded-0">
					<a href="<?php echo url_admin; ?>" class="list-group-item list-group-item-action active border-0 d-flex align-items-center">
						<span class="bi bi-house-door-fill"></span>
						<span class="ml-2">Home</span>
					</a>
					<a href="<?php echo url_admin; ?>&view=user" class="list-group-item list-group-item-action border-0 align-items-center">
						<span class="bi bi-people"></span>
						<span class="ml-2">User</span>
					</a>
					<a href="<?php echo url_admin; ?>&view=Catalog" class="list-group-item list-group-item-action border-0 align-items-center">
						<span class="bi bi-menu-button-fill"></span>
						<span class="ml-2">Catalog</span>
					</a>
					<a href="<?php echo url_admin; ?>&view=Product" class="list-group-item list-group-item-action border-0 align-items-center">
						<span class="bi bi-card-list"></span>
						<span class="ml-2">Product</span>
					</a>
					<a href="<?php echo url_admin; ?>&view=comment" class="list-group-item list-group-item-action border-0 align-items-center">
						<span class="bi bi-chat-dots-fill"></span>
						<span class="ml-2">Comment</span>
					</a>
					
				</div>
			</div>
			<!-- overlay to close sidebar on small screens -->
			<div class="w-100 vh-100 position-fixed overlay d-none" id="sidebar-overlay">
				
			</div>
			<!-- note: in the layout margin auto is the key as sidebar is fixed -->
			<div class="col-md-9 col-lg-10 ml-md-auto px-0">
				<!-- top nav -->
				<nav class="w-100 d-flex px-4 py-2 mb-4 shadow-sm">
					<!-- close sidebar -->
					<p style="margin: 0;color: #16a085">Hi <?php echo $_SESSION['login'][0]['name']; ?> !</p>
					<button class="btn py-0 d-lg-none" id="open-sidebar">
						<span class="bi bi-list text-primary h3"></span>
					</button>
					<div class="dropdown ml-auto">
						<button class="btn py-0 d-flex align-items-center" id="logout-dropdown" data-toggle="dropdown" aria-expanded="false">
							Cá Nhân
							<span class="bi bi-chevron-down ml-1 mb-2 small"></span>
						</button>
						<div class="dropdown-menu dropdown-menu-right border-0 shadow-sm" aria-labelledby="logout-dropdown">
							<a class="dropdown-item" href="<?php echo url_admin; ?>&out=0">Logout</a>
							<a class="dropdown-item" href="#">Settings</a>
						</div>
					</div>
				</nav>
				<!-- main content -->
				<main class="container-fluid">
					<?php  include_once 'lb/autoload.php'; Router::View_admin($data1,$menu);	?>
				</main>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(()=>{

			$('#open-sidebar').click(()=>{

      // add class active on #sidebar
      $('#sidebar').addClass('active');
      
      // show sidebar overlay
      $('#sidebar-overlay').removeClass('d-none');

  });


			$('#sidebar-overlay').click(function(){

      // add class active on #sidebar
      $('#sidebar').removeClass('active');
      
      // show sidebar overlay
      $(this).addClass('d-none');

  });
		// $('#logout-dropdown').click(function() {
		// 	var x = $('.dropdown-menu');
		// 	if (x.css('display')=='none') {
		// 		x.css('display','block');
		// 	}else{
		// 		x.css('display','none');
		// 	}
		// });

	});
</script>
</body>
</html>