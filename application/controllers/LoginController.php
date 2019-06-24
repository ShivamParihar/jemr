<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	public function index(){

		$this->load->view('login_page');
	}

	public function register_view(){

		$this->load->view('register_page');
	}

	public function login_check(){

		// $secret = $this->input->post('secret');
		// $response =  $this->input->post('response');
		// $url = "https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$response;
		// $verify = file_get_contents($url);
		// echo $verify; 

		$email = $this->input->post('email');
		$password  = $this->input->post('password');
		$admin_email = 'admin@gmail.com';
		
		$checked = $this->LoginRegister->user_exist($email, $password);

		// admin login
		if($checked && $email == $admin_email){	
			return redirect('Admin/list_new');
		}

		// user login
		else if($checked && $email != $admin_email){
			return redirect('User/upload');	
		}

		// invalid email or password
		else{
			$this->session->set_flashdata('info','Invalid Email or password');
			return redirect('LoginController');
		}
		
	}

	public function register_check(){

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
				$this->load->view('register_page');
			}
			else{
				//resister
				$is_registered =  $this->LoginRegister->register_user($name, $email, $password);
				if($is_registered)
					$this->session->set_flashdata('info','Registration successful');
				else
					$this->session->set_flashdata('info','Database error: Try aftersome time');
				return redirect('LoginController');
			}
		}
		else{
			$this->session->set_flashdata('info','Password and confirm password do not match');
			$this->load->view('register_page');
		}
		
	}

	public function logout(){
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('password');
		return redirect('LoginController');
	}
}
