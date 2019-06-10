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
class adminlogin extends MY_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->library("session");
        $this->load->library('form_validation');
        $this->load->helper('form');
    }
    function index(){
        $this->load->view('site/adminlogin');
    }
    function check(){
        $this->load->library('form_validation');
        $this->load->helper('form');
        if($this->input->post())
        {
            $this->form_validation->set_rules('email', 'Email đăng nhập', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Mật khẩu', 'required|min_length[6]');
            $this->form_validation->set_rules('login' ,'login', 'callback_check_login');
            if($this->form_validation->run())
            {
                
                $_SESSION['admin_id_login'] = 'admin';
                
            
                redirect(base_url('admin'),'refresh');

            }
            else{
                $this->load->view('site/adminlogin', $this->data);
            }
        }
   
    }
    function check_login(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        
        if(($email == 'admin@ladudu.com') and ($password == '123456'))
        {
            return true;
        }
        else
        {
        $this->form_validation->set_message(__FUNCTION__, 'Không đăng nhập thành công');
        return false;
        }
    }
}
