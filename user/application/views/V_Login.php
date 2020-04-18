<!DOCTYPE html>
<html lang="en">
<head>
	<title>Masuk Alumniku</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?= base_url('assets/img/favicon.png');?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Login/vendor/bootstrap/css/bootstrap.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Login/vendor/animate/animate.css');?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Login/vendor/css-hamburgers/hamburgers.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Login/vendor/select2/select2.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Login/css/util.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Login/css/main.css');?>">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/img-01.jpg');">
			<div class="wrap-login100 p-t-50 p-b-30" style="background-color: orange;padding:30px; border-radius:10px; box-shadow: 1px 1px 5px black">
				<form class="login100-form validate-form" action="<?php echo base_url('Login/aksi_login');?>" method="POST">
					<div class="login100-form-avatar">
						<img src="<?php echo base_url('../admin/images/user.png');?>" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						SI Alumni
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button type="submit" class="login100-form-btn">
							Masuk
						</button>
					</div>
					<!-- <div class="text-center w-full p-t-25 p-b-230">
						<a href="#" class="txt1">
							<p>Belum Punya akun? Silahkan Hubungi Admin!</p>
						</a>
					</div> -->
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="<?php echo base_url('assets/Login/vendor/jquery/jquery-3.2.1.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/Login/vendor/bootstrap/js/popper.js');?>"></script>
	<script src="<?php echo base_url('assets/Login/vendor/bootstrap/js/bootstrap.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/Login/vendor/select2/select2.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/Login/js/main.js');?>"></script>

</body>
</html>