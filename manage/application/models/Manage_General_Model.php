<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Manage_General_Model extends CI_Model {
    public function single_file_upload($my_file, $file_path, $types="*", $thumb=1, $image_name) {
		$this->load->library('upload');
		
		  $config = array(
		    'allowed_types' => $types,  //'gif|jpg|jpeg|png|iso|dmg|zip|rar|doc|docx|xls|xlsx|ppt|pptx|csv|ods|odt|odp|pdf|rtf|sxc|sxi|txt|exe|avi|mpeg|mp3|mp4|3gp',
		    'upload_path' => '../assets/uploads/'.$file_path,
		    'overwrite' => FALSE,
		    'max_size' => 20000
		  );

		  $this->load->library('upload');
		  $this->upload->initialize($config);


          // create an album if not already exist in uploads dir
            // wouldn't make more sence if this part is done if there are no errors and right before the upload ??
           
            $dir_exist = true; // flag for checking the directory exist or not
            if (!is_dir(base_url().'/assets/uploads/'.$file_path.'/' . $image_name))
            {
                mkdir(base_url().'/assets/uploads/'.$file_path.'/' . $image_name, 0777, true);
                $dir_exist = false; // dir not exist
            }
            else{

            }

		  if ($this->upload->do_upload($my_file)) {
	            $image_data = $this->upload->data();
	      } else {
	        	$error = $this->upload->display_errors();
	            return false;    
	      }

	      if($thumb == 1) {
	           $config = array(
	            'source_image' => $image_data['full_path'],
	            'new_image' => '../assets/uploads/'.$file_path . '/thumbs',
	            'maintain_ration' => TRUE,
	            'width' => 150
	           );
	          
	           $this->load->library('image_lib', $config);
	           $this->image_lib->resize();
	      }

	    return $image_data['file_name'];
	}
}
?>