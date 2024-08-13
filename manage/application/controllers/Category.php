<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Category extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('Manage_Category_Model');
		if(! $this->session->userdata('adminid')) {
			redirect('login');
		}
	}

	public function index(){
		$categorylist = $this->Manage_Category_Model->getcategorylist();
		$this->load->view('category_detail',['categorylist'=>$categorylist]);
	}

	public function addCategory(){
		$data = array(
			'category_name' => $_REQUEST['categoryname'],
			'category_slug' => $_REQUEST['categoryslug'],
			'parent_category' => $_REQUEST['parentcategory'],
			'category_type' => $_REQUEST['categorytype'],
			'category_status' => $_REQUEST['categorystatus'],
			'created_date' => date('Y-m-d H:i:s'),
		);
		
		$response = $this->Manage_Category_Model->addcategory($data);

		redirect('Category');
	}

	public function editForm($id){
		$categorydetails = $this->Manage_Category_Model->getcategorydetails($id);
		$this->load->view('category_edit',['categorydetails'=>$categorydetails]);
	}

	public function editcategory(){
		$data = array(
			'category_name' => $_REQUEST['categoryname'],
			'category_slug' => $_REQUEST['categoryslug'],
			'parent_category' => $_REQUEST['parentcategory'],
			'category_type' => $_REQUEST['categorytype'],
			'category_status' => $_REQUEST['categorystatus'],
			'updated_date' => date('Y-m-d H:i:s'),
		);
		
		$response = $this->Manage_Category_Model->editcategory($_REQUEST['categoryid'], $data);

		redirect('Category');
	}


}