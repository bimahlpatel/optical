<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Manage_Seometa_Model extends CI_Model {

    public function getseolist(){
		$query = $this->db->order_by('id  asc')
				->get('meta_keywords');
		return $query->result();  
	}
    public function addseometakeyword($data){
		$this->db->insert('meta_keywords',$data);
		$seo_meta = $this->db->insert_id();

		return ($this->db->affected_rows() != 1) ? false : true; 
	}
    public function getseo_metadetails($id){
		$query = $this->db->where('id', $id)
				->get('meta_keywords');
		return $query->row();      
	}

    public function updateseo_meta($id, $data){
		$sql_query=$this->db->where('id', $id)
					->update('meta_keywords', $data); 
		return $sql_query;
	}
}
