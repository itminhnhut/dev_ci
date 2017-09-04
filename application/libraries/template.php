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

	public function add_js($src, $is_footer = FALSE)
	{
		if (!$is_footer) {
			$this->_scripts_header[] = $this->script_tag($src);
		} else {
			$this->_scripts_footer[] = $this->script_tag($src);
		}
	}
	private function script_tag($src = NULL)
	{
		if (isset($src) and !empty($src)) {
			return '<script src="' .base_url(). $src . '" type="text/javascript"></script>';
		}
		return "";
	}
	function load($template = '', $name ='', $view = '' , $view_data = array(), $return = FALSE)
	{
		$this->set($name , $this->CI->load->view($view, $view_data, TRUE));
	  $this->set('scripts_header', implode("\r\n", $this->_scripts_header) . "\r\n");
		$this->CI->load->view('layouts/font_end/'.$template, $this->template_data);
	}

}
?>