<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Product extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('Site_Product_Model');
	}

    public function getProductByCategory(){
        $category = $this->uri->segment(2);
        $category_id = $this->Site_Product_Model->getCategoryid($category);
        $category_product = $this->Site_Product_Model->getproductBYcategoryID($category_id->id);
        
        $this->load->view('category_product', ['product_detail'=>$category_product]);
    }

}