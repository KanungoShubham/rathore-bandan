<?php

class UserRagsitration extends CI_Model{

    public function __construct() 
    {
          parent::__construct(); 
          $this->load->database();
          
    }

public function userinsert($userData){
	 $this->db->insert('user',$userData);  
       $n = $this->db->insert_id();
       
      return $n;
}
public function userfech($Fristname,$Email,$addharname,$Mobilenumber){
 $this->db->select("*");

       $this->db->from('user');
         $this->db->where('Fristname',$Fristname);
     $this->db->where('Email',$Email);
      $this->db->where('addharname',$addharname);
        $this->db->where('Mobilenumber',$Mobilenumber);
         // $this->db->where('date',$date);

        // $this->db->where('status', 1);
       
      
        $querys = $this->db->get();
 // print_r($query);die;
 return $querys->num_rows();
}
public function updateimage($upb,$insert_id){
      $this->db->where('id',$insert_id);
      $this->db->set($upb);
    $query=$this->db->update('user');  
    return $query;
   
   }
}
?>