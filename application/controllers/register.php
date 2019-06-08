<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of register
 *
 * @author QuyNam
 */
class register extends MY_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }
    //put your code here
    function index(){
    $this->load->library('form_validation');
    $this->load->helper('form');
    $this->load->view('site/register', $this->data);
    }

    
    
    function check(){
        
        if($this->input->post())
        {
            $this->form_validation->set_rules('name', 'Tên', 'required|min_length[8]|alpha');
            $this->form_validation->set_rules('email', 'Email', 'valid_email|required|callback_check_email');
            $this->form_validation->set_rules('password', 'Mật khẩu', 'required|min_length[6]');
            $this->form_validation->set_rules('re_password', 'Mật khẩu nhập lại', 'matches[password]');
            $this->form_validation->set_rules('phone', 'Số điện thoại', 'required|exact_length[10]|numeric');
            $this->form_validation->set_rules('address', 'Địa chỉ', 'required');
            if($this->form_validation->run())
            {
                //them vao csdl
                $data = array(
                    'HoTen'     => $this->input->post('name'),
                    'Email'    => $this->input->post('email'),
                    'SoDienThoai'    => $this->input->post('phone'),
                    'DiaChi'  => $this->input->post('address'),
                    'MatKhau' => $this->input->post('password'),
                );
                if($this->user_model->create($data))
                {
                    //tạo ra nội dung thông báo
                    //echo "thêm thành công";
                    $this->session->set_flashdata('message', 'Đăng ký thành viên thành công');
                }else{
                    //echo 'lỗi';
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách quản trị viên
                redirect(site_url(login));
            }
            
            
        }
        
        $this->load->view('site/register', $this->data);
  
            //nhập liệu chính xác
    }
    
        function check_email()
    {
        $email = $this->input->post('email');
        $where = array('Email' => $email);
        //kiêm tra xem email đã tồn tại chưa
        if($this->user_model->check_exists($where))
        {
            //trả về thông báo lỗi
            $this->form_validation->set_message(__FUNCTION__, 'Email đã tồn tại');
            return false;
        }
        return true;
    }
}
