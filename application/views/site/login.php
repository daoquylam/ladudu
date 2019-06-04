<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Panagea - Premium site template for travel agencies, hotels and restaurant listing.">
    <meta name="author" content="Ansonika">
    <title>Panagea | Premium site template for travel agencies, hotels and restaurant listing.</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="<?php echo public_url();?>/site/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="<?php echo public_url();?>/site/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php echo public_url();?>/site/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php echo public_url();?>/site/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?php echo public_url();?>/site/img/apple-touch-icon-144x144-precomposed.png">

    <!-- BASE CSS -->
    <link href="<?php echo public_url();?>/site/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo public_url();?>/site/css/style.css" rel="stylesheet">
	<link href="<?php echo public_url();?>/site/css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="<?php echo public_url();?>/site/css/custom.css" rel="stylesheet">

</head>

<body id="login_bg">
	
	<nav id="menu" class="fake_menu"></nav>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->
	
	<div id="login">
		<aside>
			<figure>
				<a href="<?php echo base_url();?>"><img src="<?php echo public_url();?>/site/img/logo_sticky.png" width="155" height="36" data-retina="true" alt="" class="logo_sticky"></a>
			</figure>
			  <form method="POST" action="<?php echo base_url('/login/check') ?>">
				
				<div class="form-group">
					<label>Email</label>
					<input class="form-control" type="text" name="email" value="<?php echo set_value('email')?>">
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<label>Mật Khẩu</label>
					<input type="password" class="form-control" name="password" id="password" value="">
					<i class="icon_lock_alt"></i>
				</div>
                              <div class="form-group">
					<div><?php echo form_error('login')?></div>
				</div>
				
				<input class="btn_1 rounded full-width add_top_30" type='submit' value="Đăng nhập!" name='submit' >
				<div class="text-center add_top_10">Đăng ký thành viên mới? <strong><a href="<?php echo base_url('register');?>">Đăng ký</a></strong></div>
			</form>
			<div class="copy">© 2019 Lâm Dung</div>
		</aside>
	</div>
	<!-- /login -->
		
	<!-- COMMON SCRIPTS -->
    <script src="<?php echo public_url();?>/site/js/jquery-2.2.4.min.js"></script>
    <script src="<?php echo public_url();?>/site/js/common_scripts.js"></script>
    <script src="<?php echo public_url();?>/site/js/main.js"></script>
<!--	<script src="<?php echo public_url();?>/site/assets/validate.js"></script>	-->
  
</body>
</html>