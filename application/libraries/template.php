<?php
class Template {
	private $CI;
	private $template_data = array();
	private $_scripts_header = array();
	private $_styles = array();
	public function __construct()
	{
		$this->CI =& get_instance();
	}

	function set($content_area, $value)
	{
		$this->template_data[$content_area] = $value;
	}
	 /**
     * add css
     *
     * @param  string $path
     * @param  string $media
     * @return void
     */
	 public function add_css($href = NULL, $media = 'screen')
	 {
	 	$href = ltrim($href, "/");
	 	$link = array(
	 		'href' => $href,
	 		'rel' => 'stylesheet',
	 		'type' => 'text/css'
	 		);
	 	if (!empty($media)) {
	 		$link['media'] = $media;
	 	}
	 	$this->_styles[] = link_tag($link);
	 }
     /**
     * add js
     * add script on header or footer (before </body>)
     *
     * @param string  $src
     * @param boolean $is_footer
     */
		public function add_js($src, $is_footer = FALSE)
		{
			if (!$is_footer) {
				$this->_scripts_header[] = $this->script_tag($src);
			} else {
				$this->_scripts_footer[] = $this->script_tag($src);
			}
		}
		 /**
     * script_tag
     *
     * Generates an javascript heading tag. First param is the data.
     *
     * @access private
     * @param  string
     * @return string
     */
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
			$this->set('styles', implode("\r\n", $this->_styles) . "\r\n");
			$this->set('scripts_header', implode("\r\n", $this->_scripts_header) . "\r\n");
			$this->CI->load->view('layouts/font_end/'.$template, $this->template_data);
		}

		function load_admin($template = '', $name ='', $view = '' , $view_data = array(), $return = FALSE)
		{
			$this->set($name , $this->CI->load->view($view, $view_data, TRUE));
			$this->set('styles', implode("\r\n", $this->_styles) . "\r\n");
			$this->set('scripts_header', implode("\r\n", $this->_scripts_header) . "\r\n");
			$this->CI->load->view('layouts/back_end/'.$template, $this->template_data);
		}

}
?>