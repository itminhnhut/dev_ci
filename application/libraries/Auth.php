<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Auth{
		function __construct(){
			$this->CI =& get_instance();
		}
		function token(){
			$token = md5(uniqid(rand(),true));
			$this->CI->session->set_userdata('token',$token);
			return $token;
		}
	}
?>