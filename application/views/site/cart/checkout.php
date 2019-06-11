<?php 
     $data = $this->cart->contents();
?>
<main>
        <div class="hero_in cart_section">
                <div class="wrapper">
                        <div class="container">
                                <div class="bs-wizard clearfix">
                                        <div class="bs-wizard-step active">
                                                <div class="text-center bs-wizard-stepnum">Giỏ Hàng của Bạn</div>
                                                <div class="progress">
                                                        <div class="progress-bar"></div>
                                                </div>
                                                <a href="#0" class="bs-wizard-dot"></a>
                                        </div>

                                        <div class="bs-wizard-step active">
                                                <div class="text-center bs-wizard-stepnum">Thanh Toán</div>
                                                <div class="progress">
                                                        <div class="progress-bar"></div>
                                                </div>
                                                <a href="#0" class="bs-wizard-dot"></a>
                                        </div>

                                        <div class="bs-wizard-step disabled">
                                                <div class="text-center bs-wizard-stepnum">Hoàn Thành!</div>
                                                <div class="progress">
                                                        <div class="progress-bar"></div>
                                                </div>
                                                <a href="#0" class="bs-wizard-dot"></a>
                                        </div>
                                </div>
                                <!-- End bs-wizard -->
                        </div>
                </div>
        </div>
        <!--/hero_in-->
        
        <div class="bg_color_1">
                <div class="container margin_60_35">
                    <form method="POST" action="<?php echo (base_url('/cart/payment')); ?>">
                        <div class="row">
                                <div class="col-lg-8">
                                    
                                    <?php if(isset($_SESSION['user_id_login'])){ ?>
                                        <div class="box_cart">
                                        
                                        <div class="form_title">
                                                <h3><strong>1</strong>Thông tin của bạn</h3>
                                                <p>
                                                        Nhập thông tin chính xác để chúng tôi giao hàng tới giường cho bạn :v
                                                </p>
                                        </div>
                                        <div class="step">
                                                <div class="row">
                                                <div class="col-sm-6">
                                                        <div class="form-group">
                                                                <label>Họ Tên:</label>
                                                                <input type="text" class="form-control"  name="ten" value="<?php echo $_SESSION['user_info']->HoTen ?>">
                                                                <div><?php echo form_error('ten')?></div>
                                                        </div>
                                                </div>
                                                <div class="col-sm-6">
                                                        <div class="form-group">
                                                                <label>Email :</label>
                                                                <input type="text" class="form-control"  name="email" value="<?php echo $_SESSION['user_info']->Email ?>">
                                                                <div><?php echo form_error('email')?></div>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="row">
                                                <div class="col-sm-6">
                                                        <div class="form-group">
                                                                <label>Số Điện Thoại: </label>
                                                                <input type="text" name="sodienthoai" class="form-control" value="<?php echo $_SESSION['user_info']->SoDienThoai ?>">
<!--                                                                <input type="text" name="sodienthoai" class="form-control" value="<//?php echo $_SESSION['user_info']->SoDienThoai ?>">-->
                                                                <div><?php echo form_error('sodienthoai')?></div>
                                                        </div>
                                                </div>
                                                <div class="col-sm-6">
                                                        <div class="form-group">
                                                                <label>Địa Chỉl</label>
                                                                <input type="text"  name="diachi" class="form-control" value="<?php echo $_SESSION['user_info']->DiaChi ?>">
                                                                <div><?php echo form_error('diachi')?></div>
                                                        </div>
                                                </div>
                                        </div>

                                        </div>
                                        <hr>
                                        <!--End step -->
                                        <div id="policy">
                                                <h5>Chính Sách Đổi Trả</h5>
                                                <p class="nomargin">Nếu nhận được sản phẩm bị lỗi ngoại quan (có dấu hiệu bị trầy xước, hư hỏng bên ngoài, không như mô tả ban đầu... ) hoặc đơn hàng không đầy đủ sản phẩm, Quý Khách vui lòng liên hệ với Tiki Care trong vòng 48h kể từ khi nhận hàng thành công.</p>
                                        </div>
                                        </div>
                                    <?php } else{ ?>
                                        <div class="box_cart">
                                        <div class="message">
                                            <p>Bạn chưa là thành viên? <a href="<?php echo base_url('register') ?>">Đăng ký ngay</a></p>
                                        </div>
                                        <div class="form_title">
                                                <h3><strong>1</strong>Thông tin của bạn</h3>
                                                <p>
                                                        Nhập thông tin chính xác để chúng tôi giao hàng tới giường cho bạn :v
                                                </p>
                                        </div>
                                        <div class="step">
                                                <div class="row">
                                                <div class="col-sm-6">
                                                        <div class="form-group">
                                                                <label>Họ Tên:</label>
                                                                <input type="text" class="form-control" name="ten">
                                                        </div>
                                                </div>
                                                <div class="col-sm-6">
                                                        <div class="form-group">
                                                                <label>Email :</label>
                                                                <input type="text" class="form-control" name="email">
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="row">
                                                <div class="col-sm-6">
                                                        <div class="form-group">
                                                                <label>Số Điện Thoại: </label>
                                                                <input type="text" name="sodienthoai" class="form-control">
                                                        </div>
                                                </div>
                                                <div class="col-sm-6">
                                                        <div class="form-group">
                                                                <label>Địa Chỉl</label>
                                                                <input type="text" name="diachi" class="form-control">
                                                        </div>
                                                </div>
                                        </div>

                                        </div>
                                        <hr>
                                        <!--End step -->
                                        <div id="policy">
                                                <h5>Chính Sách Đổi Trả</h5>
                                                <p class="nomargin">Nếu nhận được sản phẩm bị lỗi ngoại quan (có dấu hiệu bị trầy xước, hư hỏng bên ngoài, không như mô tả ban đầu... ) hoặc đơn hàng không đầy đủ sản phẩm, Quý Khách vui lòng liên hệ với Tiki Care trong vòng 48h kể từ khi nhận hàng thành công.</p>
                                        </div>
                                        </div>
                                    <?php } ?>
                                </div>
                                <!-- /col -->

                                <aside class="col-lg-4" id="sidebar">
                                        <div class="box_detail">
                                                <div id="total_cart">
                                                        Tổng tiền <span class="float-right"><?php echo $this->cart->format_number($this->cart->total()); ?> đ</span>
                                                </div>
                                                <ul class="cart_details">
                                                    <?php foreach ($data as $row): ?>
                                                        <?php $cost = $row['qty']*$row['price'] ?>
                                                        <li><?php echo $row['name'].'  x  '.$row['qty']?> <span><?php echo $cost ?>đ</span></li>
                                                    <?php endforeach;?>
                                                        
                                                </ul>
                                                <input class="btn_1 full-width purchase" type='submit' value="Thanh Toán" name='submit' >
<!--                                                <a href="cart-2.html" class="btn_1 full-width purchase">Thanh Toán</a>-->
                                                <div class="text-center"><small>Tiếp tục thanh toán để miễn phí vận chuyển</small></div>
                                        </div>
                                </aside>
                        </div>
                        <!-- /row -->
                        </form>
                </div>
                <!-- /container -->
        </div>
        <!-- /bg_color_1 -->
</main>
<!--/main-->