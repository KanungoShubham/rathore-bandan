<?php

class Auth_model extends CI_Model{

    public function __construct() 
    {
          parent::__construct(); 
          $this->load->database();
          
    }
    public function log($Email,$password){
    $this->db->select("*");
        $this->db->from('user');

      $this->db->where('Email',$Email);

      $this->db->where('password',$password);
        $this->db->where('status', '1');

      $query=$this->db->get();

      return $query;
    }
  }
?>