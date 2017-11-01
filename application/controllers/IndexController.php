<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IndexController extends CI_Controller {

    function IndexController(){
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('index');
    }
}