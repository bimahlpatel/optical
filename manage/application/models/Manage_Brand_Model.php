<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Manage_Brand_Model extends CI_Model {

	public function getbarndlist(){

		$query = $this->db->order_by('brand_id  asc')
				->get('brand_master');
		return $query->result();  
	}

	public function getbranddetails($id){
		$query = $this->db->where('brand_id', $id)
				->get('brand_master');
		return $query->row();      
	}

	public function addbrand($data){
		$this->db->insert('brand_master',$data);
		$brand = $this->db->insert_id();

		return ($this->db->affected_rows() != 1) ? false : true; 
	}

	public function editbrand($id, $data){
		$sql_query=$this->db->where('brand_id', $id)
					->update('brand_master', $data); 
		return $sql_query;
	}


	public function changestatus($statusid, $id){
		if($statusid == 1) {
			$data = array(
			   'is_active' => 0
			);
		}
		else {
			$data = array(
			   'is_active' => 1
			);
		}
		$sql_query=$this->db->where('brand_id', $id)
					->update('brand_master', $data); 
	}

}

