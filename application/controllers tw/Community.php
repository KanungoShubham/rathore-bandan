<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Community extends CI_Controller {

public function __construct() {
        parent::__construct();
      
      $this->load->library('session');   
      $this->load->helper('url');
      $this->load->helper('form');
      $this->load->model('Community_model');
      $this->db->initialize();
       
     
        }
      public function index(){

	
		$this->load->view('include/cheader.php');
		$this->load->view('community/communitylogin.php');
		$this->load->view('include/cfooter.php');
	
	}
  public function inserrtcommunity(){
    $Email=$_POST['cemail'];
    $password=md5("rathorbandhan@2022@startup");
      $role=$_POST['role'];
     $userData = array('c_emailid'=>$Email,'c_password'=>$password,'userrole'=> $role);
          $data=$this->Community_model->userinsert($userData);
               if($data){

                 $data = array("success" => 1);
                
               }else{
                    $data = array("error" => 0);
                 }
               echo json_encode($data);
}
public function rcommunity(){


$this->load->view('include/cheader.php');
$this->load->view('community/rcommunity.php');
$this->load->view('include/cfooter.php');

}

}
