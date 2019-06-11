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
            $this->load->library('form_validation');
            $this->load->helper('form');
        }
	function index()
	{
            
            $input['where'] = array('trangthai' => 0);
            $list = $this->donhang_model->get_list($input);
            $this->data['list'] = $list;
            $this->data['temp'] = 'admin/donhang/duyetdonhang';
            $this->load->view('admin/main', $this->data);

        }
        function duyet(){
            $idsanpham = $this->uri->segment(4);
            $input = array('trangthai' => 1);
            if($this->donhang_model->update($idsanpham,$input)){
                redirect(base_url('admin/danhsachdonhang'));
            }
            else{
                echo 'lỗi';
            }
        }
}
