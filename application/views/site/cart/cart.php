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

                                        <div class="bs-wizard-step disabled">
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
                        <div class="row">
                                <div class="col-lg-8">
                                        <div class="box_cart">
                                        <table class="table table-striped cart-list">
                                                <thead>
                                                    
                                                        <tr>
                                                                <th>
                                                                        Tên sản Phẩm
                                                                </th>
                                                                <th>
                                                                        Số Lượng
                                                                </th>
                                                                <th>
                                                                        Đơn Giá
                                                                </th>
                                                                <th>
                                                                        Xóa
                                                                </th>
                                                        </tr>
                                                    
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($data as $row): ?>
                                                        <tr>
                                                                <td>
                                                                        <div class="thumb_cart">
                                                                                <img src="<?php echo base_url('upload/product/'.$row['image_link'])?>" alt="Image">
                                                                        </div>
                                                                        <span class="item_cart"><?php echo $row['name']?></span>
                                                                </td>
                                                                <td>
                                                                        <?php echo $row['qty']?>
                                                                </td>
                                                                <td>
                                                                        <strong><?php echo $row['price']?></strong>
                                                                </td>
                                                                <td class="options" style="width:5%; text-align:center;">
                                                                    <a href="<?php echo base_url('cart/del').'/'.$row['id'] ?>"><i class="icon-trash"></i></a>
                                                                </td>
                                                        </tr>
                                                    <?php endforeach;?>
                                                </tbody>
                                        </table>
                                        <div class="cart-options clearfix">
                                                <div class="float-right fix_mobile">
<!--                                                        <button type="button" class="btn_1 outline">Update Cart</button>-->
                                                        <a href="<?php echo base_url('cart/del') ?>" class="btn_1 danger">Xóa Giỏ Hàng</a>
                                                </div>
                                        </div>
                                         <!-- /cart-options -->
                                </div>
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
                                            <a href="<?php echo base_url('cart/checkout') ?>" class="btn_1 full-width purchase">Thanh Toán</a>
                                                <div class="text-center"><small>Tiếp tục thanh toán để miễn phí vận chuyển</small></div>
                                        </div>
                                </aside>
                        </div>
                        <!-- /row -->
                </div>
                <!-- /container -->
        </div>
        <!-- /bg_color_1 -->
</main>