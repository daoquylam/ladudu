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
          <i class="fa fa-table"></i> Bảng danh sách User Khách Hàng</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID User</th>
                  <th>Ho Ten</th>
                  <th>Email</th>
                  <th>Số Điện Thoại </th>
                  <th>Địa Chỉ</th>
                  <th>Xóa tài khoản</th>
                </tr>
              </thead>
              <tbody>
                  <?php foreach ($list as $row) { ?>
                     <tr>
                        <th><?php echo $row->ID ?></th>
                        <th><?php echo $row->HoTen ?></th>
                        <th><?php echo $row->Email ?></th>
                        <th><?php echo $row->SoDienThoai ?></th>
                        <th><?php echo $row->DiaChi ?></th>
                        <th><a href="<?php echo base_url('/admin/danhsachuser/xoa/'.$row->ID)?>">Xóa người dùng</a></th>
                    </tr> 
                  <?php } ?>
                                
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Danh sách người dùng đã được cập nhập</div>
      </div>
	  <!-- /tables-->
	  </div>
	  <!-- /container-fluid-->
   	</div>
    <!-- /container-wrapper-->