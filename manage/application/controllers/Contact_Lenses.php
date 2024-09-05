<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Contact_Lenses extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->model('Manage_Contact_Lenses_Model');
		$this->load->model('Manage_General_Model');
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

/**/
    public function lenses_product(){
		$lenseproductlist = $this->Manage_Contact_Lenses_Model->getlenseproductlist();
        $this->load->view('lense_product_detail', ['lenseproductlist'=>$lenseproductlist]);
    }

	public function add_lenses_product(){
		$lensecategory = $this->Manage_Contact_Lenses_Model->getlensescategorylist();
        $this->load->view('add_lense_product', ['lensecategory'=>$lensecategory]);
	}
	public function getlesnse_subcategory($lense_cat_id){
		$subcatlist = getlensesubcategory($lense_cat_id);
		echo json_encode(array("success"=>true, "lenses_subcategorylist"=>$subcatlist));
	}

	public function insert_lense_product(){

		$product_image = "placeholder.jpg";

		if($_FILES['product_image']['name'] != '') {
			$product_image = $this->Manage_General_Model->single_file_upload('product_image', 'lenses_product', 'jpg|gif|png|jpeg', 0, $_FILES['product_image']['name']);
		}

		$data = array(
			'lp_name' => $_REQUEST['productname'],
			'lp_slug' => str_replace(" ","-", strtolower($_REQUEST['productname'])),
			'lp_cat_id' => $_REQUEST['lensecategory'],
			'lp_subcat_id' => $_REQUEST['lensesubcategory'],
			'lp_description' =>$_REQUEST['product_desc'],
			'lp_image'=>$product_image,
			'created_date' => date('Y-m-d H:i:s'),
			'is_active' => $_REQUEST['productstatus'],
		);
		
		$response = $this->Manage_Contact_Lenses_Model->addleses_product($data);

		redirect('contact_lenses/lenses_product');


	}

	public function uploadgallary(){

	  
		//$this->load->library('upload');
			$img_directory = COMPANY_SITE.'assets/uploads/len_pid_'.$this->input->post('product_id').'/';

			if (!is_dir($img_directory))
			{
				mkdir($img_directory, 0777, TRUE);
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
	
				$query = $this->db->where('lp_img_name',$_FILES['file']['name'])
						->delete('lense_product_gallery'); 
			}
	
	
			 if ($this->upload->do_upload('file')) {
				$data = $this->upload->data();
				$fileData = [
					'product_lense_id' => $this->input->post('product_id'),
					'lp_img_name' => $data['file_name'],
					'lp_img_path' => $img_directory,
					'uploaded_on' => date('Y-m-d H:i:s'),
				 ];
				 $this->Manage_Contact_Lenses_Model->lenses_product_gallary($fileData);
				echo json_encode(['success' => $data]);
	
			 } else {
				
				$error = $this->upload->display_errors();
				echo json_encode(['error' => $error]);
			 }
		  }
	}

	public function addlense_pro_specifination(){
		$data = array(
			'pro_id' => $_REQUEST['product_id'],
			'product_type' => $_REQUEST['product_type'],
			'type' => $_REQUEST['type'],
			'manufacturer_details' => $_REQUEST['manufacturer_details'],
			'country_of_origin' => $_REQUEST['country_of_origin'],
			'model_no' => $_REQUEST['model_no'],
			'base_curve' =>$_REQUEST['base_curve'],
			'diameter'=>$_REQUEST['diameter'],
			'lens_material' => $_REQUEST['lens_material'],
			'packaging' => $_REQUEST['packaging'],
			'usage_duration' => $_REQUEST['usage_duration'],
			'water_content' => $_REQUEST['water_content'],
			'gender' => $_REQUEST['gender'],
		);
		
		$response = $this->Manage_Contact_Lenses_Model->addlense_pro_specification($data);
		redirect('contact_lenses/lenses_product');
	}

	public function editlensesproduct($id){
		$productlist = $this->Manage_Contact_Lenses_Model->getlense_productdetails_byid($id);
		$categorylist = $this->Manage_Contact_Lenses_Model->getmascategorylist();
		$subcategorylist = $this->Manage_Contact_Lenses_Model->getcategorylist();
		$this->load->view('edit_lense_product',['productlist'=>$productlist, 'categorylist'=>$categorylist, 'subcategory'=>$subcategorylist]);
	}

}