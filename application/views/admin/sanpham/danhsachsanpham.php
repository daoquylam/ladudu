<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <?php if(isset($message)){ ?>
          <div><?php echo $message ?></div>
        <?php } ?>
      </ol>
		<!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Bảng danh sách sản phẩm</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Mã SP</th>
                  <th>Mã Loại</th>
                  <th>Tên sản phẩm</th>
                  <th>Giá </th>
                  <th>Chất liệu</th>
                  <th>Sửa sản phẩm</th>
                  <th>Xóa sản phẩm</th>
                </tr>
              </thead>
              <tbody>
                  <?php foreach ($list as $row) { ?>
                     <tr>
                        <th><?php echo $row->ID ?></th>
                        <th><?php echo $row->IDLoaiSanPham ?></th>
                        <th><?php echo $row->TenSanPham ?></th>
                        <th><?php echo $row->Gia ?></th>
                        <th><?php echo $row->ChatLieu ?></th>
                        <th><a href="#">Chỉnh sửa</a></th>
                        <th><a href="<?php echo base_url('/admin/danhsachsanpham/xoa/'.$row->ID)?>">Xóa sản Phẩm</a></th>
                    </tr> 
                  <?php } ?>
                                
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
	  <!-- /tables-->
	  </div>
	  <!-- /container-fluid-->
   	</div>
    <!-- /container-wrapper-->