<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of chitietdonhang
 *
 * @author QuyNam
 */
class chitietdonhang extends MY_Controller
{
        function __construct()
        {
            parent::__construct();
            $this->load->model('donhang_model');
            $this->load->model('chitietdonhang_model');
            $this->load->library('form_validation');
            $this->load->helper('form');
        }
	function index()
	{
//            
//            $input['where'] = array('trangthai' => 0);
//            $list = $this->donhang_model->get_list($input);
//            $this->data['list'] = $list;
//            $this->data['temp'] = 'admin/donhang/duyetdonhang';
//            $this->load->view('admin/main', $this->data);

        }
        function duyetchitiet(){
            $iddonhang = $this->uri->segment(4);  
            $input = array('ID' => $iddonhang);
            $donhang = $this->donhang_model->get_info_rule($input, '*');
            //print_r($donhang);
            
            
            $inputt['where'] = array('IDDonHang' => $iddonhang);
            $ctdh = $this->chitietdonhang_model->get_list($inputt);
            $this->data['ctdh'] = $ctdh;
            $this->data['dh'] = $donhang;
            $this->data['temp'] = 'admin/donhang/chitietdonhang';
            $this->load->view('admin/main', $this->data);
        }
}
