<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Site_Info_Model extends CI_Model {

    public function getcategorylist(){
		$query = $this->db->where('isActive', 0)
				->order_by('id  asc')
				->get('category_master');
		return $query->result();      
	}
    
}