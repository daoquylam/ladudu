        <header class="header menu_fixed">
		<!-- <div id="preloader"><div data-loader="circle-side"></div></div> --><!-- /Preload -->
		<div id="logo">
			<a href="index.php">
                            <img src="<?php echo public_url();?>/site/img/logo.png" width="150" height="36" data-retina="true" alt="" class="logo_normal">
				<img src="<?php echo public_url();?>/site/img/logo_sticky.png" width="150" height="36" data-retina="true" alt="" class="logo_sticky">
			</a>
		</div>
		<ul id="top_menu">
			<li><a href="" class="cart-menu-btn" title="Cart"><strong>1</strong></a></li>
                        <li><a href="<?php echo base_url('register') ?>" class="login" title="Đăng Nhập/Đăng Ký">Đăng Nhập/Đăng ký</a></li>
		</ul>
		<!-- /top_menu -->
		<a href="#menu" class="btn_mobile">
			<div class="hamburger hamburger--spin" id="hamburger">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
		</a>
		<nav id="menu" class="main-menu">
			<ul>
				<li><span><a href="index.php">Trang chủ</a></span></li>
				<li><span><a href="<?php echo base_url('product/catalog/12') ?>">Gỗ Nguyên Liệu</a></span></li>
				<li><span><a href="<?php echo base_url('product/catalog/16') ?>">Nội thất gỗ</a></span></li>
				<li><span><a href="about.html">Giới thiệu</a></span></li>
				<li><span><a href="contacts.html">Liên hệ</a></span></li>
				<li><span><a href=""></a></span></li>
				<li><span><a href=""></a></span></li>
			</ul>
		</nav>
                <!-- /header 
                <//?php if(isset($_SESSION['message'])):?>
                    <div class="alert alert-secondary" role="alert">
                        <p><strong>Thông báo: </strong><//?php echo $_SESSION['message']?></p>
                    </div>
                <//?php endif;?>
                -->

	</header>
	<!-- /header -->