<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserModel extends CI_Model {

  function get_profile_info($user_id){

  }

  function update_profile($name, $password, $user_id){
    $this->db->set('name', $name);
    $this->db->set('password', $password);
    $this->db->where('user_id',$user_id);
    $this->db->update('userinfo');
  }

  function get_subject_list(){
    $q = $this->db->select('article_subject')
                  ->get('article_subject_table');

    $subject_list = $q->result();
    return $subject_list;
  }

  
}