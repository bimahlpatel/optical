<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Infopage extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('Site_Info_Model');
	}

	public function index(){
		$categorylist = $this->Site_Info_Model->getcategorylist();
		$bannerlist = $this->Site_Info_Model->getbannerlist();
		$newproductlist = $this->Site_Info_Model->getproductlist();

		$this->load->view('index',['categorylist'=>$categorylist, 'bannerlist'=>$bannerlist, 'productlist'=>$newproductlist]);
	}

	public function get_singleproduct($pid){
		$productdetail = $this->Site_Info_Model->getproductdetailByid($pid);
		$this->load->view('single_product_detail',['productdetail'=>$productdetail]);
	}

}
