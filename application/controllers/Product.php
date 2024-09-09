<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Product extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('Site_Product_Model');
        $this->load->model('Site_Info_Model');
	}

    public function getProductByCategory(){
        $category = $this->uri->segment(2);
        $categorylist = $this->Site_Info_Model->getcategorylist();
        $category_id = $this->Site_Product_Model->getCategoryid($category);
        $category_product = $this->Site_Product_Model->getproductBYcategoryID($category_id->id);
        $companysetting = $this->Site_Info_Model->getcompanysetting();
        $this->load->view('category_product', ['categorylist'=>$categorylist,'product_detail'=>$category_product, 'companysetting'=>$companysetting]);
    }

}