<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operation extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function form_insert($data,$table)
	{
		$row = $this->db->insert($table,$data);
		if($row) return 1;
		else return -1;
	}

	function form_delete($id,$table){
		$this->db->where("id",$id);
		$row = $this->db->delete($table);
		if($row) return 2;
		else return -2;
	}

	function form_update($id,$data,$table){
		$this->db->where('id', $id);
		$row = $this->db->update($table, $data);
		if($row) return 3;
		else return -3;
	}

	function show($id,$table){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where("id", $id);
		$query = $this->db->get();
		return $query->result();
	}

	function show_all($table)
	{
		$this->db->select("*");
		$this->db->from("$table");
		$query = $this->db->get();
		return $query->result();
	}

	function popup_show($kq){
		$data= array(
			'1' => 'Thêm thành công',
			'-1' => 'Thêm thất bại',
			'2' => 'Xóa thành công',
			'-2' => 'Xóa thất bại',
			'3' => 'Update thành công',
			'-3' => 'Update thất bại'
		);
		foreach ($data as $key => $val) {
			if($kq == $key) $this->session->set_flashdata("message",$val);
		}
	}
}
?>