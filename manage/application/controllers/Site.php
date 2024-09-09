<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Site extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('Manage_Site_Model');
		$this->load->model('Manage_Product_Model');
		if(! $this->session->userdata('adminid')) {
			redirect('login');
		}
		
	}

	public function index(){
		$sitedetails = $this->Manage_Site_Model->getsite_setting();
		$this->load->view('site_settings',['sitedetails'=>$sitedetails]);
		
	}

	public function companysetting(){
		
		$data = array(
			'compay_name' => $_REQUEST['c_name'],
			'company_email' => $_REQUEST['c_email'],
			'company_address' => $_REQUEST['c_address'],
			'company_city' => $_REQUEST['c_city'],
			'company_pincode' => $_REQUEST['c_pincode'],
			'about_company' => $_REQUEST['c_about'],
			'company_contact' => $_REQUEST['c_contact'],
			'facebook_link' => $_REQUEST['c_facebook_link'],
			'linkedin_link' => $_REQUEST['c_linkedin_link'],
			'pinterest_link' => $_REQUEST['c_pinterest_link'],
			'instagram_link' => $_REQUEST['c_instagram_link'],
			'google_link' => $_REQUEST['c_google_link'],
			'youtube_link' => $_REQUEST['c_youtube_link'],
			'twitter_link' => $_REQUEST['c_twitter_link'],
			
		);
		$response = $this->Manage_Site_Model->company_setting($_REQUEST['c_id'], $data);
		redirect('site');
	}

	public function banner(){
		$bannerdetails = $this->Manage_Site_Model->getsite_banner();
		$this->load->view('banner_detail',['bannerdetails'=>$bannerdetails]);
	}

	public function add_banner(){
		$product_image = "placeholder.jpg";

		if($_FILES['banner_image']['name'] != '') {
			$banner_image = $this->Manage_Product_Model->single_file_upload('banner_image', 'banner', 'jpg|gif|png|jpeg', 0, $_FILES['banner_image']['name']);
		}

		$data = array(
			'title' => $_REQUEST['bannername'],
			'sub_title' => $_REQUEST['bannersubtitle'],
			'image' => $banner_image,
			'is_active' => $_REQUEST['bannerstatus'],
			
		);
		$response = $this->Manage_Site_Model->add_banner($data);

		redirect('site/banner');
	}

	public function deletebanner($status,$id) {
		
		$this->Manage_Site_Model->deletecbanner($status, $id);
		redirect('site/banner');
	}

	public function editPage($pagename){
		$this->load->model('Manage_Site_Model');
		$pagedetails = $this->Manage_Site_Model->getpagedetails($pagename);
		$this->load->view('page-edit',['pagedetails'=>$pagedetails]);
	}

	public function updatePage(){
		$data = array(
			'rec_date' => date('Y-m-d H:i:s'),
			'option_value' => $_REQUEST['content']
		);
		$this->load->model('Manage_Site_Model');
		$response = $this->Manage_Site_Model->editpage($_REQUEST['id'], $data);

		redirect('site/editPage/'.$_REQUEST['page']);
	}

	public function banner_edit(){
        $id = $this->input->post('id');
		$data['bannerdetails']= $this->Manage_Site_Model->editbanner($id);
		echo json_encode($data);
	}

	public function update_banner(){
		$product_image = "placeholder.jpg";

		if($_FILES['e_banner_image']['name'] != '') {
			$banner_image = $this->Manage_Product_Model->single_file_upload('e_banner_image', 'banner', 'jpg|gif|png|jpeg', 0, $_FILES['e_banner_image']['name']);
		}

		$data = array(
			'title' => $_REQUEST['e_bannername'],
			'sub_title' => $_REQUEST['e_bannersubtitle'],
			'image' => $banner_image,
		);
		
		$response = $this->Manage_Site_Model->updatebanner($this->input->post('edit_id'),$data);

		redirect('site/banner');
	}

	public function store_locator(){
		$storedetails = $this->Manage_Site_Model->getstore_locator();
		$this->load->view('store_detail',['storedetails'=>$storedetails]);
	}

	public function addstore(){
		
		$data = array(
			'store_name' => $_REQUEST['storename'],
			'store_email' => $_REQUEST['storeemail'],
			'store_contactno' => $_REQUEST['storecontact'],
			'store_address' => $_REQUEST['store_address'],
			'store_location' => $_REQUEST['store_location'],
			
		);
		$response = $this->Manage_Site_Model->add_store($data);

		redirect('site/store_locator');
	}

	public function get_store_ByID(){
        $id = $this->input->post('id');
		$data['storedetails']= $this->Manage_Site_Model->edit_store($id);
		echo json_encode($data);
	}

	public function updatestore(){
		
		$data = array(
			'store_name' => $_REQUEST['e_storename'],
			'store_email' => $_REQUEST['e_storeemail'],
			'store_contactno' => $_REQUEST['e_storecontact'],
			'store_address' => $_REQUEST['e_store_address'],
			'store_location' => $_REQUEST['e_store_location'],
			
		);
		$response = $this->Manage_Site_Model->updatestore($_REQUEST['storeid'], $data);

		redirect('site/store_locator');
	}
	
}
