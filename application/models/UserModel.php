<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserModel extends CI_Model {

  function get_profile_info($user_id){
    $q = $this->db->select_sum('doc_uploaded')
                  ->where('user_id',$user_id)
                  ->where('submit',1)
                  ->get('main_doc_info');

    $total_articles = $q->row()->doc_uploaded;

    $q = $this->db->select_sum('doc_approved')
                  ->where('user_id',$user_id)
                  ->where('submit',1)
                  ->get('main_doc_info');

    $approved_articles = $q->row()->doc_approved;

    $q = $this->db->select_sum('doc_published')
                  ->where('user_id',$user_id)
                  ->where('submit',1)
                  ->get('main_doc_info');

    $published_articles = $q->row()->doc_published;

    $this->session->set_userdata('total_articles',$total_articles);
    $this->session->set_userdata('approved_articles',$approved_articles);
    $this->session->set_userdata('published_articles',$published_articles); 

  }

  //update profile
  function update_profile($name, $password, $user_id){
    $this->db->set('name', $name);
    $this->db->set('password', $password);
    $this->db->where('user_id',$user_id);
    $this->db->update('userinfo');
  }

  //get article subject list
  function get_subject_list(){
    $q = $this->db->select('article_subject')
                  ->get('article_subject_table');

    $subject_list = $q->result();
    return $subject_list;
  }

  //check not submit doc in main exist
  function check_main_doc_exist($user_id){
    $q = $this->db->where('user_id',$user_id)
                  ->where('submit',0)
                  ->get('main_doc_info');

    if($q->num_rows() > 0){
      $row = $q->row_array();
      return $row['main_doc_id'];
    }
    else{
      return 0;
    }
  }
  
  //to add new doc row in main table
  function add_new_main_doc($user_id){
    $data = array('user_id'=>$user_id,
      'doc_uploaded'=>1,
      'doc_approved'=>0,
      'doc_published'=>0,
      'paid'=>0,
      'submit'=>0,
      'checked'=>0
    );

    $this->db->insert('main_doc_info',$data);
    $main_doc_id = $this->check_main_doc_exist($user_id);
    return $main_doc_id;
  }

  //increment doc count by 1
  function update_main_doc($main_doc_id){
    $this->db->set('doc_uploaded', 'doc_uploaded+1', FALSE);
    $this->db->where('main_doc_id',$main_doc_id);
    $this->db->update('main_doc_info');
  }

  //to add new doc row in doc_info table
  function add_doc($main_doc_id, $title, $article_subject, $doc_link){
    $data = array('main_doc_id'=>$main_doc_id,
      'title'=>$title,
      'article_subject'=>$article_subject,
      'doc_link'=>$doc_link,
      'approved'=>0,
      'paid'=>0,
      'published'=>0
    );

    $this->db->insert('doc_info',$data);
  }

  //get doc list corresponding to the main_doc_id
  function not_submit_doc_list($main_doc_id){
    $q = $this->db->where('main_doc_id',$main_doc_id)
                  ->get('doc_info');

    $doc_list = $q->result();
    return $doc_list;
  }

  //remove whole doc row
  function remove_doc_row($doc_id){
    $this->db->where('doc_id', $doc_id)
                 ->delete('doc_info');
  }

  //decrement doc count by 1
  function decrement_main_doc($main_doc_id){
    $this->db->set('doc_uploaded', 'doc_uploaded-1', FALSE);
    $this->db->where('main_doc_id',$main_doc_id);
    $this->db->update('main_doc_info');
  }

  //to submit main doc
  function submit_doc($main_doc_id){
    //check if doc count is not zero
    $q = $this->db->select('doc_uploaded')
                  ->where('main_doc_id',$main_doc_id)
                  ->get('main_doc_info');
    $row = $q->row_array();
    $doc_count =  $row['doc_uploaded'];
    if($doc_count < 1)
      return;

    //update submit to 1
    $this->db->set('submit', 1);
    // $this->db->set('upload_time', date('Y-m-d H:i:s'));
    $this->db->where('main_doc_id',$main_doc_id);
    $this->db->update('main_doc_info');

    //send notification to admin

  }

  //get main doc list for a user
  function get_main_doc_list($user_id){
    $q = $this->db->where('user_id',$user_id)
                  ->where('submit',1)
                  ->get('main_doc_info');

    $main_doc_list = $q->result();
    return $main_doc_list;
  }

  //get all doc list using main_doc_id
  function get_doc_list($user_id, $main_doc_id){
    $q = $this->db->where('main_doc_id',$main_doc_id)
                  ->where('user_id',$user_id)
                  ->get('main_doc_info');
    
    $doc_list=0;

    if($q->num_rows() > 0){
      $q = $this->db->where('main_doc_id',$main_doc_id)
                  ->get('doc_info');

      $doc_list = $q->result();
              
    }
    return $doc_list;  
  }
}