<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Site_Info_Model extends CI_Model {

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
    
}