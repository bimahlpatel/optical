<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Category_Master extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('Manage_CategoryMaster_Model');
		if(! $this->session->userdata('adminid')) {
			redirect('login');
		}
	}

	public function index(){
		$categorylist = $this->Manage_CategoryMaster_Model->getmascategorylist();
		$this->load->view('category',['categorylist'=>$categorylist]);
	}

	public function addCategory(){
		$data = array(
			'name' => $_REQUEST['categoryname'],
			'created_date' => date('Y-m-d H:i:s'),
		);
		
		$response = $this->Manage_CategoryMaster_Model->addmascategory($data);

		redirect('Category_Master');
	}

	public function category_edit(){
        $id = $this->input->post('id');
		$data['categorydetails']= $this->Manage_CategoryMaster_Model->getmascategorydetails($id);
		echo json_encode($data);
	}

	public function updatecategory(){
		$data = array(
			'name' => $_REQUEST['e_categoryname'],
			'updated_date' => date('Y-m-d H:i:s'),
		);
		
		$response = $this->Manage_CategoryMaster_Model->editmascategory($_REQUEST['edit_id'], $data);

		redirect('Category_Master');
	}

    public function changestatus($status,$id){
        $this->Manage_CategoryMaster_Model->changestatus($status, $id);
		redirect('Category_Master');
    }


}