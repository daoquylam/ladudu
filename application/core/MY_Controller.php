<?php
Class MY_Controller extends CI_Controller
{
    //bien gui du lieu sang ben view
    public $data = array();
    
    
    function __construct()
    {
        //ke thua tu CI_Controller
        parent::__construct();
        $this->load->library("cart");
        $this->load->helpers("admin_helper");
        $this->load->library("session");
        
        $controller = $this->uri->segment(1);
        if($controller == 'admin'){
//            echo 'admin nè';
            if(!isset($_SESSION['admin_id_login'])){
                        redirect(base_url('adminlogin'));
    
                
            }
                         
        }
        
    }
    
    /*
     * Kiem tra trang thai dang nhap cua admin
     */
    
}


