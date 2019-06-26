<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	//to view profile
	public function profile(){
		$this->session->set_userdata('title','Admin Profile');
		$this->load->view('admin_profile');
	}

	//to update profile
	public function update_profile(){
		$user_id = $this->session->userdata('user_id');
		$name = $this->input->post('name');
		$password  = $this->input->post('password');
		$email  = $this->input->post('email');

		$this->AdminModel->update_profile($name, $password, $email, $user_id);
		
		$this->session->set_userdata('name',$name);
		$this->session->set_userdata('password',$password);
		$this->session->set_userdata('email',$email);

		$this->session->set_flashdata('info','Profile updated successfully');
		return redirect('Admin/profile');
	}

	//to list new submissions
	public function list_new(){
		$this->session->set_userdata('title','New Submissions');
		//get article submission list
		$main_doc_list = $this->AdminModel->get_new_main_doc_list();		
		$this->load->view('admin_list_new',['main_doc_list'=>$main_doc_list]);
	}

	//to view doc list page
	public function view_doc_list($main_doc_id){
		$this->session->set_userdata('main_doc_id',$main_doc_id);
		return redirect('Admin/view_doc_list_final');
	}

	public function view_doc_list_final(){
		$main_doc_id = $this->session->userdata('main_doc_id');
		// set title
		$this->session->set_userdata('title','Articles');
		
		$doc_list = $this->AdminModel->get_doc_list($main_doc_id);

		$this->load->view('admin_view_new_doc_list',['doc_list'=>$doc_list]);
	}

	//to approve doc
	public function approve_doc($main_doc_id, $doc_id){
		$this->AdminModel->approve_doc($main_doc_id, $doc_id);	
		return redirect('Admin/view_doc_list/'.$main_doc_id);	
	}

	// to publish doc
	public function publish_doc($main_doc_id, $doc_id){
		$this->AdminModel->publish_doc($main_doc_id, $doc_id);	
		return redirect('Admin/view_doc_list/'.$main_doc_id);	
	}


	//to approve doc
	public function disapprove_doc($main_doc_id, $doc_id){
		$this->AdminModel->disapprove_doc($main_doc_id, $doc_id);	
		return redirect('Admin/view_doc_list/'.$main_doc_id);	
	}

	public function list_old(){
		$this->session->set_userdata('title','Old Submissions');
		//get article submission list
		$main_doc_list = $this->AdminModel->get_old_main_doc_list();		
		$this->load->view('admin_list_old',['main_doc_list'=>$main_doc_list]);
	}

	public function list_user(){
		$this->session->set_userdata('title','Users');
		//get article submission list
		$user_list = $this->AdminModel->get_user_list();
		$this->load->view('admin_list_user',['user_list'=>$user_list]);
	}

	//get particular user detalis
	public function view_user($user_id){
		$this->session->set_userdata('user_user_id', $user_id);
		return redirect('Admin/view_user_final');
	}
	public function view_user_final(){
		$user_id = $this->session->userdata('user_user_id');

		$this->session->set_userdata('user_user_id', $user_id);
    	$user_details = $this->AdminModel->get_user_details($user_id);
		$user_main_doc_list = $this->UserModel->get_main_doc_list($user_id);
			
		$this->load->view('admin_view_user',['user_details'=>$user_details,
											 'user_main_doc_list'=>$user_main_doc_list]);
	}
	
	public function update_user_profile(){
		$user_id = $this->session->userdata('user_user_id');
		$name = $this->input->post('name');
		$password  = $this->session->userdata('user_password');
		$email  = $this->input->post('email');

		$this->AdminModel->update_profile($name, $password, $email, $user_id);
		
		return redirect('Admin/view_user/'.$user_id);
	}

	public function delete_user($user_id){
		$this->AdminModel->delete_user($user_id);
		return redirect('Admin/list_user');
	}
}
