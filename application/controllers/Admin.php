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
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('login_model');
		$this->load->model("operation");
		$this->load->model('customers_model','admin');
		if(!$this->session->userdata("username")){
			redirect("login/index");
		}
	}

	function index(){
		if($this->session->userdata("message")){
			$this->load->view("popup_show");
		}
		$this->template->set('username', $this->session->userdata("username"));
		$this->template->set('title', 'Admin');
		$this->template->set('header', 'layouts/back_end/header');
		$this->template->add_css('assets/js/datatables/css/jquery.dataTables.min.css');
		$this->template->add_js('assets/js/datatables/js/jquery.dataTables.min.js');
		$this->template->load_admin('main_layout', 'contents' , 'layouts/back_end/customers_view.php',$this->data);
	}

	function create_index(){
		$this->template->set('username', $this->session->userdata("username"));
		$this->template->set('title', 'Admin');
		$this->template->set('header', 'layouts/back_end/header');
		$this->form_validation->set_rules('firstname', 'FirstName', 'trim|required');
		$this->form_validation->set_rules('lastname', 'LastName', 'trim|required');
		$this->form_validation->set_rules('address', 'Address', 'trim|required');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required|numeric');
		$this->form_validation->set_rules('city', 'City', 'trim|required');
		$this->form_validation->set_rules('country', 'Country', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$this->template->load_admin('main_layout', 'contents' , 'layouts/back_end/create_index.php',$this->data);
		}else{
			$result = array(
				"FirstName" => $this->input->post("firstname"),
				"LastName" => $this->input->post("lastname"),
				"phone" => $this->input->post("phone"),
				"address" => $this->input->post("address"),
				"city" => $this->input->post("city"),
				"country" => $this->input->post("country")
			);
			$kq = $this->operation->form_insert($result,"customers");
			$this->operation->popup_show($kq);
			redirect("admin/index");
		}
	}

	function show_index(){
		$id = $this->uri->segment(3);
		$this->data= $this->operation->show($id,"customers");
		$this->template->set('username', $this->session->userdata("username"));
		$this->template->set('title', 'Admin');
		$this->template->set('header', 'layouts/back_end/header');
		$this->template->load_admin('main_layout', 'contents' , 'layouts/back_end/update_index.php',$this->data);
	}

	function update_index(){
		$id = $this->uri->segment(3);
		$this->data = array(
			"FirstName" => $this->input->post("firstname"),
			"LastName" => $this->input->post("lastname"),
			"phone" => $this->input->post("phone"),
			"address" => $this->input->post("address"),
			"city" => $this->input->post("city"),
			"country" => $this->input->post("country")
		);
		$kq = $this->operation->form_update($id,$this->data,"customers");
		$this->operation->popup_show($kq);
		redirect("admin/index");
	}

	function del_index(){
		$id = $this->uri->segment(3);
		$kq = $this->operation->form_delete($id,"customers");
		$this->operation->popup_show($kq);
		redirect("admin/index");
	}

	function test(){
		$this->template->set('username', $this->session->userdata("username"));
		$this->template->set('title', 'Trang con Admin');
		$this->template->set('header', 'layouts/back_end/header');
		$this->template->load_admin('main_layout', 'contents' , 'layouts/back_end/index.php',$this->data);
	}

	public function ajax_list()
	{
		$list = $this->admin->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $customers) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $customers->FirstName;
			$row[] = $customers->LastName;
			$row[] = $customers->phone;
			$row[] = $customers->address;
			$row[] = $customers->city;
			$row[] = $customers->country;
			$row[] = '<a href="del_index/'.$customers->id.'">Delete</a>
			<a href="show_index/'.$customers->id.'">Edit</a>';

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->admin->count_all(),
			"recordsFiltered" => $this->admin->count_filtered(),
			"data" => $data,
		);
		echo json_encode($output);
	}
}
?>