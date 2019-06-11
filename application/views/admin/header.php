<nav class="navbar navbar-expand-lg navbar-dark bg-default fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html"><img src="<?php echo public_url('admin');?>/img/logo.png" data-retina="true" alt="" width="150" height="36"></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo admin_url('home') ?>">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#Components">
            <i class="fa fa-fw fa-list"></i>
            <span class="nav-link-text">Đơn Hàng</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="<?php echo admin_url('danhsachdonhang') ?>">Duyệt Đơn Hàng</a>
            </li>
			<li>
              <a href="<?php echo admin_url('donhangdaduyet') ?>">Đơn đã duyệt</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="My listings">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMylistings" data-parent="#mylistings">
            <i class="fa fa-fw fa-list"></i>
            <span class="nav-link-text">Sản Phẩm</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMylistings">
            <li>
              <a href="<?php echo admin_url('themsanpham') ?>">Thêm sản phẩm </a>
            </li>
            <li>
              <a href="<?php echo admin_url('danhsachsanpham') ?>">Danh sách sản phẩm </a>
            </li>
          </ul>
        </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Bookmarks">
          <a class="nav-link" href="<?php echo admin_url('danhsachuser') ?>">
            <i class="fa fa-fw fa-heart"></i>
            <span class="nav-link-text">Khách Hàng</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('adminlogin/logout'); ?>">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>

        </li>
      </ul>
    </div>
  </nav>