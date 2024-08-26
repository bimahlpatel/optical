<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Product extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('Manage_Product_Model');
		$this->load->model('Manage_CategoryMaster_Model');
		$this->load->model('Manage_Category_Model');
		if(! $this->session->userdata('adminid')) {
			redirect('login');
		}
	}

	public function index(){
		$productlist = $this->Manage_Product_Model->getproductlist();
		$this->load->view('product_detail',['productlist'=>$productlist]);
	}

	public function addproduct(){
		$categorylist = $this->Manage_CategoryMaster_Model->getmascategorylist();
		$this->load->view('add_product',['categorylist'=>$categorylist]);
	}

	public function insertproduct(){

		$product_image = "placeholder.jpg";

		if($_FILES['product_image']['name'] != '') {
			$product_image = $this->Manage_Product_Model->single_file_upload('product_image', 'product', 'jpg|gif|png|jpeg', 0, $_FILES['product_image']['name']);
		}

		$data = array(
			'product_title' => $_REQUEST['productname'],
			'product_slug' => $_REQUEST['productslug'],
			'product_sku' => $_REQUEST['productsku'],
			'product_cat_id' => $_REQUEST['productcategory'],
			'product_subcategory' => $_REQUEST['productsubcategory'],
			'product_description' =>$_REQUEST['product_desc'],
			'product_image'=>$product_image,
			'created_date' => date('Y-m-d H:i:s'),
			'isActive' => $_REQUEST['productstatus'],
		);
		
		$response = $this->Manage_Product_Model->addproduct($data);

		redirect('product');
	}

	public function editproduct($id){
		$productlist = $this->Manage_Product_Model->getproductdetails($id);
		$categorylist = $this->Manage_CategoryMaster_Model->getmascategorylist();
		$subcategorylist = $this->Manage_Category_Model->getcategorylist();
		$this->load->view('edit_product',['productlist'=>$productlist, 'categorylist'=>$categorylist, 'subcategory'=>$subcategorylist]);
	}

	public function updateproduct(){

		$product_image = "placeholder.jpg";

		if($_FILES['product_image']['name'] != '') {
			$product_image = $this->Manage_Product_Model->single_file_upload('product_image', 'product', 'jpg|gif|png|jpeg', 0, $_FILES['product_image']['name']);
		}

		$data = array(
			'product_title' => $_REQUEST['productname'],
			'product_slug' => $_REQUEST['productslug'],
			'product_sku' => $_REQUEST['productsku'],
			'product_cat_id' => $_REQUEST['productcategory'],
			'product_subcategory' => $_REQUEST['productsubcategory'],
			'product_description' =>$_REQUEST['product_desc'],
			'product_image'=>$product_image,
			'updated_date' => date('Y-m-d H:i:s'),
			'isActive' => $_REQUEST['productstatus'],
		);
		
		$response = $this->Manage_Product_Model->updateproduct($_REQUEST['productid'], $data);

		redirect('product');
	}

	public function uploadgallary(){
			$files = $_FILES;
			$count = count($_FILES['file']['name']);
			$uploadData = [];
			$uploadPath = './uploads/';
			
			// Create the upload directory if it does not exist
			if (!is_dir($uploadPath)) {
				mkdir($uploadPath, 0755, true);
			}
	
			for ($i = 0; $i < $count; $i++) {
				$_FILES['file']['name'] = $files['file']['name'][$i];
				$_FILES['file']['type'] = $files['file']['type'][$i];
				$_FILES['file']['tmp_name'] = $files['file']['tmp_name'][$i];
				$_FILES['file']['error'] = $files['file']['error'][$i];
				$_FILES['file']['size'] = $files['file']['size'][$i];
	
				$config['upload_path'] = $uploadPath;
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = 2048; // 2MB
				$config['max_width'] = 1024;
				$config['max_height'] = 768;
	
				$this->upload->initialize($config);
	
				if ($this->upload->do_upload('file')) {
					$uploadData[] = $this->upload->data();
				} else {
					$errors[] = $this->upload->display_errors();
				}
			}
	
			if (empty($errors)) {
				echo json_encode(array('status' => 'success', 'files' => $uploadData));
			} else {
				echo json_encode(array('status' => 'error', 'errors' => $errors));
			}
		}



}