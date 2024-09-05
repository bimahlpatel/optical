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
		$this->load->view('index',['categorylist'=>$categorylist, 'bannerlist'=>$bannerlist, 'productlist'=>$newproductlist]);
	}

	public function get_singleproduct(){
		$pid = $this->uri->segment(3);
		$categorylist = $this->Site_Info_Model->getcategorylist();
		$productdetail = $this->Site_Info_Model->getproductdetailByid($pid);
		$product_gallery = $this->Site_Product_Model->getProductGallary($pid);
		$this->load->view('single_product_detail',['categorylist'=>$categorylist,'productdetail'=>$productdetail, 'product_gallery' =>$product_gallery]);
	}

	public function store_locator(){
		$categorylist = $this->Site_Info_Model->getcategorylist();
		$store_location = $this->Site_Info_Model->get_store_location();
		$this->load->view('store_locator',['categorylist'=>$categorylist,'store_location'=>$store_location]);
	}

}
