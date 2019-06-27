<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	//function to check user has sign in or not
	public function __construct(){	    
	    parent::__construct();
		if($this->session->userdata('user_id') == null){
		        return redirect('LoginController');
		}
	}

	// to view upload doc page
	public function upload(){
		$user_id = $this->session->userdata('user_id');
		// set title
		$this->session->set_userdata('title','Upload article');
		//get article subject list
		$subject_list = $this->UserModel->get_subject_list();
		//get non sumbit doc if any
		$pending_main_doc_id = $this->UserModel->check_main_doc_exist($user_id);
		$doc_list = $this->UserModel->not_submit_doc_list($pending_main_doc_id);
		$this->session->set_userdata('main_doc_id',$pending_main_doc_id);

		$this->load->view('user_upload_doc',['subject_list'=>$subject_list,'doc_list'=>$doc_list]);
	}

	// to upload new document
	public function user_upload_doc(){
		if(!empty($_FILES['doc_link']['name'])){
	        $config['upload_path'] = 'uploads/';
	        $config['allowed_types'] = '*';
	        $config['max_size'] = '100000000000000000000';
	        $config['file_name'] = $_FILES['doc_link']['name'];
	        $this->load->library('upload',$config);
	        $this->upload->initialize($config);
	        
	        $doc_link = "";
	        if($this->upload->do_upload('doc_link')){
	            $uploadData = $this->upload->data();
	            $doc_link = $uploadData['file_name'];
	        }else{
	            $doc_link = '';
	        }
	    }
	    else{
	        $doc_link = '';
	    }
		$user_id = $this->session->userdata('user_id');
		$title = $this->input->post('title');
		$article_subject = $this->input->post('article_subject');

		//get non submit main_doc if any
		$pending_main_doc_id = $this->UserModel->check_main_doc_exist($user_id);

		// new doc upload
		if($pending_main_doc_id == 0){
			$pending_main_doc_id = $this->UserModel->add_new_main_doc($user_id);
		}
		// doc sumbit is pending
		else{	
			$this->UserModel->update_main_doc($pending_main_doc_id);
		}

		//add new document
		$this->UserModel->add_doc($pending_main_doc_id, $title, $article_subject, $doc_link);	
		return redirect('User/upload');	
	}

	// to delete existing doc
	public function remove_doc_row($main_doc_id, $doc_id){
		//remove doc 
		$this->UserModel->remove_doc_row($doc_id);
		//decrement doc count in main_doc_info table
		$this->UserModel->decrement_main_doc($main_doc_id);
		return redirect('User/upload');
	}

	//to submit doc
	public function submit_doc($main_doc_id){
		if($main_doc_id != 0)
			$this->UserModel->submit_doc($main_doc_id);
		return redirect('User/upload');
	}

	//to view profile
	public function profile(){
		$this->session->set_userdata('title','Profile');
		$user_id = $this->session->userdata('user_id');
		$this->UserModel->get_profile_info($user_id);
		$this->load->view('user_profile');
	}

	//to update profile
	public function update_profile(){
		$user_id = $this->session->userdata('user_id');
		$name = $this->input->post('name');
		$password  = $this->input->post('password');

		$this->UserModel->update_profile($name, $password, $user_id);
		
		$this->session->set_userdata('name',$name);
		$this->session->set_userdata('password',$password);

		$this->session->set_flashdata('info','Profile updated successfully');
		return redirect('User/profile');
	}

	//to view doc main list page
	public function document(){
		$user_id = $this->session->userdata('user_id');
		// set title
		$this->session->set_userdata('title','Your Submissions');
		//get article subject list
		$main_doc_list = $this->UserModel->get_main_doc_list($user_id);
		
		$this->load->view('user_view_doc',['main_doc_list'=>$main_doc_list]);
	}

	//to view doc list page
	public function view_doc_list($main_doc_id){
		$this->session->set_userdata('main_doc_id',$main_doc_id);
		return redirect('User/view_doc_list_final');
	}

	public function view_doc_list_final(){
		$user_id = $this->session->userdata('user_id');
		$main_doc_id = $this->session->userdata('main_doc_id');
		// set title
		$this->session->set_userdata('title','Your articles');
		
		$doc_list = 0;
		if(!is_nan($main_doc_id) && $main_doc_id != 0){
			$doc_list = $this->UserModel->get_doc_list($user_id, $main_doc_id);
		}

		$this->load->view('user_view_doc_list',['doc_list'=>$doc_list]);
	}
	
}
