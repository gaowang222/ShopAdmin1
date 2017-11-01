<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class formController extends CI_Controller {
    function formController()
    {
        parent::__construct();
        $this->load->model('ProductModel');
        $this->load->helper('url');
    }
    public function index()
    {
        $title = $_GET['title'];
        $price = $_GET['price'];
        $stock = $_GET['stock'];
        $Color = $_GET['Color'];
        $Size = $_GET['Size'];
        $introduce = $_GET['introduce'];
        $isSlider = $_GET['isSlider'];
         if($title&&$price&&$stock&&$Color&&$Size&&$introduce&&$isSlider!=''){
             $data['product'] = $this->ProductModel->insertProduct($title, $price, $stock,$Color,$Size,$introduce,$isSlider);
         }


        $this->load->view('index');



    }
}