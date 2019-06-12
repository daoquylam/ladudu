        <header class="header menu_fixed">
		<!-- <div id="preloader"><div data-loader="circle-side"></div></div> --><!-- /Preload -->
		<div id="logo">
			<a href="#">
                            <img src="<?php echo public_url();?>/site/img/logo.png" width="150" height="36" data-retina="true" alt="" class="logo_normal">
				<img src="<?php echo public_url();?>/site/img/logo_sticky.png" width="150" height="36" data-retina="true" alt="" class="logo_sticky">
			</a>
		</div>
		<ul id="top_menu">
                    <?php if($this->cart->total()){ ?>
                    <li><a href="<?php echo base_url('cart') ?>" class="cart-menu-btn" title="Cart"><strong><?php echo $this->cart->total_items() ?></strong></a></li>
                    <?php } else{ ?>
                        <li><a href="" class="cart-menu-btn" title="Cart"></a></li>
                    <?php } ?>
                        <?php if(isset($_SESSION['user_id_login'])){ ?>
                               
                                <li>
				<div class="dropdown dropdown-user">
					<a href="#0" class="logged" data-toggle="dropdown" title="Logged"><img src="<?php echo public_url();?>/site/img/avatar.jpg" alt=""></a>
					<div class="dropdown-menu">
						<ul>
							<li><a href="#">Tên: <?php echo $_SESSION['user_info']->HoTen ?></a></li>
                                                        <li><a href="<?php echo base_url('danhsachdonhang'); ?>">Đơn Hàng Của Bạn</a></li>
							<li><a href="<?php echo base_url('login/logout') ?>">Logout</a></li>
						</ul>
					</div>
				</div>
			</li>
                            <?php } else{ ?>
                        
                                <li><a href="<?php echo base_url('register') ?>" class="login" title="Đăng Nhập/Đăng Ký">Đăng Nhập/Đăng ký</a></li>
                            <?php } ?>
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
				<li><span><a href="<?php echo base_url('home') ?>">Trang chủ</a></span></li>
				<li><span><a href="<?php echo base_url('product/catalog/1') ?>">Gỗ Nguyên Liệu</a></span></li>
				<li><span><a href="<?php echo base_url('product/catalog/2') ?>">Nội thất gỗ</a></span></li>
				<li><span><a href="#">Giới thiệu</a></span></li>
				<li><span><a href="#">Liên hệ</a></span></li>
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