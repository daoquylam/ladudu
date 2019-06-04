<?php
Class Home extends MY_Controller
{
	function index()
	{
//	    //lay danh sach slide
//	    $this->load->model('slide_model');
//	    $slide_list = $this->slide_model->get_list();
//	    $this->data['slide_list'] = $slide_list;
	    
	    //lay danh sach san pham moi
	    $this->load->model('sanpham_model');
	    $input = array();
	    $input['limit'] = array(5, 0);
	    $sanpham_moi = $this->sanpham_model->get_list($input);
	    $this->data['sanpham_moi'] = $sanpham_moi;
		
		
		//lay noi dung cua bien message
	   $message=$this->session->flashdata('message');
	   $this->data['message']=$message; 
	    
//	    $input['order'] = array('buyed', 'DESC');
//	    $product_buy = $this->sanpham_model->get_list($input);
//		$this->data['product_buy']  = $product_buy;
		
		$this->data['temp'] = 'site/home/index';
		$this->load->view('site/layout', $this->data);
	}
}