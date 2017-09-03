<?php
class Template {
	private $CI;
	private $template_data = array();
	private $_scripts_header = array();
	public function __construct()
	{
		$this->CI =& get_instance();
	}

	function set($content_area, $value)
	{
		$this->template_data[$content_area] = $value;
	}

	function load($template = '', $name ='', $view = '' , $view_data = array(), $return = FALSE)
	{
		$this->set($name , $this->CI->load->view($view, $view_data, TRUE));
		$this->CI->load->view('layouts/font_end/'.$template, $this->template_data);
	}

}
?>