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
								<figcaption><strong>28</strong>Dec</figcaption>
							</figure>
							<ul>
								<li>Mark Twain</li>
								<li>20.11.2017</li>
							</ul>
							<h4>Pri oportere scribentur eu</h4>
							<p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
						</a>
					</div>
					<!-- /box_news -->
					<div class="col-lg-6">
						<a class="box_news" href="#0">
							<figure><img src="<?php echo public_url();?>/site/img/news_home_2.jpg" alt="">
								<figcaption><strong>28</strong>Dec</figcaption>
							</figure>
							<ul>
								<li>Jhon Doe</li>
								<li>20.11.2017</li>
							</ul>
							<h4>Duo eius postea suscipit ad</h4>
							<p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
						</a>
					</div>
					<!-- /box_news -->
					<div class="col-lg-6">
						<a class="box_news" href="#0">
							<figure><img src="<?php echo public_url();?>/site/img/news_home_3.jpg" alt="">
								<figcaption><strong>28</strong>Dec</figcaption>
							</figure>
							<ul>
								<li>Luca Robinson</li>
								<li>20.11.2017</li>
							</ul>
							<h4>Elitr mandamus cu has</h4>
							<p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
						</a>
					</div>
					<!-- /box_news -->
					<div class="col-lg-6">
						<a class="box_news" href="#0">
							<figure><img src="<?php echo public_url();?>/site/img/news_home_4.jpg" alt="">
								<figcaption><strong>28</strong>Dec</figcaption>
							</figure>
							<ul>
								<li>Paula Rodrigez</li>
								<li>20.11.2017</li>
							</ul>
							<h4>Id est adhuc ignota delenit</h4>
							<p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
						</a>
					</div>
					<!-- /box_news -->
				</div>
				<!-- /row -->
				<p class="btn_home_align"><a href="blog.html" class="btn_1 rounded">Xem thêm</a></p>
			</div>
			<!-- /container -->
		</div>
