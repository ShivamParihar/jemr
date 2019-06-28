<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class StartModel extends CI_Model {
  
  	//to get article list for current issue page 	
    function get_article_list(){
        $q = $this->db->select('*')
	    		  ->from('main_doc_info')
	    		  ->join('userinfo','userinfo.user_id = main_doc_info.user_id','left')
	    		  ->join('doc_info','doc_info.main_doc_id = main_doc_info.main_doc_id','left')
	    		  ->where('doc_info.published', 1)
	    		  ->order_by("doc_id", "desc")
	    		  ->get();

	    $article_list = $q->result();
	    return $article_list;
  	}

    //to get latest 3 article list for home page 	
    function get_latest_3_article_list(){
        $q = $this->db->select('*')
	    		  ->from('main_doc_info')
	    		  ->join('userinfo','userinfo.user_id = main_doc_info.user_id','left')
	    		  ->join('doc_info','doc_info.main_doc_id = main_doc_info.main_doc_id','left')
	    		  ->where('doc_info.published', 1)
	    		  ->order_by("doc_id", "desc")
	    		  ->limit(3)
	    		  ->get();

	    $article_list = $q->result_array();
	    return $article_list;
  	}
}