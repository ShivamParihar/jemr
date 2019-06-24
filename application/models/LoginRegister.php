<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginRegister extends CI_Model {

  function user_exist($email, $password){
 	
 	$q = $this->db->where(['email'=>$email,'password'=>$password])
						->get('userinfo');

	if($q->num_rows() > 0){
		$this->session->set_userdata('user_id',$q->row('user_id'));
		$this->session->set_userdata('name',$q->row('name'));
		$this->session->set_userdata('email',$q->row('email'));
		$this->session->set_userdata('password',$q->row('password'));
		$this->session->set_userdata('created_date',$q->row('created_date'));
    $this->session->set_userdata('total_articles',0);
    $this->session->set_userdata('approved_articles',0);
    $this->session->set_userdata('published_articles',0);	
		return true;					
	}
    return false;
  }  

  function email_exist($email){
  	$q = $this->db->where('email',$email)
  					->get('userinfo');

  	if($q->num_rows() > 0)
  		return true;
  	return false;
  }

  function register_user($name, $email, $password){
  	$data = array('name'=>$name,
  	'email'=>$email,
  	'password'=>$password
  	);

  	$row_affected = $this->db->insert('userinfo',$data);
  	if($row_affected > 0)
  		return true;
  	return false;
  }
}