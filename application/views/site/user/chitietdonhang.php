<main>
        <div class="hero_in cart_section">
                <div class="wrapper">
                        <div class="container">
                                <div class="bs-wizard clearfix">
                                         <h3 style="color: white">Chi Tiết Đơn Hàng</h3>
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
                                                                        ID
                                                                </th>
                                                                <th>
                                                                        ID Sản Phẩm
                                                                </th>
                                                                <th>
                                                                        Số Lượng
                                                                </th>
                                                                <th>
                                                                        Giá
                                                                </th>
                                                        </tr>
                                                    
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($list as $row): ?>
                                                        <tr>
                                                                <td>
                                                                        
                                                                        <span class="item_cart"><?php echo $row->ID?></span>
                                                                </td>
                                                                <td>
                                                                        <?php echo $row->IDSanPham?>
                                                                </td>
                                                                <td>
                                                                        <?php echo $row->SoLuong?>
                                                                </td>
                                                                <td>
                                                                        <?php echo $row->Gia?>
                                                                </td>
                                                                
                                                        </tr>
                                                    <?php endforeach;?>
                                                </tbody>
                                        </table>
                                        
                                         <!-- /cart-options -->
                                </div>
                                </div>
                                <!-- /col -->

                                <aside class="col-lg-4" id="sidebar">
                                        <div class="box_detail">
                                                <div id="total_cart">
                                                        Tổng tiền <span class="float-right"><?php echo $tongtien; ?> đ</span>
                                                </div>
                                                
                                            <a href="<?php echo base_url('danhsachdonhang') ?>" class="btn_1 full-width purchase">Quay Lại</a>
                                                
                                        </div>
                                </aside>
                        </div>
                        <!-- /row -->
                </div>
                <!-- /container -->
        </div>
        <!-- /bg_color_1 -->
</main>