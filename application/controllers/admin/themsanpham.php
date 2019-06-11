<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of themsanpham
 *
 * @author QuyNam
 */
class themsanpham extends MY_Controller
{
        function __construct()
        {
            parent::__construct();
            $this->load->model('sanpham_model');
        }
	function index()
	{
            //$this->load->model('sanpham_model');
            $this->load->library('form_validation');
            $this->load->helper('form');
            $this->data['temp'] = 'admin/sanpham/themsanpham';
            $this->load->view('admin/main', $this->data);
        }
        function  them(){        
            if($this->input->post())
            {
            $this->form_validation->set_rules('tensanpham', 'Tên', 'required');
            $this->form_validation->set_rules('gia', 'Giá', 'required|numeric');
            $this->form_validation->set_rules('giamgia', 'Giảm Giá', 'required|numeric');
            $this->form_validation->set_rules('mota', 'Mô tả', 'required');
            $this->form_validation->set_rules('chatlieu', 'Chất Liệu', 'required');
            $this->form_validation->set_rules('mausac', 'Màu sắc', 'required');
            $this->form_validation->set_rules('kichthuoc', 'Kích Thước', 'required');
            $this->form_validation->set_rules('xuatxu', 'Xuất xứ', 'required');
                if($this->form_validation->run())
                {
                    $this->load->library('upload_library');
                    $upload_path = './upload/product';
                    $upload_data = $this->upload_library->upload($upload_path, 'image');  
                    $image_link = '';
                    if(isset($upload_data['file_name']))
                    {
                        $image_link = $upload_data['file_name'];
                    }
                //upload cac anh kem theo
                    $image_list = array();
                    $image_list = $this->upload_library->upload_file($upload_path, 'image_list');
                    $image_list = json_encode($image_list);
                    //them vao csdl
                    $data = array(
                        'IDLoaiSanPham'     => $_POST['loaisanpham'],
                        'TenSanPham'    => $_POST['tensanpham'],
                        'Gia'    => $_POST['gia'],
                        'GiamGia'    => $_POST['giamgia'],
                        'MoTa'  => $_POST['mota'],
                        'ChatLieu'    => $_POST['chatlieu'],
                        'MauSac'    => $_POST['mausac'],
                        'KichThuoc'    => $_POST['kichthuoc'],
                        'XuatXu'    => $_POST['xuatxu'],
                        'image' => $image_link,
                        'Imagee'    => $image_list
                        
                    );
                    if($this->sanpham_model->create($data)){
                        $this->data['message'] = 'Thêm sản phẩm thành công';
                    }
                    else {
                        $this->data['message'] = 'Đã xảy ra lỗi';
                    }
                    $this->data['temp'] = 'admin/sanpham/themsanpham';
                    $this->load->view('admin/main', $this->data);
                }
                else {
                    $this->data['temp'] = 'admin/sanpham/themsanpham';
                    $this->load->view('admin/main', $this->data);
                }
                //$this->load->view('admin/sanpham/themsanpham', $this->data);
 
            }

        }
}   
    