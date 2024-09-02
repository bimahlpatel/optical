<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Manage_Site_Model extends CI_Model {


	public function getsite_setting(){
		$query = $this->db->get('company_setting');
		return $query->row();  
	}
	public function company_setting($id, $data){
		if($id==''){
			$this->db->insert('company_setting',$data);
			$company_setting = $this->db->insert_id();
			return ($this->db->affected_rows() != 1) ? false : true; 
		} else{
			$sql_query=$this->db->where('id', $id)
					->update('company_setting', $data); 
			return ($this->db->affected_rows() != 1) ? false : true; 
		}
		
	}

	public function getpagedetails($pagename){
		$query = $this->db->where('option_key',$pagename)
				->get('site_options');
		return $query->row();      
	}

	public function getsite_banner(){
		$query = $this->db->get('banner');
		return $query->result();  
	}
	
	public function add_banner($data){
		$this->db->insert('banner',$data);
		$category = $this->db->insert_id();
		return ($this->db->affected_rows() != 1) ? false : true; 
	}

	public function editpage($id, $data){
		$sql_query = $this->db->where('id', $id)
					->update('site_options', $data); 
		return $sql_query;
	}

	public function deletecbanner($status,$id){
		if($status == 1) {
			$data = array(
			   'is_active' => 0
			);
		}
		else {
			$data = array(
			   'is_active' => 1
			);
		}
		$sql_query=$this->db->where('id', $id)
					->update('banner', $data); 

	}

	
	public function editbanner($id){
		$query = $this->db->where('id', $id)
				->get('banner');
		return $query->row();    
	}

	public function updatebanner($id, $data){
		$sql_query = $this->db->where('id', $id)
					->update('banner', $data); 
		return $sql_query;   
	}

	public function getstore_locator(){
		$query = $this->db->get('store_Locator');
		return $query->result();
	}
	public function add_store($data){
		$this->db->insert('store_Locator',$data);
		$category = $this->db->insert_id();
		return ($this->db->affected_rows() != 1) ? false : true; 
	}

	public function edit_store($id){
		$query = $this->db->where('store_id', $id)
				->get('store_Locator');
		return $query->row();    
	}

	public function updatestore($id, $data){
		$sql_query = $this->db->where('store_id', $id)
					->update('store_Locator', $data); 
		return $sql_query;   
	}
}

?>