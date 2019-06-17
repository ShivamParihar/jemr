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

		$email = $this->input->post('email');
		$password  = $this->input->post('password');

		$admin_email = 'admin@gmail.com';
		$checked = true;

		if($checked && $email == $admin_email){
			return redirect('Admin');
		}
		else if($checked && $email != $admin_email){
			return redirect('User/upload');	
		}
		else{
			$this->session->set_flashdata('info','Invalid Email or password');
			return redirect('LoginController');
		}
		
	}

	public function register_check(){

		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$password  = $this->input->post('password');
		$c_password  = $this->input->post('c_password');

		if($password == $c_password){
			//check email already registered
			$checked = false;
			if($checked){
				//email already registered
				$this->session->set_flashdata('info','Email already resistered');
				$this->load->view('register_page');
			}
			else{
				//resister
				$this->session->set_flashdata('info','Registration successful');
				return redirect('LoginController');
			}
		}
		else{
			$this->session->set_flashdata('info','Password and confirm password do not match');
			$this->load->view('register_page');
			//return redirect('LoginController/register_view');
		}
		
	}

	public function logout(){
		return redirect('LoginController');
	}
}
