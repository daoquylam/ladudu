 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <br><br><br>
      <?php if(isset($message)){ ?>
            <div class="header_box version_2">
				<h2></i><?php echo $message ?></h2>
            </div>
        <?php } ?>
      <form enctype="multipart/form-data" method="POST" action="<?php echo base_url('/admin/themsanpham/them'); ?>">
		<div class="box_general padding_bottom">
			<div class="header_box version_2">
				<h2><i class="fa fa-file"></i>Thêm Sản Phẩm</h2>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Tên Sản Phẩm</label>
                                                <input type="text" class="form-control" name="tensanpham" value="<?php echo set_value('tensanpham')?>">
                                                <div style="color:red;"><?php echo form_error('tensanpham')?></div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Loại sản phẩm</label>
						<div class="styled-select">
                                                    <select name="loaisanpham">
                                                    <option value="1">Gỗ Nguyên Liệu</option>
                                                    <option value="2">Nội thất gỗ</option>
							
						</select>
						</div>
					</div>
				</div>
			</div>
			<!-- /row-->
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Giá</label>
                                                <input type="text" class="form-control" name="gia" value="<?php echo set_value('gia')?>">
                                                <div style="color:red;"><?php echo form_error('gia')?></div>
					</div>
				</div>
                            <div class="col-md-6">
					<div class="form-group">
						<label>Phần trăm giảm giá</label>
                                                <input type="text" class="form-control" name="giamgia" value="<?php echo set_value('giamgia')?>">
                                                <div style="color:red;"><?php echo form_error('giamgia')?></div>
					</div>
				</div>
			</div>
			<!-- /row-->
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label>Mô tả sản Phẩm</label>
                                                <input type="text" class="form-control" name="mota" value="<?php echo set_value('mota')?>">
                                                <div style="color:red;"><?php echo form_error('mota')?></div>
					</div>
				</div>
			</div>
			<!-- /row-->
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label>Chất liệu</label>
                                                <input type="text" class="form-control" name="chatlieu" value="<?php echo set_value('chatlieu')?>">
                                                <div style="color:red;"><?php echo form_error('chatlieu')?></div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>Màu Sắc</label>
                                                <input type="text" class="form-control" name="mausac" value="<?php echo set_value('mausac')?>">
                                                <div style="color:red;"><?php echo form_error('mausac')?></div>
					</div>
				</div>

			</div>
			<!-- /row-->
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label>Kích thước</label>
                                                <input type="text" class="form-control" name="kichthuoc" value="<?php echo set_value('kichthuoc')?>">
                                                <div style="color:red;"><?php echo form_error('kichthuoc')?></div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>Xuất xứ</label>
                                                <input type="text" class="form-control" name="xuatxu" value="<?php echo set_value('xuatxu')?>">
                                                <div style="color:red;"><?php echo form_error('xuatxu')?></div>
					</div>
				</div>

			</div>
			<!-- /row-->
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Ảnh Đại Diện</label>
<!--						<form action="/file-upload" class="dropzone"></form>
                                                <input type="text" class="form-control">-->
                                                <input class="form-control" type="file" name="image" id="image">
					</div>
				</div>
                                <div class="col-md-6">
					<div class="form-group">
						<label>Photos</label>
<!--						<form action="/file-upload" class="dropzone"></form>
                                                <input type="text" class="form-control">-->
                                                <input class="form-control" type="file" multiple="" name="image_list[]" id="image_list">
					</div>
				</div>
			</div>
			<!-- /row-->
		</div>
		<!-- /box_general-->
                <input type="submit" class="btn_1 medium" value="Lưu">
                </form>
		
		
			
			
		</div>
		<!-- /box_general-->
		

		<!-- /box_general-->
<!--		<p><a href="#0" class="btn_1 medium">Save</a></p>-->
	  </div>
            <br><br><br>
	  <!-- /.container-fluid-->
   	</div>