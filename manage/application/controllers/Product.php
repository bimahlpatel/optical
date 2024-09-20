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

public function addproduct_specifination() {

		$data = array(
			'product_id' => $_REQUEST['product_id'],
			'model_no' => $_REQUEST['model_no'],
			'frame_type' => $_REQUEST['frame_type'],
			'frame_shape' => $_REQUEST['frame_shape'],
			'frame_size' => $_REQUEST['frame_size'],
			'frame_width' => $_REQUEST['frame_width'],
			'frame_dimensions' =>$_REQUEST['frame_dimensions'],
			'frame_colour'=>$_REQUEST['frame_colour'],
			'weight' => $_REQUEST['weight'],
			'weight_group' => $_REQUEST['weight_group'],
			'material' => $_REQUEST['material'],
			'frame_material' => $_REQUEST['frame_material'],
			'temple_material' => $_REQUEST['temple_material'],
			'prescription_type' => $_REQUEST['prescription_type'],
			'frame_style' => $_REQUEST['frame_style'],
		);
		
		$response = $this->Manage_Product_Model->addproduct_specification($data);
		redirect('product');

}

public function uploadgallary(){

	  
	$this->load->library('upload');
		$img_directory = '../assets/uploads/prid_'.$this->input->post('product_id').'/';
	
		if (!is_dir($img_directory))
		{
			if (!mkdir($img_directory, 0777, TRUE)) {
				mkdir($img_directory, 0777, TRUE);
			}
			
		}

	  $config['upload_path'] = $img_directory;
      $config['allowed_types'] = 'jpg|jpeg|png|gif';
      $config['max_size'] = 5048; // 2MB

	  $this->load->library('upload');
		  $this->upload->initialize($config);
		

      $files = $_FILES;
      $fileCount = count($_FILES['file']['name']);
		
      for($i = 0; $i < $fileCount; $i++) {
         $_FILES['file']['name'] = $files['file']['name'][$i];
         $_FILES['file']['type'] = $files['file']['type'][$i];
         $_FILES['file']['tmp_name'] = $files['file']['tmp_name'][$i];
         $_FILES['file']['error'] = $files['file']['error'][$i];
         $_FILES['file']['size'] = $files['file']['size'][$i];

		 if (file_exists($img_directory.'/'.$_FILES['file']['name'])) {
			unlink($img_directory.'/'.$_FILES['file']['name']);

			$query = $this->db->where('product_img_name',$_FILES['file']['name'])
					->delete('product_gallery'); 
		}


         if ($this->upload->do_upload('file')) {
            $data = $this->upload->data();
			$fileData = [
				'product_id' => $this->input->post('product_id'),
				'product_img_name' => $data['file_name'],
				'product_img_path' => $img_directory,
				'uploaded_on' => date('Y-m-d H:i:s'),
			 ];
			 $this->Manage_Product_Model->product_gallary($fileData);
            echo json_encode(['success' => $data]);

         } else {
            
			$error = $this->upload->display_errors();
            echo json_encode(['error' => $error]);
         }
      }
}
public function uploaddndfile() {
	$this->load->library('csvimport');

	$file_data = $this->csvimport->get_array($_FILES["smsfile"]["tmp_name"]);
	
	$wheredata = array();
	$cnt = 0;
	foreach ($file_data as $row) {
		
		$csvData[] = array(
			'product_title' => $row['product_title'],
			'product_slug' => str_replace(" ", "-", strtolower($row['product_title'])),
			'product_sku' => $row['product_sku'],
			'product_cat_id' => $row['product_cat_id'],
			'product_subcategory' => $row['product_subcategory'],
			'product_description' =>$row['product_description'],
			'product_image'=>$row['product_image'],
			
		);
	}
	
	$response = $this->Manage_Product_Model->uploaddndfile($csvData);

	if ($response == true) {
		echo json_encode(array("success" => true, "message" => $cnt . " - numbers added to DND list."));
		die;
	} else {
		echo json_encode(array("success" => false, "message" => "Ops! Something goes wrong."));
		die;
	}
}

}