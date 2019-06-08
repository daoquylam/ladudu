<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of test
 *
 * @author QuyNam
 */
class test extends MY_Controller{
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
    function index(){
//        $input = array();
//        $input['order'] = array('ID','DESC');
//        $input['limit'] = array('0' ,'1');
//        $list = $this->sanpham_model->get_list($input);
////        print_r($list);
//        $maxid = $list[0]->ID;
//        $id = $maxid + 1;
//        echo $id;
//        $cart = $this->cart->contents();
//        print_r($cart);
//        $this->load->model('sanpham_model');
//        $this->load->model('user_model');
//        $this->load->model('donhang_model');
//        $this->load->model('chitietdonhang_model');
        $input = array();
        $input['order'] = array('ID','DESC');
        $input['limit'] = array('0' ,'1');
        $list = $this->donhang_model->get_list($input);
//          print_r($list);
        $maxid = $list[0]->ID;
        $idhd = $maxid + 1;
//        echo $idhd;
        if($this->cart->total_items() < 1){
            redirect(site_url(cart));
        }
        else{
            if($this->input->post())
                {
//                    $this->form_validation->set_rules('HoTen', 'Tên', 'required');
//                    $this->form_validation->set_rules('email', 'Email', 'valid_email');
//                    $this->form_validation->set_rules('sodienthoai', 'Mật khẩu', 'required|min_length[6]');
//                    $this->form_validation->set_rules('diachi', 'Mật khẩu nhập lại', 'required');
//                    
//                    if($this->form_validation->run()){
                        $dataDH = array(
                            'ID' => $idhd,
                            'HoTen'     => $this->input->post('name'),
                            'Email'    => $this->input->post('email'),
                            'SoDienThoai'    => $this->input->post('sodienthoai'),
                            'DiaChi'  => $this->input->post('diachi')
                    
                        );
                        $dataCTHD =array();
                        $cart = $this->cart->contents();
//                        foreach ($cart as $row){
//                            $CTDH = array(
//                                'IDDonHang' => $idhd,
//                                'IDSanPham' => $row['name'],
//                                'SoLuong' => $row['qty'],
//                                'Gia' => $row['price']
//                            );
//                            array_push($dataCTHD,$CTDH);
//                        }
                        
                        print_r($cart);
//                        if($this->donhang_model->create($dataDH)){
//                            echo 'ok';
//                        }
//                        else{
//                            echo 'lỗi';
//                        }
                    //}
//                    print_r($dataDH);
                }
        }
        
    }
}
