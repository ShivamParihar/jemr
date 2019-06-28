<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminModel extends CI_Model {

  //update profile
  function update_profile($name, $password, $email, $user_id){
    $this->db->set('name', $name);
    $this->db->set('password', $password);
    $this->db->set('email', $email);
    $this->db->where('user_id',$user_id);
    $this->db->update('userinfo');
  }

  //get new main doc list for a user
  function get_new_main_doc_list(){
    $q = $this->db->from('main_doc_info')
    			  ->where('main_doc_info.submit',1)
    			  ->where('main_doc_info.checked!=', 'main_doc_info.doc_uploaded', FALSE)
    			  ->join('userinfo', 'userinfo.user_id = main_doc_info.user_id')
                  ->get();

    $main_doc_list = $q->result();
    return $main_doc_list;
  }

  //get all doc list using main_doc_id
  function get_doc_list($main_doc_id){    
  	$q = $this->db->where('main_doc_id',$main_doc_id)
              ->get('doc_info');

  	$doc_list = $q->result();              
    return $doc_list;  
  }

  //to approve doc
  function approve_doc($main_doc_id, $doc_id){
  	//update doc_info table
  	$this->db->set('approved', 1);
    $this->db->where('doc_id',$doc_id);
    $this->db->update('doc_info');

    //update main_doc_info table
    $this->db->set('doc_approved', 'doc_approved+1', FALSE);
    $this->db->set('checked', 'checked+1', FALSE);
    $this->db->where('main_doc_id',$main_doc_id);
    $this->db->update('main_doc_info');
  }

  //to publish doc
  function publish_doc($main_doc_id, $doc_id){
  	//update doc_info table
  	$this->db->set('published', 1);
    $this->db->where('doc_id',$doc_id);
    $this->db->update('doc_info');

    //update main_doc_info table
    $this->db->set('doc_published', 'doc_published + 1', FALSE);
    $this->db->where('main_doc_id',$main_doc_id);
    $this->db->update('main_doc_info');
  }

  function disapprove_doc($main_doc_id, $doc_id){
  	//update doc_info table
  	$this->db->set('approved', 2);
    $this->db->where('doc_id',$doc_id);
    $this->db->update('doc_info');

    //update main_doc_info table
    $this->db->set('checked', 'checked+1', FALSE);
    $this->db->where('main_doc_id',$main_doc_id);
    $this->db->update('main_doc_info');
  }

  //get old main doc list for a user
  function get_old_main_doc_list(){
    $q = $this->db->from('main_doc_info')
            ->where('main_doc_info.submit',1)
            ->where('main_doc_info.checked', 'main_doc_info.doc_uploaded', FALSE)
            ->join('userinfo', 'userinfo.user_id = main_doc_info.user_id')
                  ->get();

    $main_doc_list = $q->result();
    return $main_doc_list;
  }

  //get user list
  function get_user_list(){
  	$email = $this->session->userdata('email');
    $q = $this->db->where('email!=',$email)
    			  ->get('userinfo');

    $user_list = $q->result();
    return $user_list;
  }

  //to get particular user detalis
  function get_user_details($user_id){
  	$q = $this->db->where('user_id',$user_id)
                  ->get('userinfo');

    $row = $q->row_array();
    $this->session->set_userdata('user_name', $row['name']);
    $this->session->set_userdata('user_email', $row['email']);
    $this->session->set_userdata('user_password', $row['password']);
  }

  //to delete user
  function delete_user($user_id){
  	//delete user from userinfo
  	$this->db->where('user_id', $user_id)
                ->delete('userinfo');

    //delete user doc from main_doc_info
    $this->db->where('user_id', $user_id)
                ->delete('main_doc_info');   
  }

  //to check email exist for adding editorial
  function email_exist($email){
  	$q = $this->db->where('email',$email)
  					->get('editorial_board');

  	if($q->num_rows() > 0)
  		return true;
  	return false;
  }

  //to add editorial
  function register_editorial($name, $email, $password, $position, $address, $publications){
  	$data = array('name'=>$name,
  	'email'=>$email,
  	'password'=>$password,
  	'position'=>$position,
  	'address'=>$address,
  	'publications'=>$publications
  	);

  	$row_affected = $this->db->insert('editorial_board',$data);
  	if($row_affected > 0)
  		return true;
  	return false;
  }

  //to get editorial list
  function get_editorial_list(){
  	$q = $this->db->get('editorial_board');

    $editorial_list = $q->result();
    return $editorial_list;
  }

  // to get editorial detalis
  function get_editorial_details($editorial_id){
  	$q = $this->db->where('editorial_id',$editorial_id)
                  ->get('editorial_board');

    $row = $q->row_array();
    $this->session->set_userdata('editorial_name', $row['name']);
    $this->session->set_userdata('editorial_email', $row['email']);
    $this->session->set_userdata('editorial_password', $row['password']);
    $this->session->set_userdata('editorial_position', $row['position']);
    $this->session->set_userdata('editorial_address', $row['address']);
    $this->session->set_userdata('editorial_publications', $row['publications']);
  }

  // to update editorial profile
  function update_editorial_profile($name, $password, $email, $editorial_id,
											$position, $address, $publications){
  	$this->db->set('name', $name);
    $this->db->set('password', $password);
    $this->db->set('email', $email);
    $this->db->set('position', $position);
    $this->db->set('address', $address);
    $this->db->set('publications', $publications);
    $this->db->where('editorial_id',$editorial_id);
    $this->db->update('editorial_board');
  }

  //to delete a editorial
  function delete_editorial($editorial_id){
  	$this->db->where('editorial_id', $editorial_id)
                ->delete('editorial_board');
  }

  //function to add news
  function add_latest_news($news){
    $data = array('news'=>$news);
    $this->db->insert('news_info',$data);
  }

  //function to get news list
  function get_news_list(){
    $q = $this->db->get('news_info');

    $news_list = $q->result();
    return $news_list;
  }

  //to remove news
  function remove_news($news_id){
    $this->db->where('news_id', $news_id)
              ->delete('news_info');

  }

  //function to add subject article
  function add_article_subject($subject){
    $data = array('article_subject'=>$subject);
    $this->db->insert('article_subject_table',$data);
  } 

  //to remove news
  function remove_article_subject($article_subject_id){
    $this->db->where('article_subject_id', $article_subject_id)
              ->delete('article_subject_table');

  }

}







