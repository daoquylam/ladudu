<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of danhsachsanpham
 *
 * @author QuyNam
 */
class danhsachsanpham extends MY_Controller
{
        function __construct()
        {
            parent::__construct();
            $this->load->model('sanpham_model');
            $this->load->library('form_validation');
            $this->load->helper('form');
        }
	function index()
	{
            
            $input = array();
//            $input['where'] = array('IDLoaiSanPham' => $id);
            $list = $this->sanpham_model->get_list($input);
            $this->data['list'] = $list;
//            print_r($list);
//        foreach ($list as $row) {
//            print_r($row);
//            echo '<br>';
//            
//        }
            $this->data['temp'] = 'admin/sanpham/danhsachsanpham';
            $this->load->view('admin/main', $this->data);

        }
}
