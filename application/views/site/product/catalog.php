<main>
		
		<section class="hero_in tours">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span><?php echo $danhmuc->Ten ?></h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->

		<div class="container margin_60_35">	
		<div class="wrapper-grid">
			<div class="row">
                            <?php foreach ($list as $row):?>
				<div class="col-xl-4 col-lg-6 col-md-6">
					<div class="box_grid">
						<figure>

							<a href="<?php echo base_url('/product/view/'.$row->ID)?>"><img src="<?php echo base_url('upload/product/'.$row->Imagee)?>" class="img-fluid" alt="" width="800" height="533"></a>
							
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
