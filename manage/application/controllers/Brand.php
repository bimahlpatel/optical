<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Brand extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('Manage_Brand_Model');
		$this->load->model('Manage_General_Model');
		if(! $this->session->userdata('adminid')) {
			redirect('login');
		}
	}

	public function index(){
		$brandlist = $this->Manage_Brand_Model->getbarndlist();
		$this->load->view('brand_detail',['brandlist'=>$brandlist]);
	}

	public function addBrand(){
		$brand_image = "placeholder.jpg";

		if($_FILES['brand_image']['name'] != '') {
			$brand_image = $this->Manage_General_Model->single_file_upload('brand_image', 'brand', 'jpg|gif|png|jpeg', 0, $_FILES['brand_image']['name']);
		}

		$data = array(
			'brand_name' => $_REQUEST['brandname'],
			'brand_logo' => $brand_image,
			'brand_description' => $_REQUEST['brand_desc'],
			'created_date' => date('Y-m-d H:i:s'),
		);
		
		$response = $this->Manage_Brand_Model->addbrand($data);

		redirect('brand');
	}

	public function brand_edit(){
		$id = $this->input->post('id');
		$data['branddetails'] = $this->Manage_Brand_Model->getbranddetails($id);
		echo json_encode($data);
	}

	public function editbrand(){

		if($_FILES['e_brand_image']['name'] != '') {
			$brand_image = $this->Manage_General_Model->single_file_upload('e_brand_image', 'brand', 'jpg|gif|png|jpeg', 0, $_FILES['e_brand_image']['name']);
		} else {
			$brand_image = $_REQUEST['e_image_name'];
		}

		$data = array(
			'brand_name' => $_REQUEST['e_brandname'],
			'brand_logo' => $brand_image,
			'brand_description' => $_REQUEST['e_brand_desc'],
			'updated_date' => date('Y-m-d H:i:s'),
		);
		
		$response = $this->Manage_Brand_Model->editbrand($_REQUEST['brand_id'], $data);

		redirect('brand');
	}

}