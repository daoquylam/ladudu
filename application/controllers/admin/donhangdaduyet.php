<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of donhangdaduyet
 *
 * @author QuyNam
 */
class donhangdaduyet extends MY_Controller
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
            
            $input['where'] = array('trangthai' => 1);
            $list = $this->donhang_model->get_list($input);
            $this->data['list'] = $list;
            $this->data['temp'] = 'admin/donhang/dondaduyet';
            $this->load->view('admin/main', $this->data);

        }
}
