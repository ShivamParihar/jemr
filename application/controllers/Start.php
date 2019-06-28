<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Start extends CI_Controller {

	public function home(){
		// set title
		$this->session->set_userdata('title','Home');
		//get news list
		$news_list = $this->AdminModel->get_news_list();
		//get latest 3 articles
		$get_latest_3_article_list = $this->StartModel->get_latest_3_article_list();
		$this->load->view('start_page',['news_list'=>$news_list,
										'get_latest_3_article_list'=>$get_latest_3_article_list]);
	}

	//to view current issue page
	public function current_issue(){
		// set title
		$this->session->set_userdata('title','Current issue');
		$article_list = $this->StartModel->get_article_list();
		$this->load->view('start_page_current_issue',['article_list'=>$article_list]);
	}

	//to download pdf or word file
	public function start_download($file){
		header("Content-Type: application/octet-stream");
		header("Content-Disposition: attachment; filename=" . urlencode($file));   
		header("Content-Type: application/octet-stream");
		header("Content-Type: application/download");
		header("Content-Description: File Transfer");            
		header("Content-Length: " . filesize($file));
		flush();
		$fp = fopen($file, "r");
		while (!feof($fp))
		{
		    echo fread($fp, 65536);
		    flush();
		} 
		fclose($fp); 
	}
		
	// to view contact us page		
	public function contact_us(){
		// set title
		$this->session->set_userdata('title','Contact us');
		$this->load->view('start_page_contact_us');
	}

	// to send email from contact us page
	public function send_email_contactus_page(){
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$message = $this->input->post('message');
		
	}

	public function about_us(){
		// set title
		$this->session->set_userdata('title','About us');
		$this->load->view('start_page_about_us');
	}

	//to view editorial board page
	public function editorial_board(){
		// set title
		$this->session->set_userdata('title','Editorial board');
		//get editorial board list
		$editorial_list = $this->AdminModel->get_editorial_list();

		$this->load->view('start_page_editorial_board',['editorial_list'=>$editorial_list]);
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
