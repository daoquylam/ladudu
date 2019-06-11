<main>
		<section class="hero_in tours_detail">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span><?php echo $product->TenSanPham?></h1>
				</div>
				<span class="magnific-gallery">
                                    <a href="<?php echo base_url('upload/product/'.$product->image)?>" class="btn_photos" title="Photo title" data-effect="mfp-zoom-in">Xem Hình Ảnh</a>
                                    <?php if(is_array($image_list)):?>
					<?php foreach ($image_list as $img):?>
				           <a href="<?php echo base_url('upload/product/'.$img)?>" title="Photo title" data-effect="mfp-zoom-in"></a>
                                        <?php endforeach;?>
				    <?php endif;?>

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
                                            <form method="POST" action="<?php echo base_url('Cart/add/'.$product->ID) ?>">
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
                                                        
<!--							<a href="cart-1.html" class="btn_1 full-width purchase">Mua Ngay</a>-->
                                                        <input class="btn_1 full-width purchase" type="submit" value="Thêm vào giỏ hàng">
                                                        <a href="cart-1.html" class="btn_1 full-width success">Thanh Toán</a>
							<a href="#" class="btn_1 full-width outline wishlist"><i class="icon-call"></i> Gọi 098765431 để được tư vấn</a>
							
						</div>
                                            </form>
					</aside>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
	</main>
	<!--/main-->