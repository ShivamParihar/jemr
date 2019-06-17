<?php

class User extends CI_Controller {

	public function upload(){
		$this->load->view('user_upload_doc');
	}

	public function profile(){
		$this->load->view('user_profile');
	}

	public function document(){
		$this->load->view('user_view_doc');
	}
}
