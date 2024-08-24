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

	
	public function uploadbulkfile(){
		$this->load->library('csvimport');
		$this->load->model('Manage_Site_Model');

		$file_data = $this->csvimport->get_array($_FILES["smsfile"]["tmp_name"]);
		$cnt = 0;

		foreach($file_data as $row) {
			if($row["mobile"] != '') {
				$chkentry = $this->Manage_Site_Model->checkdataentry($row["mobile"]);

				if($chkentry < 1) {
					$data = array(
						'rec_date' => date('Y-m-d H:i:s'),
						'fullname' => $row["fullname"],
					    'mobileno' => $row["mobile"],
					    'emailid' => $row["email"]
					);

					$response = $this->Manage_Site_Model->uploadbulkfile($data);
					$cnt = $cnt + 1;
				}
			}
		}

		echo json_encode(array("success"=>true, "message"=>$cnt." - numbers successfully imported."));
		die;
	}

	public function stafflist()
	{
		$this->load->model('Manage_Site_Model');
		$datalist = $this->Manage_Site_Model->getstaffmemberlist();
		$this->load->view('staff-members', ['datalist' => $datalist]);
	}

	public function staffaddForm()
	{
		$this->load->view('staff-members-add');
	}

	public function addStaffmember()
	{
		if ($_REQUEST['newpassword'] == $_REQUEST['retypepassword']) {
			$enc_password = encryptPassword($_REQUEST['emailid'], $_REQUEST['newpassword']);

			$data = array(
				'rec_date' => date('Y-m-d H:i:s'),
				'fullname' => $_REQUEST['fullname'],
				'mobile' => $_REQUEST['mobile'],
				'emailid' => $_REQUEST['emailid'],
				'password' => $enc_password,
				'role' => $_REQUEST['staffrole'],
				'isActive' => 1,
				'isDelete' => 0
			);

			$this->load->model('Manage_Site_Model');
			$response = $this->Manage_Site_Model->addstaffmember($data);

			echo json_encode(array("success" => true, "message" => "Staff account successfully created."));
		} else {
			echo json_encode(array("success" => false, "message" => "Both passwords are not equal."));
		}
	}

	public function deletestaff($id)
	{
		$this->load->model('Manage_Site_Model');
		$this->Manage_Site_Model->deletestaffaccount($id);
		redirect('site/stafflist');
	}

	public function test(){
		$this->load->model('Manage_General_Model');
		// $content = $this->Manage_General_Model->simpleemailtemplate('sss');
		$content = $this->Manage_General_Model->welcomeemailtemplate('ll','lplp');
		echo $content;
		die;
	}
}
