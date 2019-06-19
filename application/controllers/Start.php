<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Start extends CI_Controller {

	public function home(){
		$this->load->view('start_page');
	}

	public function current_issue(){
		$this->load->view('start_page_current_issue');
	}
		
	public function contact_us(){
		$this->load->view('start_page_contact_us');
	}

	public function about_us(){
		$this->load->view('start_page_about_us');
	}

	public function editorial_board(){
		$this->load->view('start_page_editorial_board');
	}

	public function faq(){
		$this->load->view('start_page_faq');
	}
}
