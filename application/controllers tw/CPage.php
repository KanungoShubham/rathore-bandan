<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
        $this->load->library('session');
  
   if(empty($this->session->userdata('cid')&& $this->session->userdata(' logged_in') !== TRUE))
        {
            redirect(base_url().'Community');
        }
  }
 
  function index(){
    //Allowing akses to admin only
      if($this->session->userdata('userrole') ==='2'){
         
       redirect(base_url().'Hospic');
      }else{
          echo "Access Denied";
      }
 
  }
    function State(){
    //Allowing akses to admin only
      if($this->session->userdata('userrole') ==='3'){
         
       redirect(base_url().'State');
      }else{
          echo "Access Denied";
      }
 
  }
     function Nationl(){
    //Allowing akses to admin only
      if($this->session->userdata('userrole') ==='4'){
         
       redirect(base_url().'Nationl');
      }else{
          echo "Access Denied";
      }
 
  }
    function Newspaper(){
    //Allowing akses to admin only
      if($this->session->userdata('userrole') ==='5'){
         
       redirect(base_url().'Newspaper');
      }else{
          echo "Access Denied";
      }
 
  }
 
}