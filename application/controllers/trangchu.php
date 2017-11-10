<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trangchu extends CI_Controller
{
    public $data = array();
    function __construct(){
        parent::__construct();
        $this->load->library('javascript');
    }

    function index(){
        $this->template->set('slide', 'layouts/font_end/slide');
        $this->template->add_js('assets/js/jquery/slick.js');
        $this->template->add_js('assets/js/jquery/trangchu.js');
        $this->template->load('layout', 'contents' , 'layouts/font_end/trangchu',$this->data);
    }
    function add(){
        $this->load->view("layouts/font_end/add-to-cart=619.html");
    }
}

?>