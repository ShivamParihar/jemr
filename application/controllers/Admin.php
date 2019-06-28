<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	//function to check admin has sign in or not
	public function __construct(){	    
	    parent::__construct();
		if($this->session->userdata('user_id') == null){
		        return redirect('LoginController');
		}
	}

	//to view profile
	public function profile(){
		$this->session->set_userdata('title','Admin Profile');
		//get news list
		$news_list = $this->AdminModel->get_news_list();
		//get article subject list
		$subject_list = $this->UserModel->get_subject_list();
		
		$this->load->view('admin_profile',['news_list'=>$news_list,'subject_list'=>$subject_list]);
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
    	$this->AdminModel->get_user_details($user_id);
		$user_main_doc_list = $this->UserModel->get_main_doc_list($user_id);
			
		$this->load->view('admin_view_user',['user_main_doc_list'=>$user_main_doc_list]);
	}
	
	//to update user profile by admin
	public function update_user_profile(){
		$user_id = $this->session->userdata('user_user_id');
		$name = $this->input->post('name');
		$password  = $this->session->userdata('user_password');
		$email  = $this->input->post('email');

		$this->AdminModel->update_profile($name, $password, $email, $user_id);
		
		return redirect('Admin/view_user/'.$user_id);
	}

	//to delete user
	public function delete_user($user_id){
		$this->AdminModel->delete_user($user_id);
		return redirect('Admin/list_user');
	}

	public function add_user_view(){
		$this->session->set_userdata('title','Add User');
		$this->load->view('admin_add_user');
	}

	//to add user
	public function add_user(){
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$password  = $this->input->post('password');
		$cpassword  = $this->input->post('cpassword');

		if($password == $cpassword){
			//check email already registered

			$checked = $this->LoginRegister->email_exist($email);
			if($checked){
				//email already registered
				$this->session->set_flashdata('info','Email already resistered');
				$this->load->view('admin_add_user');
			}
			else{
				//resister
				$is_registered =  $this->LoginRegister->register_user($name, $email, $password);
				if($is_registered)
					$this->session->set_flashdata('info','Registration successful');
				else
					$this->session->set_flashdata('info','Database error: Try aftersome time');
				$this->load->view('admin_add_user');
			}
		}
		else{
			$this->session->set_flashdata('info','Password and confirm password do not match');
			$this->load->view('admin_add_user');
		}
	}

	//to view editorial board list
 	public function view_editorials_list(){
		$this->session->set_userdata('title','Editorial Board');
		//get editorials list
		$editorial_list = $this->AdminModel->get_editorial_list();
		$this->load->view('admin_list_editorials',['user_list'=>$editorial_list]);
	}

	//to view add editorial board
	public function view_add_editorial(){
		$this->session->set_userdata('title','Add Editorial');
		$this->load->view('admin_add_editorial');
	} 

	//to add editorial
	public function add_editorial(){
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$password  = $this->input->post('password');
		$cpassword  = $this->input->post('cpassword');
		$position  = $this->input->post('position');
		$address  = $this->input->post('address');
		$publications  = $this->input->post('publications');

		if($password == $cpassword){
			//check email already registered

			$checked = $this->AdminModel->email_exist($email);
			if($checked){
				//email already registered
				$this->session->set_flashdata('info','Email already resistered');
				$this->load->view('admin_add_editorial');
			}
			else{
				//resister
				$is_registered =  $this->AdminModel->register_editorial($name, $email, $password,
					$position, $address, $publications);
				if($is_registered)
					$this->session->set_flashdata('info','Registration successful');
				else
					$this->session->set_flashdata('info','Database error: Try aftersome time');
				$this->load->view('admin_add_editorial');
			}
		}
		else{
			$this->session->set_flashdata('info','Password and confirm password do not match');
			$this->load->view('admin_add_editorial');
		}
	}

	//get particular user detalis
	public function view_editorial($editorial_id){
		$this->session->set_userdata('editorial_id', $editorial_id);
		return redirect('Admin/view_editorial_final');
	}
	public function view_editorial_final(){
		$editorial_id = $this->session->userdata('editorial_id');

		$this->AdminModel->get_editorial_details($editorial_id);
			
		$this->load->view('admin_view_editorial');
	}

	//to update editorial profile
	public function update_editorial_profile(){
		$editorial_id = $this->session->userdata('editorial_id');
		$name = $this->input->post('name');
		$password  = $this->session->userdata('editorial_password');
		$email  = $this->input->post('email');
		$position  = $this->input->post('position');
		$address  = $this->input->post('address');
		$publications  = $this->input->post('publications');

		$this->AdminModel->update_editorial_profile($name, $password, $email, $editorial_id,
											$position, $address, $publications);
		
		return redirect('Admin/view_editorial/'.$editorial_id);
	}

	//to remove editorial
	public function delete_editorial($editorial_id){
		$this->AdminModel->delete_editorial($editorial_id);
		return redirect('Admin/view_editorials_list');
	}

	//to add latest news
	public function add_latest_news(){
		$news= $this->input->post('news');
		$this->AdminModel->add_latest_news($news);
		return redirect('Admin/profile'); 
	}

	//to remove news
	public function remove_news($news_id){
		$this->AdminModel->remove_news($news_id);
		return redirect('Admin/profile');
	}

	//to add article subject
	public function add_article_subject(){
		$subject = $this->input->post('subject');
		$this->AdminModel->add_article_subject($subject);
		return redirect('Admin/profile'); 
	}

	//to remove article subject
	public function remove_article_subject($article_subject_id){
		$this->AdminModel->remove_article_subject($article_subject_id);
		return redirect('Admin/profile');
	}
}
