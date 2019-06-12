<main>
        <div class="hero_in cart_section">
                <div class="wrapper">
                        <div class="container">
                                <div class="bs-wizard clearfix">
                                    <h3 style="color: white">Đơn Hàng của Bạn</h3>
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
                                                                        Mã Đơn Hàng
                                                                </th>
                                                                <th>
                                                                        Người Nhận
                                                                </th>
                                                                <th>
                                                                        Tổng Tiền
                                                                </th>
                                                                <th>
                                                                        Trạng Thái
                                                                </th>
                                                                <th>
                                                                        Chi Tiết
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
                                                                        <?php echo $row->HoTen ?>
                                                                </td>
                                                                <td>
                                                                        <?php echo $row->TongTien ?>
                                                                </td>
                                                                <td>
                                                                        <?php if($row->trangthai == 1){
                                                                            echo 'Đã Hoàn Thành';
                                                                        }else{
                                                                            echo 'Chờ Xác Nhận';
                                                                        }
                                                                        ?>
                                                                </td>
                                                                <td class="options" style="width:5%; text-align:center;">
                                                                    <a href="<?php echo base_url('danhsachdonhang/chitiet/'.$row->ID) ?>"><i class="icon-search"></i></a>
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
                                                    Bạn có <span class="float-right"><?php $cout =0; foreach ($list as $row){$cout++;};echo $cout; ?>  đơn hàng</span>
                                                </div>
                                                
                                            
                                        </div>
                                </aside>
                        </div>
                        <!-- /row -->
                </div>
                <!-- /container -->
        </div>
        <!-- /bg_color_1 -->
</main>

