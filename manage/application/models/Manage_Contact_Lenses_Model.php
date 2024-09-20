<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Manage_Contact_Lenses_Model extends CI_Model {

    public function getlensescategorylist(){
		$query = $this->db->order_by('lense_cat_id  asc')
				->get('lenses_category_master');
		return $query->result();      
	}

	public function getlensescategorydetails($id){
		$query = $this->db->where('lense_cat_id', $id)
				->get('lenses_category_master');
		return $query->row();      
	}

	public function addlensescategory($data){
		$this->db->insert('lenses_category_master',$data);
		$category = $this->db->insert_id();

		return ($this->db->affected_rows() != 1) ? false : true; 
	}

	public function editlensescategory($id, $data){
		$sql_query=$this->db->where('lense_cat_id', $id)
					->update('lenses_category_master', $data); 
		return $sql_query;
	}

	public function changestatus($statusid, $lense_cat_id){
		if($statusid == 1) {
			$data = array(
			   'isActive' => 0
			);
		}
		else {
			$data = array(
			   'isActive' => 1
			);
		}
		$sql_query=$this->db->where('lense_cat_id', $id)
					->update('lenses_category_master', $data); 
	}

	public function getactivecategorylist(){
		$query = $this->db->where('is_active', 0)
				->order_by('lense_cat_id asc')
				->get('lenses_category_master');
		return $query->result();      
	}

    /**/

    public function getlensesubcategorylist(){

		$query = $this->db->select('c.*, cm.lense_cat_name')
				->from('lenses_subcategory_master c')
				->join('lenses_category_master cm','cm.lense_cat_id=c.lenses_cat_id')
				->get();
		return $query->result();
	}
    public function addlensesubcategory($data){
		$this->db->insert('lenses_subcategory_master',$data);
		$category = $this->db->insert_id();

		return ($this->db->affected_rows() != 1) ? false : true; 
	}

    public function getlensesubcategory($id){
        $query = $this->db->select('c.sub_category_id as subcat_id, c.lenses_cat_id, c.lenses_cat_type, c.lense_sub_cat_slug, c.is_active, cm.lense_cat_name')
                ->from('lenses_subcategory_master c')
                ->join('lenses_category_master cm','cm.lense_cat_id=c.lenses_cat_id')
                ->where('c.sub_category_id', $id)
                ->get();
		return $query->row();  
    }

    public function updatelensesubcategory($id, $data){
		$sql_query=$this->db->where('sub_category_id', $id)
					->update('lenses_subcategory_master', $data); 
		return $sql_query;
	}

	public function getlesnse_subcategory($les_cat_id){
		$query = $this->db->where('is_active', 0)
				->where('lenses_cat_id', $les_cat_id)
				->order_by('sub_category_id asc')
				->get('lenses_subcategory_master');
		return $query->result();  
	}

	/**/
	
	public function getlenseproductlist(){

        $query = $this->db->select('p.*, lc.*,lsc.*')
				->from('lense_product p')
				->join('lenses_category_master lc','lc.lense_cat_id=p.lp_cat_id')
				->join('lenses_subcategory_master lsc','lsc.sub_category_id=p.lp_subcat_id')
				->order_by('p.lp_id desc')
				->get()
				->result();
		return $query;
	}

	public function addleses_product($data){
		$this->db->insert('lense_product',$data);
		$category = $this->db->insert_id();

		return ($this->db->affected_rows() != 1) ? false : true; 
	}

	public function lenses_product_gallary($data){
		$this->db->insert('lense_product_gallery',$data);
		$product_gallary = $this->db->insert_id();
		return ($this->db->affected_rows() != 1) ? false : true; 
	}

	public function addlense_pro_specification($data){
		$this->db->insert('lense_product_detail',$data);
		$product_gallary = $this->db->insert_id();
		return ($this->db->affected_rows() != 1) ? false : true; 
	}

	public function getlense_productdetails_byid($id){
			$query = $this->db->where('lp_id', $id)
					->get('lense_product');
			return $query->row();
	}

	public function uploaddndfile($data = '') {
		foreach($data  as $key=>$row){
			$this->db->insert('lense_product',$row);
		}
		
			
			return true;
		
	}

}