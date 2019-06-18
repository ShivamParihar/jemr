<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function profile(){
		$this->load->view('admin_profile');
	}

	public function list_new(){
		$this->load->view('admin_list_new');
	}

	public function list_old(){
		$this->load->view('admin_list_old');
	}

	public function list_user(){
		$this->load->view('admin_list_user');
	}
	
}
