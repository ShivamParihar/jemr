<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function upload(){
		$this->load->view('user_upload_doc');
	}

	public function profile(){
		$this->load->view('user_profile');
	}

	public function document(){
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
