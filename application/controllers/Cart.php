<?php 
class Cart extends MY_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('sanpham_model');
        $this->load->model('user_model');
        $this->load->model('donhang_model');
        $this->load->model('chitietdonhang_model');
        $this->load->library('form_validation');
        $this->load->helper('form');
        
        
    }
    
    /*
     * Phuoc thuc them san pham vao gio hang
     */
    function add()
    {
        //lay ra san pham muon them vao gio hang
        $this->load->model('sanpham_model');
        $id = $this->uri->rsegment(3);
        $product = $this->sanpham_model->get_info($id);
        if(!$product)
        {
//            redirect();
            echo 'lỗi';
        }
        //tong so san pham
        $qty = $_POST['qtyInput'];
        $price = $product->Gia;
        
        
        //thong tin them vao gio hang
        $data = array();
        $data['id'] = $product->ID;
        $data['qty'] = $qty;// so luong
        $data['name'] = url_title($product->TenSanPham);
        $data['image_link']  = $product->Imagee;
        $data['price'] = $price;
        $this->cart->insert($data);
        
        //chuyen sang trang danh sach san pham trong gio hang
        redirect(base_url('/Cart'));
        //$this->data['temp'] = 'site/cart/cart';
        //$this->load->view('site/layout', $this->data);
    }
    
    /*
     * Hien thị ra danh sách sản phẩm trong gio hàng
     */
    function index()
    {
        //thong gio hang
//        $carts = $this->cart->contents();
//        //tong so san pham co trong gio hang
//        $total_items = $this->cart->total_items();
//        
//        $this->data['carts'] = $carts;
//        $this->data['total_items']  =$total_items;
        
        $this->data['temp'] = 'site/cart/cart';
        $this->load->view('site/layout', $this->data);
    }
    
    /*
     * Cập nhật giỏ hàng
     */
    function update()
    {
        //thong gio hang
        $carts = $this->cart->contents();
        foreach ($carts as $key => $row)
        {
            //tong so luong san pham
            $total_qty = $this->input->post('qty_'.$row['id']);
            $data = array();
            $data['rowid'] = $key;
            $data['qty'] = $total_qty;
            $this->cart->update($data);
        }
        
        //chuyen sang trang danh sach san pham trong gio hang
        redirect(base_url('cart'));
    }
    function checkout()
    {
        $this->data['temp'] = 'site/cart/checkout';
        $this->load->view('site/layout', $this->data);
        
    }
    
    function payment()
    {
            
            //$this->load->model(donhang_model);
            $input = array();
            $input['order'] = array('ID','DESC');
            $input['limit'] = array('0' ,'1');
            $list = $this->donhang_model->get_list($input);
//          print_r($list);
            $maxid = $list[0]->ID;
            $idhd = $maxid + 1;
            
            
            if($this->cart->total_items() >= 1){
//                echo 'thêm sản phẩm vào đi má';
                
                if($this->input->post())
                {
                    $this->form_validation->set_rules('ten', 'Tên', 'required');
                    $this->form_validation->set_rules('email', 'Email', 'valid_email');
                    $this->form_validation->set_rules('sodienthoai', 'Số điện thoại', 'required|numeric');
                    $this->form_validation->set_rules('diachi', 'Địa chỉ', 'required');
  
                    if($this->form_validation->run())
                    {
                       if(isset($_SESSION['user_id_login'])){
                            $idUser = $_SESSION['user_id_login'];
                        }
                        else{
                            $idUser = 0;
                        }
                        $dataDH = array(
                            
                            'ID' => $idhd,
                            'IDUser' => $idUser,
                            'HoTen'     => $this->input->post('ten'),
                            'Email'    => $this->input->post('email'),
                            'SoDienThoai'    => $this->input->post('sodienthoai'),
                            'DiaChi'  => $this->input->post('diachi'),
                            'TongTien' => $this->cart->total()
                    
                        );
                        $dataCTHD =array();
                        $cart = $this->cart->contents();
                        foreach ($cart as $row){
                            $CTDH = array(
                                'IDDonHang' => intval($idhd),
                                'IDSanPham' => intval($row['id']),
                                'SoLuong' => intval($row['qty']),
                                'Gia' => intval($row['price'])
                            );
                            array_push($dataCTHD,$CTDH);
                        }
                        if($this->donhang_model->create($dataDH))
                        {
                            foreach ($dataCTHD as $row){
                                $this->chitietdonhang_model->create($row);
                            }
                        $this->cart->destroy();
                        $this->data['email'] = $this->input->post('email');
                        $this->data['temp'] = 'site/cart/finish';
                        $this->load->view('site/layout', $this->data);
                        
                        }else
                        {
                            echo 'lỗi';
                        }
                    }
                    else{
                        
                       $this->data['temp'] = 'site/cart/checkout';
                       $this->load->view('site/layout', $this->data); 
                    }
                }
            }
            else
            {
                echo 'giỏ chưa có sản phẩm';
            }
    }
    
    /*
     * Xoa sản phẩm trong gio hang
     */
    function del()
    {
        $id = $this->uri->rsegment(3);
        $id = intval($id);
        //trường hợp xóa 1 sản phẩm nào đó trong giỏ hàng
        if($id > 0)
        {
            //thong gio hang
            $carts = $this->cart->contents();
            foreach ($carts as $row)
            {
                if($row['id'] == $id)
                {
                    //tong so luong san pham
//                    $data = array();
//                    $data['rowid'] = $key;
                    $row['qty'] = 0;
                    $delOne = array("rowid" => $row['rowid'], "qty" => $row['qty']);
       
                    
                }
                $this->cart->update($delOne);
            }
        }else{
            //xóa toàn bô giỏ hang
            $this->cart->destroy();
        }
        
        //chuyen sang trang danh sach san pham trong gio hang
        redirect(base_url('cart'));
    }
}


