<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public $data = array();
	private $CI;
	function __construct()
	{
		parent::__construct();
		$this->CI =& get_instance();
		$this->load->library('javascript');
	}

	function index()
	{
		$this->template->set('title', 'Admin');
		$this->template->set('header', 'layouts/font_end/admin/header');
		$this->template->add_css("vendors/iCheck/skins/flat/green.css");
		$this->template->add_css("vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css");
		$this->template->add_css("vendors/nprogress/nprogress.css");
		$this->template->add_css("vendors/jqvmap/dist/jqvmap.min.css");
		$this->template->add_css("vendors/bootstrap-daterangepicker/daterangepicker.css");
		$this->template->add_js("vendors/iCheck/icheck.min.js");
		$this->template->add_js("vendors/bootstrap-progressbar/bootstrap-progressbar.min.js");
		$this->template->add_js("vendors/Chart.js/dist/Chart.min.js");
		$this->template->add_js("vendors/nprogress/nprogress.js");
		$this->template->add_js("vendors/gauge.js/dist/gauge.min.js");
		$this->template->add_js("vendors/jqvmap/dist/jquery.vmap.js");
		$this->template->add_js("vendors/jqvmap/dist/maps/jquery.vmap.world.js");
		$this->template->add_js("vendors/jqvmap/examples/js/jquery.vmap.sampledata.js");
		$this->template->add_js("vendors/moment/min/moment.min.js");
		$this->template->add_js("vendors/bootstrap-daterangepicker/daterangepicker.js");
		$this->template->add_js("vendors/DateJS/build/date.js");
		$this->template->add_js("vendors/skycons/skycons.js");
		$this->template->add_js("vendors/Flot/jquery.flot.js");
		$this->template->add_js("vendors/Flot/jquery.flot.pie.js");
		$this->template->add_js("vendors/Flot/jquery.flot.time.js");
		$this->template->add_js("vendors/Flot/jquery.flot.stack.js");
		$this->template->add_js("vendors/Flot/jquery.flot.resize.js");
		$this->template->add_js("vendors/flot.orderbars/js/jquery.flot.orderBars.js");
		$this->template->add_js("vendors/flot-spline/js/jquery.flot.spline.min.js");
		$this->template->add_js("vendors/flot.curvedlines/curvedLines.js");
		$this->template->load('admin/main_layout', 'contents' , 'layouts/font_end/admin/right.php',$this->data);
	}

	function test(){
		$this->template->set('title', 'Trang con Admin');
		$this->template->set('header', 'layouts/font_end/admin/header');
		$this->template->add_js("vendors/Chart.js/dist/Chart.min.js");
		$this->template->add_js("vendors/DateJS/build/date.js");
		$this->template->add_js("vendors/Flot/jquery.flot.js");
		$this->template->add_js("vendors/Flot/jquery.flot.pie.js");
		$this->template->add_js("vendors/Flot/jquery.flot.time.js");
		$this->template->add_js("vendors/Flot/jquery.flot.stack.js");
		$this->template->add_js("vendors/Flot/jquery.flot.resize.js");
		$this->template->add_js("vendors/flot.orderbars/js/jquery.flot.orderBars.js");
		$this->template->add_js("vendors/flot-spline/js/jquery.flot.spline.min.js");
		$this->template->add_js("vendors/flot.curvedlines/curvedLines.js");
		$this->template->add_js("vendors/jquery-sparkline/dist/jquery.sparkline.min.js");
		$this->template->load('admin/main_layout', 'contents' , 'layouts/font_end/admin/index.php',$this->data);
	}
}
?>