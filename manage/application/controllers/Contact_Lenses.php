<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Contact_Lenses extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->model('Manage_Contact_Lenses_Model');
		if(! $this->session->userdata('adminid')) {
			redirect('login');
		}
	}

    public function lenses_category(){
        $category_master = $this->Manage_Contact_Lenses_Model->getlensescategorylist();
        $this->load->view('lenses_category', ['lenses_category'=>$category_master]);
    }

    public function addLensesCategory(){
		$data = array(
			'lense_cat_name' => $_REQUEST['categoryname'],
			'lenses_cat_slug' => str_replace(" ", "-", strtolower($_REQUEST['categoryname'])),
			'created_date' => date('Y-m-d H:i:s'),
		);
		
		$response = $this->Manage_Contact_Lenses_Model->addlensescategory($data);

		redirect('Contact_Lenses/lenses_category');
	}

	public function category_edit(){
        $id = $this->input->post('id');
		$data['lense_categorydetails']= $this->Manage_Contact_Lenses_Model->getlensescategorydetails($id);
		echo json_encode($data);
	}

	public function updatecategory(){
		$data = array(
			'lense_cat_name' => $_REQUEST['e_categoryname'],
			'lenses_cat_slug' => str_replace(" ","-", strtolower($_REQUEST['e_categoryname'])),
			'updated_date' => date('Y-m-d H:i:s'),
		);
		
		$response = $this->Manage_Contact_Lenses_Model->editlensescategory($_REQUEST['edit_id'], $data);

		redirect('Contact_Lenses/lenses_category');
	}

    public function changestatus($status,$id){
        $this->Manage_Contact_Lenses_Model->changestatus($status, $id);
		redirect('Contact_Lenses/lenses_category');
    }





    public function lenses_subcategory(){
        $ls_subcategorylist = $this->Manage_Contact_Lenses_Model->getlensesubcategorylist();
		$ls_category_master = $this->Manage_Contact_Lenses_Model->getactivecategorylist();
        $this->load->view('lenses_subcategory', ['ls_subcategorylist'=>$ls_subcategorylist, 'ls_category_master'=>$ls_category_master]);
    }

    public function addlensesubCategory(){
		$data = array(
			'lenses_cat_id' => $_REQUEST['parentcategory'],
			'lenses_cat_type' => $_REQUEST['categoryname'],
			'lense_sub_cat_slug' => str_replace(" ","-", strtolower($_REQUEST['categoryname'])),
			'is_active' => $_REQUEST['categorystatus'],
			'created_date' => date('Y-m-d H:i:s'),
		);
		
		$response = $this->Manage_Contact_Lenses_Model->addlensesubcategory($data);

		redirect('Contact_Lenses/lenses_subcategory');
	}

    public function editlensesubCategory(){
        $id = $this->input->post('id');
		$data['lense_sub_category']= $this->Manage_Contact_Lenses_Model->getlensesubcategory($id);
        
		echo json_encode($data);
    }

    public function updatelensesubCategory(){
		$data = array(
			'lenses_cat_id' => $_REQUEST['e_parentcategory'],
			'lenses_cat_type' => $_REQUEST['e_categoryname'],
			'lense_sub_cat_slug' => str_replace(" ","-", strtolower($_REQUEST['e_categoryname'])),
			'is_active' => $_REQUEST['e_categorystatus'],
			'created_date' => date('Y-m-d H:i:s'),
		);
		
		$response = $this->Manage_Contact_Lenses_Model->updatelensesubcategory($_REQUEST['sub_cat_id'], $data);

		redirect('Contact_Lenses/lenses_subcategory');
	}


    public function lenses_product(){
        $this->load->view('lenses_product');
    }

}