<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Seo_Meta_Keyword extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('Manage_Seometa_Model');
		if(! $this->session->userdata('adminid')) {
			redirect('login');
		}
	}

    public function index(){
        $seolist = $this->Manage_Seometa_Model->getseolist();
		$this->load->view('seo_detail',['seolist'=>$seolist]);
    }

    public function addSeoMetakeword(){

		$data = array(
			'slug' => $_REQUEST['slug'],
			'title' => $_REQUEST['title'],
			'descriptions' => $_REQUEST['descripton'],
            'keywords' => $_REQUEST['keyword'],
            'rec_date' => date('Y-m-d H:i:s'),
		);
		
		$response = $this->Manage_Seometa_Model->addseometakeyword($data);

		redirect('Seo_Meta_Keyword');
	}

	public function seo_meta_edit(){
		$id = $this->input->post('id');
		$data['metadetails'] = $this->Manage_Seometa_Model->getseo_metadetails($id);
		echo json_encode($data);
	}

	public function udateSeoMetakeword(){

		$data = array(
			'slug' => $_REQUEST['e_slug'],
			'title' => $_REQUEST['e_title'],
			'descriptions' => $_REQUEST['e_descripton'],
            'keywords' => $_REQUEST['e_keyword'],
		);
		
		$response = $this->Manage_Seometa_Model->updateseo_meta($_REQUEST['meta_id'], $data);

		redirect('Seo_Meta_Keyword');
	}
}

?>