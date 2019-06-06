<main>
		<section class="hero_in tours_detail">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span><?php echo $product->TenSanPham?></h1>
				</div>
				<span class="magnific-gallery">
					<a href="img/gallery/tour_list_1.jpg" class="btn_photos" title="Photo title" data-effect="mfp-zoom-in">Xem Hình Ảnh</a>
					<a href="img/gallery/tour_list_2.jpg" title="Photo title" data-effect="mfp-zoom-in"></a>
					<a href="img/gallery/tour_list_3.jpg" title="Photo title" data-effect="mfp-zoom-in"></a>
				</span>
			</div>
		</section>
		<!--/hero_in-->

		<div class="bg_color_1">
			<div class="container margin_60_35">
				<div class="row">
					<div class="col-lg-8">
							<h2>Mô tả sản phẩm</h2>
							<p><?php echo $product->MoTa?></p>
							<hr>
							<h3>Thông số sản phẩm</h3>
							<div class="row">
                                                            <ul class="bullets">
                                                                <li>Chất liệu: <?php echo $product->ChatLieu ?></li>
                                                                <li>Màu Sắc: <?php echo $product->MauSac ?></li>
                                                                <li>Kích Thước: <?php echo $product->KichThuoc ?></li>
                                                                <li>Xuất Xứ: <?php echo $product->XuatXu ?></li>
                                                            </ul>
							</div>

														
							<hr>
							<!-- /row -->
					</div>
					<!-- /col -->
					
					<aside class="col-lg-4" id="sidebar">
						<div class="box_detail booking">
							<div class="price">
								<div class="score"><span>Giá đã giảm</span><strong>70%</strong></div>
								<span><?php echo $product->Gia ?> <small>Giá ưu đãi</small></span>
								
							</div>
							<div class="panel-dropdown">
								<a href="#">Số Lượng <span class="qtyTotal">1</span></a>
								<div class="panel-dropdown-content right">
									<div class="qtyButtons">
										<label></label>
										<input type="text" name="qtyInput" value="1">
									</div>
								</div>
							</div>
                                                        
							<a href="cart-1.html" class="btn_1 full-width purchase">Mua Ngay</a>
							<a href="#" class="btn_1 full-width outline wishlist"><i class="icon-call"></i> Gọi 098765431 để được tư vấn</a>
							
						</div>
						<ul class="share-buttons">
							<li><a class="fb-share" href="#0"><i class="social_facebook"></i> Share</a></li>
							<li><a class="twitter-share" href="#0"><i class="social_twitter"></i> Tweet</a></li>
							<li><a class="gplus-share" href="#0"><i class="social_googleplus"></i> Share</a></li>
						</ul>
					</aside>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
	</main>
	<!--/main-->