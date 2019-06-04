<main>
		
		<section class="hero_in hotels">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span><?php echo $catalog->name?></h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->
		
		
		<!-- /filters -->
		


		<div class="container margin_60_35">
			<div class="row">
				<aside class="col-lg-3">
					<div id="filters_col">
						<a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt">Filters </a>
						
						<!--/collapse -->
					</div>
					<div class="custom-search-input-2 inner-2 collapse show" id="collapseFilters">
						
						<div class="form-group">
						<select class="wide">
							<option>Sắp xếp</option>	
							<option>Giá từ cao đến thấp</option>
							<option>Giá từ thấp đến cao</option>
						
						</select>
						</div>
						<div class="form-group">
						<select class="wide">
							<option>Loại sản phẩm</option>	
							<option>A</option>
							<option>B</option>
							<option>C</option>
							<option>D</option>
						</select>
						</div>
					</div>
					<!-- /custom-search-input-2 -->
					
					<!--/filters col-->
				</aside>
				<!-- /aside -->
				
				<div class="col-lg-9">
					<div class="isotope-wrapper">
						<div class="row">
                                                    <?php foreach ($list as $row):?>
							<div class="col-md-6 isotope-item popular">
								<div class="box_grid">
									<figure>
										<a href="<?php echo base_url('/product/view/'.$row->id) ?>"><img src="<?php echo base_url('upload/product/'.$row->image_link)?>" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
									</figure>
									<div class="wrapper">
										<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
										<h3><a href="<?php echo base_url('/product/view/'.$row->id) ?>"><?php echo $row->name?></a></h3>
										<p>Mô tả ngắn.......</p>
										<span class="price">From <strong>$<?php echo number_format($row->price)?></strong> /per person</span>
									</div>
									<ul>
										<li><i class="ti-eye"></i> 164 views</li>
										<li><div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div></li>
									</ul>
								</div>
							</div>
							<!-- /box_grid -->
                                                        <?php endforeach;?>
							
						</div>
						<!-- /row -->
				</div>
				<!-- /isotope-wrapper -->
			
				<p class="text-center"><a href="#0" class="btn_1 rounded add_top_30">Load more</a></p>
				</div>
				<!-- /col -->
			</div>		
		</div>
		<!-- /container -->
		

		
	</main>
	<!--/main-->
