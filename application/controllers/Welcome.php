<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	private $CI;
	public function __construct(){
		parent::__construct();
		$this->CI =& get_instance();
		$this->load->library('javascript');
	}
	public function index()
	{
		$data = array();
		$this->template->set('title', 'day la trang chu');
		$this->template->add_css('assets/js/trangchu.js');
		$this->template->add_js('assets/js/trangchu.js');

		$this->template->load('layout', 'contents' , 'font_end/index.php', $data);
	}
}
