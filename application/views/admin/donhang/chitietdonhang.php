<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <div class="box_general padding_bottom">
          <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>ID Đơn Hàng: <?php echo $dh->ID ?></label>
                </div>
            </div>
              <div class="col-md-6">
                <div class="form-group">
                        <label>Họ Tên: <?php echo $dh->HoTen ?> </label>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                        <label>Địa chỉ: <?php echo $dh->DiaChi ?></label>
                </div>
            </div>
              <div class="col-md-6">
                <div class="form-group">
                        <label>Tổng Tiền: <?php echo $dh->TongTien ?></label>
                </div>
            </div>
          </div>
          
      </div>
		<!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Bảng danh sách chi tiết đơn hàng</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>ID Sản Phẩm</th>
                  <th>Số Lượng</th>
                  <th>Đơn Giá</th>
                  <th>Thành Tiền</th>
                </tr>
              </thead>
              <tbody>
                  <?php foreach ($ctdh as $row) { ?>
                  
                     <tr>
                        <th><?php echo $row->ID ?></th>
                        <th><?php echo $row->IDSanPham ?></th>
                        <th><?php echo $row->SoLuong ?></th>
                        <th><?php echo $row->Gia ?></th>
                        <th><?php echo ($row->SoLuong)*($row->Gia) ?></th>
                    </tr> 
                  <?php } ?>
                                
              </tbody>
            </table>
          </div>
        </div>
        <?php if($dh->trangthai == 0){ ?>
          <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                        <a class="btn_1 medium" href="<?php echo base_url('/admin/danhsachdonhang/duyet/'.$dh->ID)?>">Duyệt Đơn Hàng</a>
                </div>
            </div>
          </div>
        <?php } ?>
        <div class="card-footer small text-muted">Danh sách chi tiết đơn hàng đã được cập nhập</div>
      </div>
	  <!-- /tables-->
	  </div>
	  <!-- /container-fluid-->
   	</div>
    <!-- /container-wrapper-->