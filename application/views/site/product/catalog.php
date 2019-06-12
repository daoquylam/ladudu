<main>
		
<!--		<section class="hero_in tours">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span></?php echo $danhmuc->Ten ?></h1>
				</div>
			</div>
		</section>-->
		<!--/hero_in-->
                <div id="full-slider-wrapper">
                    <div id="layerslider" style="width:100%;height:500px;">
                        <div class="ls-slide" data-ls="slidedelay: 5000; transition2d:85;">
                                <img src="<?php echo public_url();?>/site/img/home_slider/01.jpg" class="ls-bg" alt="Slide background">
                                <h3 class="ls-l slide_typo" style="top: 47%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;"><?php echo $danhmuc->Ten ?></h3>
                        </div>
                        <div class="ls-slide" data-ls="slidedelay: 5000; transition2d:85;">
                                <img src="<?php echo public_url();?>/site/img/home_slider/04.jpg" class="ls-bg" alt="Slide background">
                                <h3 class="ls-l slide_typo" style="top: 47%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;"><?php echo $danhmuc->Ten ?></h3>
                        </div>
                    </div>  
                </div>

		<div class="container margin_60_35">	
		<div class="wrapper-grid">
			<div class="row">
                            <?php foreach ($list as $row):?>
				<div class="col-xl-4 col-lg-6 col-md-6">
					<div class="box_grid">
						<figure>

							<a href="<?php echo base_url('/product/view/'.$row->ID)?>"><img src="<?php echo base_url('upload/product/'.$row->image)?>" class="img-fluid" alt="" width="800" height="533"></a>
							
							<div class="read_more"><span>Read more</span></div>
						</figure>
						<div class="wrapper">
							<h3><a href="<?php echo base_url('/product/view/'.$row->ID) ?>"><?php echo $row->TenSanPham ?></a></h3>
                                                        <?php $MoTaNgan = substr($row->MoTa, 0 , 20 ).'...'; ?>
							<p><?php echo $MoTaNgan?></p>
							<span class="price">Giá chỉ từ <strong><?php echo $row->Gia ?></strong> </span>
						</div>
						<ul>
							
							<li><div class="score"><span>Đánh Giá</span><strong>8.9</strong></div></li>
						</ul>
					</div>
				</div>
                            <?php endforeach;?>

			</div>
			<!-- /row -->
			</div>
			<!-- /isotope-wrapper -->
						
		</div>
		<!-- /container -->
		
		
		<!-- /bg_color_1 -->
		
	</main>
	<!--/main-->
