<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of danhsachuser
 *
 * @author QuyNam
 */
class danhsachuser extends MY_Controller
{
        function __construct()
        {
            parent::__construct();
            $this->load->model('user_model');
            $this->load->library('form_validation');
            $this->load->helper('form');
        }
	function index()
	{
            
            $input = array();
//            $input['where'] = array('IDLoaiSanPham' => $id);
            $list = $this->user_model->get_list($input);
            $this->data['list'] = $list;
//            print_r($list);
//        foreach ($list as $row) {
//            print_r($row);
//            echo '<br>';
//            
//        }
            $this->data['temp'] = 'admin/user/danhsachuser';
            $this->load->view('admin/main', $this->data);

        }
        function xoa(){
            $idsanpham = $this->uri->segment(4);
            $input = array('ID' => $idsanpham);
            if($this->user_model->del_rule($input)){
                redirect(base_url('admin/danhsachuser'));
            }
            else{
                echo 'lỗi';
            }
        }
}
