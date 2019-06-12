<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of danhsachdonhang
 *
 * @author QuyNam
 */
class danhsachdonhang extends MY_Controller
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
            
            $input['where'] = array('IDUser' => $_SESSION['user_id_login']);
            $list = $this->donhang_model->get_list($input);
            $this->data['list'] = $list;
            $this->data['temp'] = 'site/user/danhsachdonhang';
            $this->load->view('site/layout', $this->data);

        }
        function chitiet(){
            $iddh = $this->uri->rsegment(3);
//            $inputt = array('ID' => $iddh);
            $listt = $this->donhang_model->get_info($iddh);
            $this->data['tongtien'] = $listt->TongTien;
            $input['where'] = array('IDDonHang' => $iddh);
            $list = $this->chitietdonhang_model->get_list($input);
            $this->data['list'] = $list;
            $this->data['temp'] = 'site/user/chitietdonhang';
            $this->load->view('site/layout', $this->data);
        }
}
