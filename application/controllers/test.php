<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of test
 *
 * @author QuyNam
 */
class test extends MY_Controller{
    function __construct()
    {
        parent::__construct();
        
    }
    function index(){
        $this->load->view('site/test');
    }
}
