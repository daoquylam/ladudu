<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of logout
 *
 * @author QuyNam
 */
class logout extends MY_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->library("session");

    }
    function index(){
        $this->session->unset_userdata('admin_id_login');
        redirect(site_url(),'refresh');
    }
}
