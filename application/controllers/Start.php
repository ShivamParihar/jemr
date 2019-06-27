<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Start extends CI_Controller {

	public function home(){
		// set title
		$this->session->set_userdata('title','Home');
		$this->load->view('start_page');
	}

	public function current_issue(){
		// set title
		$this->session->set_userdata('title','Current issue');
		$this->load->view('start_page_current_issue');
	}
		
	public function contact_us(){
		// set title
		$this->session->set_userdata('title','Contact us');
		$this->load->view('start_page_contact_us');
	}

	public function about_us(){
		// set title
		$this->session->set_userdata('title','About us');
		$this->load->view('start_page_about_us');
	}

	public function editorial_board(){
		// set title
		$this->session->set_userdata('title','Editorial board');
		$this->load->view('start_page_editorial_board');
	}

	public function faq(){
		// set title
		$this->session->set_userdata('title','faq');
		$this->load->view('start_page_faq');
	}

	public function author_guideline(){
		// set title
		$this->session->set_userdata('title','Author guideline');
		$this->load->view('start_page_author_guideline');
	}

	public function download(){
		// set title
		$this->session->set_userdata('title','Download');
		$this->load->view('start_page_download');
	}
}
