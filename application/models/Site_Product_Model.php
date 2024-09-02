<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Site_Product_Model extends CI_Model {

    public function getCategoryid($category){
            $query =$this->db->select('id')
                    ->like('category_slug', $category)
                    ->order_by('id  asc')
                    ->get('category_master');
            return $query->row();      

    }

    public function getproductBYcategoryID($category_id){
            $query = $this->db->select('p.*, cm.name, c.category_name, c.category_type, c.category_slug')
                    ->from('product p')
                    ->join('category_master cm','cm.id=p.product_cat_id')
                    ->join('category c','c.category_id=p.product_subcategory')
                    ->where('p.isActive', 0)
                    ->where('p.product_cat_id', $category_id)
                    ->get();
            return $query->result();
    }

    public function getProductGallary($pid){
        $query =$this->db->select('*')
                ->where('product_id', $pid)
                ->order_by('product_id  asc')
                ->get('product_gallery');
        return $query->result();      

}
    

}
?>