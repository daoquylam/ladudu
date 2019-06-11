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
          <i class="fa fa-table"></i> Bảng danh sách đơn hàng</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID Đơn Hàng</th>
                  <th>Họ Tên</th>
                  <th>Email</th>
                  <th>Số Điện Thoại </th>
                  <th>Địa Chỉ</th>
                  <th>Tổng Tiền</th>
                  <th>Chi Tiết</th>
                  <th>Duyệt Đơn</th>
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
                        <th><?php echo $row->TongTien ?></th>
                        <th><a href="<?php echo base_url('/admin/chitietdonhang/duyetchitiet/'.$row->ID)?>">Chi Tiết</a></th>
                        <th><a href="<?php echo base_url('/admin/danhsachdonhang/duyet/'.$row->ID)?>">Duyệt Đơn Hàng</a></th>
                    </tr> 
                  <?php } ?>
                                
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Danh sách đơn hàng đã được cập nhập</div>
      </div>
	  <!-- /tables-->
	  </div>
	  <!-- /container-fluid-->
   	</div>
    <!-- /container-wrapper-->