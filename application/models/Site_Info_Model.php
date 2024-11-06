<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Site_Info_Model extends CI_Model {

	public function getcompanysetting(){
		$query = $this->db->get('company_setting');
		return $query->row();    
	}

    public function getcategorylist(){
		$query = $this->db->where('isActive', 0)
				->order_by('id  asc')
				->get('category_master');
		return $query->result();      
	}

	public function getbannerlist(){
		$query = $this->db->where('is_active', 0)
				->order_by('id  asc')
				->get('banner');
		return $query->result();      
	}

	public function getproductlist(){
		$query = $this->db->select('p.*, cm.name, c.category_name, c.category_type, c.category_slug')
				->from('product p')
				->join('category_master cm','cm.id=p.product_cat_id')
				->join('category c','c.category_id=p.product_subcategory')
				->where('p.isActive', 0)
				->limit(8)
				->get();
		return $query->result();     
	}

	public function getnewproductlist(){
		$query = $this->db->select('p.*, cm.name, c.category_name, c.category_type, c.category_slug')
				->from('product p')
				->join('category_master cm','cm.id=p.product_cat_id')
				->join('category c','c.category_id=p.product_subcategory')
				->where('p.isActive', 0)
				->limit(8)
				->get();
		return $query->result();     
	}

	public function getproductdetailByid($id){
		$query = $this->db->select('p.*, cm.name, c.category_name, c.category_type, c.category_slug, ps.*')
				->from('product p')
				->join('category_master cm','cm.id=p.product_cat_id')
				->join('category c','c.category_id=p.product_subcategory')
				->join('product_frame_detail ps','ps.product_id=p.product_id')
				->where('p.isActive', 0)
				->where('p.product_id', $id)
				->get();
		return $query->row();     
	}

	/* get contact lenses category */
	public function getcontact_lense_catlist(){
		$query = $this->db->where('is_active', 0)
				->order_by('lense_cat_id asc')
				->get('lenses_category_master');
		return $query->result(); 
	}

	public function get_sub_lenses_category($sql){
		$q = $this->db->query($sql);
        return $q->result();
	}

	public function get_store_location(){
		$query = $this->db->where('is_active', 0)
				->order_by('store_id asc')
				->get('store_locator');
		return $query->result(); 
	}

	public function getcontact_lense_subcatid($lense_sub_cat_slug){
		$query = $this->db->select('sub_category_id')
				->where('lense_sub_cat_slug', $lense_sub_cat_slug)
				->get('lenses_subcategory_master');
		return $query->row(); 
	}

	public function get_contact_lense_product($sub_cat_id){
		$query = $this->db->where('is_active', 0)
				->where('lp_subcat_id', $sub_cat_id)
				->order_by('lp_id asc')
				->get('lense_product');
		return $query->result(); 
	}

	public function get_contact_lense_product_detail($slug_name){

		$query = $this->db->select('pl.*, lpc.*, lsm.*')
				->from('lense_product pl')
				->join('lense_product_detail lpc','lpc.pro_id=pl.lp_id')
				->join('lenses_subcategory_master lsm','lsm.sub_category_id=pl.lp_subcat_id')
				->where('pl.is_active', 0)
				->like('pl.lp_slug', $slug_name)
				->get();
		return $query->row(); 

	}

	public function getLenseProductGallary($lpid){
		$query =$this->db->select('*')
				->where('product_lense_id', $lpid)
				->order_by('lpg_id  asc')
				->get('lense_product_gallery');
		return $query->result();  
	}

	public function addeyecheckup($data){
		$this->db->insert('eye_checkup_appointment',$data);
		$eyechk = $this->db->insert_id();

		return ($this->db->affected_rows() != 1) ? false : true; 
	}

	public function addvisioncheckup($data){
		$this->db->insert('inquiry',$data);
		$inquiry = $this->db->insert_id();

		return ($this->db->affected_rows() != 1) ? false : true; 
	}

	public function getpagedetails($pagename = ''){
		$query = $this->db->where('option_key',$pagename)
				->get('site_options')
				->row();
		return $query;      
	}
    
}