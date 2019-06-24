<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function upload(){
		// set title
		$this->session->set_userdata('title','Upload article');
		//get article subject list
		$subject_list = $this->UserModel->get_subject_list();

		$this->load->view('user_upload_doc',['subject_list'=>$subject_list]);
	}

	public function upload_doc_info(){
		if(!empty($_FILES['doc_link']['name'])){
	        $config['upload_path'] = 'uploads/';
	        $config['allowed_types'] = 'doc|docx';
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

		

		
	}

	public function profile(){
		$this->session->set_userdata('title','Profile');
		$user_id = $this->session->userdata('user_id');
		$this->UserModel->get_profile_info($user_id);
		$this->load->view('user_profile');
	}

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

	public function document(){
		$this->session->set_userdata('title','Your articles');
		$this->load->view('user_view_doc');
	}

	public function save_to_database(){
		$record = $this->input->post();
		echo(var_dump($record));
		echo(count($record));
		foreach($record as $student_id => $attendence){
	        
	        echo($student_id."			".$attendence."<br/>");
	  //       $data = array('student_id'=>$student_id,
			//  'attendence'=>$attendence
			// );
			
			// //insert value in database
   //  		$this->db->insert('attendence_record',$data);
	    }
	}
}
