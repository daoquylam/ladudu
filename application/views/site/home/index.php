<div id="full-slider-wrapper">
			<div id="layerslider" style="width:100%;height:750px;">
				<!-- first slide -->
				<div class="ls-slide" data-ls="slidedelay: 5000; transition2d:85;">
					<img src="<?php echo public_url();?>/site/img/home_slider/01.jpg" class="ls-bg" alt="Slide background">
					<h3 class="ls-l slide_typo" style="top: 47%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">Gỗ Nguyên Liệu</h3>
					<p class="ls-l slide_typo_2" style="top:55%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">
						Chuyên cung cấp gỗ nguyên liệu cao cấp dùng trong chế tác đồ gỗ nội thất
					</p>
					<a class="ls-l btn_1 rounded" style="top:65%; left:50%;white-space: nowrap;" data-ls="durationin:2000;delayin:1400;easingin:easeOutElastic;" href='hotels-grid-isotope.html'>Chi tiết</a>
				</div>
				<!-- second slide -->
				<div class="ls-slide" data-ls="slidedelay:5000; transition2d:103;">
					<img src="<?php echo public_url();?>/site/img/home_slider/04.jpg" class="ls-bg" alt="Slide background">
					<h3 class="ls-l slide_typo" style="top: 47%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">Đồ gỗ nội thất cao cấp</h3>
					<p class="ls-l slide_typo_2" style="top:55%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">
						Cung cấp đồ gỗ nội thất cao cấp sang trọng thời thượng
					</p>
					<a class="ls-l btn_1 rounded" style="top:65%; left:50%;white-space: nowrap;" data-ls="durationin:2000;delayin:1400;easingin:easeOutElastic;" href='tours-grid-isotope.html'>Chi tiết</a>
				</div>
				<!-- third slide -->
				<div class="ls-slide" data-ls="slidedelay: 5000; transition2d:5;">
					<img src="<?php echo public_url();?>/site/img/home_slider/05.jpg" class="ls-bg" alt="Slide background">
					<h3 class="ls-l slide_typo" style="top:47%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">Gia công nội thất gỗ</h3>
					<p class="ls-l slide_typo_2" style="top:55%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">
						Nhận gia công gỗ trên dây chuyền hiện đại
					</p>
					<a class="ls-l btn_1 rounded" style="top:65%; left:50%;" data-ls="durationin:2000;delayin:1400;easingin:easeOutElastic;" href='tours-grid-sidebar.html'>Chi tiết</a>
				</div>
			</div>
		</div>
		<!-- End layerslider -->

		<div class="container-fluid margin_80_0">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Một số sản phẩm ưa thích</h2>
				<p>Là những sản phẩm được rất nhiều khách hàng chọn lựa</p>
			</div>
			<div id="reccomended" class="owl-carousel owl-theme">
				
				<?php foreach ($sanpham_moi as $row):?>
                                <div class="item">
					<div class="box_grid">
						<figure>
                                                    <a href="<?php echo base_url('/product/view/'.$row->ID) ?>"><img src="<?php echo base_url('upload/product/'.$row->image)?>" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Xem thêm</span></div></a>
						</figure>
						<div class="wrapper">
							<h3><a href="<?php echo base_url('/product/view/'.$row->ID) ?>"><?php echo $row->TenSanPham?></a></h3>
							<p><?php echo "Đây là 1 mô tả";?></p>
							<span class="price">Giá chỉ từ <strong>$<?php echo $row->Gia;?></strong> /bộ</span>
						</div>
					</div>
				</div>
				<!-- /item -->
                                <?php endforeach;?>
				<!-- /item -->
				
			</div>
			<!-- /carousel -->
			<div class="container">
				<p class="btn_home_align"><a href="tours-grid-isotope.html" class="btn_1 rounded">Xem tất cả sản phẩm</a></p>
			</div>
			<!-- /container -->
			<hr class="large">
<!--                        ///////////////////////////////////////////////////////-->

                      
                        
		</div>
                
                
                
		<!-- /container -->
		
		<!--  -->
		<div class="bg_color_1">
			<div class="container margin_80_55">
				<div class="main_title_2">
					<span><em></em></span>
					<h3>Khách hàng nói gì</h3>
					<p>Nhận xét của những người đã sử dụng sản phẩm của chúng tôi</p>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<a class="box_news" href="#0">
							<figure><img src="<?php echo public_url();?>/site/img/news_home_1.jpg" alt="">
							</figure>
							<ul>
								<li>Cù Dung</li>
								<li>16/10/2019</li>
							</ul>
							<p>Sản phẩm được thiết kế và thi công giống như yêu cầu của tôi.

Nhân viên giao hàng nhiệt tình, tiến độ thi công và lắp ráp đúng theo quy định.

Xem thêm sản phẩm công trình tại đây! </p>
						</a>
					</div>
					<!-- /box_news -->
					<div class="col-lg-6">
						<a class="box_news" href="#0">
							<figure><img src="<?php echo public_url();?>/site/img/news_home_2.jpg" alt="">
							</figure>
							<ul>
								<li>Viết Anh</li>
								<li>10.10.2019</li>
							</ul>
							<p>Thiết kế và sản xuất đúng như bản vẽ. Sản phẩm sắc nét, thi công nhanh chóng và hiệu quả. Chúc cho công ty không ngừng phát triển để mang đến những nội thất sang trọng cho các gia đình khác nhé!</p>
						</a>
					</div>
					<!-- /box_news -->
					<div class="col-lg-6">
						<a class="box_news" href="#0">
							<figure><img src="<?php echo public_url();?>/site/img/news_home_3.jpg" alt="">
							</figure>
							<ul>
								<li>Anh Viết</li>
								<li>01.10.2019</li>
							</ul>
							<p>Dịch vụ bảo hành của công ty thực sự rất tốt, khi mua đồ nội thất của công ty Hoàng Gia về sử dụng, nếu như sản phẩm không may bị lỗi hay hỏng hóc chi cần gọi điện đến số chăm sóc khách hàng, ngay hôm sau sẽ có nhân viên đến bảo hành bao trì dịch vụ, không như những chỗ khác gọi mỏi mồn cũng chả thấy đâu.

</p>
						</a>
					</div>
					<!-- /box_news -->
					<div class="col-lg-6">
						<a class="box_news" href="#0">
							<figure><img src="<?php echo public_url();?>/site/img/news_home_4.jpg" alt="">
								
							</figure>
							<ul>
								<li>Huỳnh Huân </li>
								<li>22/10/2019</li>
							</ul>
							<p>Sản phẩm được thiết kế và thi công giống như yêu cầu của tôi.

Nhân viên giao hàng nhiệt tình, tiến độ thi công và lắp ráp đúng theo quy định.

Xem thêm sản phẩm công trình tại đây!</p>
						</a>
					</div>
					<!-- /box_news -->
				
			<!-- /container -->
		</div>
