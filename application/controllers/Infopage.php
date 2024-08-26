<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Infopage extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('Site_Info_Model');
	}

	public function index(){
		$categorylist = $this->Site_Info_Model->getcategorylist();
		$this->load->view('index',['categorylist'=>$categorylist]);
	}
}
