<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Category extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('Manage_Category_Model');
		$this->load->model('Manage_CategoryMaster_Model');
		if(! $this->session->userdata('adminid')) {
			redirect('login');
		}
	}

	public function index(){
		$categorylist = $this->Manage_Category_Model->getcategorylist();
		$category_master = $this->Manage_CategoryMaster_Model->getactivecategorylist();
		$this->load->view('category_detail',['categorylist'=>$categorylist, 'category_master'=>$category_master]);
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
		$category_master = $this->Manage_CategoryMaster_Model->getactivecategorylist();
		$this->load->view('category_edit',['categorydetails'=>$categorydetails, 'category_master'=>$category_master]);
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

	public function getsubcategory($catid){
		$categorylist = array();;
		if($catid != 0) {
			$subcatlist = getsubcategory($catid);
			echo json_encode(array("success"=>true, "categorylist"=>$subcatlist));
		}
		else {
			echo json_encode(array("success"=>false, "categorylist"=>$subcatlist));
		}
	}


}