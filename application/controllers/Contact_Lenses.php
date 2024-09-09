<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Contact_Lenses extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('Site_Info_Model');
		$this->load->model('Site_Product_Model');
	}

    public function index(){
        $categorylist = $this->Site_Info_Model->getcategorylist();
        $contact_lense_category = $this->Site_Info_Model->getcontact_lense_catlist();
        $companysetting = $this->Site_Info_Model->getcompanysetting();
        $this->load->view('contactlenses',['categorylist'=>$categorylist, 'contact_lense_category'=>$contact_lense_category, 'companysetting'=>$companysetting]);
    }

    public function get_lense_product_byid(){
        $sub_cat_slug= $this->uri->segment(3);
        $categorylist = $this->Site_Info_Model->getcategorylist();
        $contact_lense_category = $this->Site_Info_Model->getcontact_lense_subcatid($sub_cat_slug);
        $contact_lense_product = $this->Site_Info_Model->get_contact_lense_product($contact_lense_category->sub_category_id);
        $companysetting = $this->Site_Info_Model->getcompanysetting();
        $this->load->view('contactlenses_product',['categorylist'=>$categorylist, 'contact_lense_product'=>$contact_lense_product, 'companysetting'=>$companysetting]);
    }

    public function get_lense_protype_byid(){
        $sub_cat_slug= $this->uri->segment(2);
        $contact_lense_product_detail = $this->Site_Info_Model->get_contact_lense_product_detail($sub_cat_slug);
        $product_gallery = $this->Site_Info_Model->getLenseProductGallary($contact_lense_product_detail->lp_id);
        $companysetting = $this->Site_Info_Model->getcompanysetting();
       $this->load->view('single_lenses_product_detail', ['contact_lense_product_detail'=>$contact_lense_product_detail, 'companysetting'=>$companysetting,'product_gallery'=>$product_gallery]);
    }
}