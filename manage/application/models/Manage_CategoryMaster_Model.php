<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Manage_CategoryMaster_Model extends CI_Model {

	public function getmascategorylist(){
		$query = $this->db->order_by('id  asc')
				->get('category_master');
		return $query->result();      
	}

	public function getmascategorydetails($id){
		$query = $this->db->where('id', $id)
				->get('category_master');
		return $query->row();      
	}

	public function addmascategory($data){
		$this->db->insert('category_master',$data);
		$category = $this->db->insert_id();

		return ($this->db->affected_rows() != 1) ? false : true; 
	}

	public function editmascategory($id, $data){
		$sql_query=$this->db->where('id', $id)
					->update('category_master', $data); 
		return $sql_query;
	}

	public function changestatus($statusid, $id){
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
		$sql_query=$this->db->where('id', $id)
					->update('category_master', $data); 
	}

	public function getactivecategorylist(){
		$query = $this->db->where('isActive', 0)
				->order_by('id  asc')
				->get('category_master');
		return $query->result();      
	}

}

