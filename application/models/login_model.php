<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model
{
 function __construct()
 {
          // Call the Model constructor
  parent::__construct();
  $this->load->library("session");
  $this->load->helper('url');
}

     //get the username & password from tbl_usrs
function get_user($usr, $pwd)
{
  $sql = "select * from user where username = '" . $usr . "' and password = '" . md5($pwd) . "'";
  $query = $this->db->query($sql);
  return $query->num_rows();
}

}?>