<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login
 *
 * @author QuyNam
 */
class login extends MY_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->library("session");
        $this->load->model('user_model');
    }
    //put your code here
//    function index(){
//    $this->load->library('form_validation');
//    $this->load->helper('form');
//    $this->load->view('site/login', $this->data);
//    }
    
    function index()
    {
        if(isset($_SESSION['user_id_login'])){
          redirect(site_url());
//          include(site_url());
        }
        else {
            $this->load->library('form_validation');
            $this->load->helper('form');
            $this->load->view('site/login');
//            if($this->session->userdata('user_id_login'))
//            {
//                $user_id = $this->session->userdata('user_id_login');
//                $user = $this->user_model->get_info($user_id);
//                if($user){
//                    $this->data['user']  = $user;
//                    //hiển thị ra view
//                    $this->data['temp'] = 'site/home/index';
//                    $this->load->view('site/layout', $this->data); 
//                }
//            }    
        }
        
        
        
    }
    
    
    function check(){
//        if($this->session->userdata('user_id_login'))
//        {
//            redirect(site_url());
//        }
        if(isset($_SESSION['user_id_login'])){
          redirect(site_url());
//            include(site_url());
        }
        
        $this->load->library('form_validation');
        $this->load->helper('form');
        
        if($this->input->post())
        {
            $this->form_validation->set_rules('email', 'Email đăng nhập', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Mật khẩu', 'required|min_length[6]');
            $this->form_validation->set_rules('login' ,'login', 'callback_check_login');
            if($this->form_validation->run())
            {
                //lay thong tin thanh vien
                $user = $this->_get_user_info();
                //gắn session id của thành viên đã đăng nhập
                $_SESSION['user_id_login'] = $user->ID;
                $_SESSION['user_info'] = $user;
//                print_r($user);
//                echo $_SESSION['user_info']->ID;
//                echo $_SESSION['user_id_login'];
//                echo site_url();
//                $this->session->set_userdata('user_id_login', $user->id);
//                
//                $this->session->set_flashdata('message', 'Đăng nhập thành công');
                redirect(site_url(),'refresh');
//                require site_url();
                
//                $this->load->view('site/test', $this->data);
            }
            else{
                $this->load->view('site/login', $this->data);
            }
        }
        
        //hiển thị ra view
//        $this->load->view('site/login', $this->data);
    }
    
    function check_login()
    {
        $user = $this->_get_user_info();
        if($user)
        {
            return true;
        }
        $this->form_validation->set_message(__FUNCTION__, 'Không đăng nhập thành công');
        return false;
    }
    
    private function _get_user_info()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        
        $where = array('email' => $email , 'MatKhau' => $password);
        $user = $this->user_model->get_info_rule($where);
        return $user;
    }
    
    function logout(){
        $this->session->unset_userdata('user_id_login');
        redirect(site_url(),'refresh');
    }
}
