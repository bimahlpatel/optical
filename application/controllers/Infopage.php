<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Infopage extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('Site_Info_Model');
		$this->load->model('Site_Product_Model');
	}

	public function index(){
		$categorylist = $this->Site_Info_Model->getcategorylist();
		$bannerlist = $this->Site_Info_Model->getbannerlist();
		$newproductlist = $this->Site_Info_Model->getproductlist();
		$newarrproductlist = $this->Site_Info_Model->getnewproductlist();
		$companysetting = $this->Site_Info_Model->getcompanysetting();
		$this->load->view('index',['categorylist'=>$categorylist, 'bannerlist'=>$bannerlist, 'productlist'=>$newproductlist, 'newarrproductlist'=>$newarrproductlist, 'companysetting'=>$companysetting]);
	}

	public function get_singleproduct(){
		$pid = $this->uri->segment(3);
		$categorylist = $this->Site_Info_Model->getcategorylist();
		$productdetail = $this->Site_Info_Model->getproductdetailByid($pid);
		$product_gallery = $this->Site_Product_Model->getProductGallary($pid);
		$companysetting = $this->Site_Info_Model->getcompanysetting();
		$this->load->view('single_product_detail',['categorylist'=>$categorylist,'productdetail'=>$productdetail, 'product_gallery' =>$product_gallery, 'companysetting'=>$companysetting]);
	}

	public function store_locator(){
		$categorylist = $this->Site_Info_Model->getcategorylist();
		$store_location = $this->Site_Info_Model->get_store_location();
		$companysetting = $this->Site_Info_Model->getcompanysetting();
		$this->load->view('store_locator',['categorylist'=>$categorylist,'store_location'=>$store_location, 'companysetting'=>$companysetting]);
	}

	public function add_eye_checkup(){
		$data = array(
			'app_name' => $this->input->post('fullname'),
			'app_mobile' => $this->input->post('mobile'),
			'app_date' => $this->input->post('appdate'),
			'app_time' => $this->input->post('apptime'),
			'created_date' =>  date('Y-m-d H:i:s'),
		);
		
		$response = $this->Site_Info_Model->addeyecheckup($data);
		redirect('Infopage');
		
	}
	public function add_vision_checkup(){
		$data = array(
			'inq_name' => $this->input->post('fullname'),
			'inq_mobile' => $this->input->post('mobile'),
			'inq_description' => $this->input->post('desc'),
			'created_date' =>  date('Y-m-d H:i:s'),
		);
		
		$response = $this->Site_Info_Model->addvisioncheckup($data);
		redirect('Infopage');
	}

	public function faqs(){
		$companysetting = $this->Site_Info_Model->getcompanysetting();
		$this->load->view('faqs', ['companysetting'=>$companysetting]);
	}

}
