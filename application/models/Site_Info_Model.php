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
    
}