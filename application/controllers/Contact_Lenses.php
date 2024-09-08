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
        $this->load->view('contactlenses',['categorylist'=>$categorylist, 'contact_lense_category'=>$contact_lense_category]);
    }

    public function get_lense_product_byid(){
        $sub_cat_slug= $this->uri->segment(3);
        $categorylist = $this->Site_Info_Model->getcategorylist();
        $contact_lense_category = $this->Site_Info_Model->getcontact_lense_subcatid($sub_cat_slug);
        $contact_lense_product = $this->Site_Info_Model->get_contact_lense_product($contact_lense_category->sub_category_id);
        $this->load->view('contactlenses_product',['categorylist'=>$categorylist, 'contact_lense_product'=>$contact_lense_product]);
    }

    public function get_lense_protype_byid(){
        $sub_cat_slug= $this->uri->segment(2);
    }
}