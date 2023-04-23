<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class State extends CI_Controller {

public function __construct() {
        parent::__construct();
      
      $this->load->library('session');   
      $this->load->helper('url');
      $this->load->helper('form');
      $this->load->model('Community_model');
        $this->load->library('pagination');
      $this->db->initialize();
      if(empty($this->session->userdata('cid')))
      {

          redirect(base_url().'Community');
      }
     
        }
    public function index(){
    $this->load->view('include/header.php');
    $this->load->view('community/Home.php');
    $this->load->view('include/footer.php');
  
  }
     public function Stateforms(){
    $this->load->view('include/header.php');
    $this->load->view('community/Stateform.php');
    $this->load->view('include/footer.php');
  
  }
    public function satemebersfrom(){
       $st=$_SESSION['cid']; 
                  
     $result['stu']=$this->Community_model->satemebers($st);
    $this->load->view('include/header.php');
    $this->load->view('community/Statemberform.php',$result);
    $this->load->view('include/footer.php');
  
  }
  public function formssatember($mab){
     $result['ofcm']=$this->Community_model->offmbers($mab);
    $this->load->view('include/header.php');
    $this->load->view('community/Statembersform.php',$result);
    $this->load->view('include/footer.php');

  }
   public function addoffice(){
    $oid=$_SESSION['cid']; 
    $officename=$_POST['officename'];
    $officergnumber=$_POST['officergnumber'];
    $officergyear=$_POST['officergyear'];
    $officedesc=$_POST['officedesc'];
    $ofcountry=$_POST['country'];
    $ofstate=$_POST['state'];
    $ofdistrict=$_POST['district'];
    $ofcity=$_POST['city'];
    $ofpincode=$_POST['pincode'];
    $ofaddress=$_POST['address'];
    $officelandmark=$_POST['officelandmark'];
    $officmobile=json_encode($_POST['officmobile']);
    $officelandline=json_encode($_POST['officelandline']);
    $officehemail=json_encode($_POST['officehemail']);
    $officefacebook=$_POST['officefacebook'];
    $officeinstagram=$_POST['officeinstagram'];
    $officslug=preg_replace('/[^A-Za-z0-9-]+/', '-', $officename)."-".uniqid(); 

    $officeimages='';
    $officega='assets/community/officeimage/';
     if(!empty($_FILES['officeimage']['name'])){

          $config['upload_path'] = 'assets/community/officeimage/';// path where we have to store 
          $config['allowed_types'] = 'jpg|jpeg|png|gif';// allowed types
          $config['file_name'] = time().$_FILES['officeimage']['name'];           
          //Load upload library and initialize configuration
          $this->load->library('upload',$config);
          $this->upload->initialize($config);
          if($this->upload->do_upload('officeimage')){
              $uploadData = $this->upload->data();
             $officse = $uploadData['file_name'];
                $officeimages=$officega.=$officse."";// file name
          }else{
              $officeimages = 'assets/usercover/rathore.png';
          }
        }
            
       $userData = array('ocid'=>$oid,'officename'=>$officename,'officergnumber'=>$officergnumber,
        'officeyears'=>$officergyear,'officedesc'=>$officedesc,'country'=>$ofcountry,'state'=>$ofstate,
        'district'=>$ofdistrict,'city'=>$ofcity,'pincode'=>$ofpincode,'address'=>$ofaddress,
        'officelandmark'=>$officelandmark,'officmobile'=>$officmobile,'officelandline'=>$officelandline,
        'officehemail'=>$officehemail,'officefacebook'=>$officefacebook,'officeinstagram'=>$officeinstagram,
        'officeimage'=>$officeimages,'officslug'=>$officslug);
        $datas=$this->Community_model->userfech($oid,$officename,$ofstate);
                     if($datas > 0){
                    $this->session->set_flashdata('error', "Alredy Office Ragister");
                          }else{
         $datas=$this->Community_model->addoffice($userData);
      if($datas){
         // $data = array("success" => 1);
        $this->session->set_flashdata('success', 'sussfully insert');
      }else{
         // $data = array("error" => 0);
        $this->session->set_flashdata('error', "check one time");
      }
}
         redirect('State/Stateforms','refresh');
  
         // echo json_encode($data);   
}
public function statemabers(){
       $slid=$_SESSION['cid']; 
        $oficid=$_POST['oficid']; 
       $state=$_POST['state'];
       $mberpost=$_POST['mberpost'];
       $mbername=$_POST['mbername'];
       $mbergender=$_POST['mbergender'];
       $mbrmobile=$_POST['mbrmobile'];
       $mberfb=$_POST['mberfb'];
       $mbrinsta=$_POST['mbrinsta'];
       $mbrwhatsapp=$_POST['mbrwhatsapp'];
       $mbremail=$_POST['mbremail'];
        $maberslug=preg_replace('/[^A-Za-z0-9-]+/', '-', $mbername)."-".uniqid(); 
       $proimage='';
      $proimge='assets/community/mabers/';
     if(!empty($_FILES['mberimage']['name'])){

          $config['upload_path'] = 'assets/community/mabers/';// path where we have to store 
          $config['allowed_types'] = 'jpg|jpeg|png|gif';// allowed types
          $config['file_name'] = time().$_FILES['mberimage']['name'];           
          //Load upload library and initialize configuration
          $this->load->library('upload',$config);
          $this->upload->initialize($config);
          if($this->upload->do_upload('mberimage')){
              $uploadData = $this->upload->data();
             $proimg = $uploadData['file_name'];
                $proimage=$proimge.=$proimg."";// file name
          }else{
              $proimage = 'assets/usercover/rathore.png';
          }
        }
          
    $ComData = array('chid'=>$slid,'officid'=>$oficid,'state'=>$state,'mberpost'=>$mberpost,'mbername'=>$mbername,
            'mbergender'=>$mbergender,'mbrmobile'=>$mbrmobile,'mberfb'=>$mberfb,'mbrinsta'=>$mbrinsta,
            'mbremail'=>$mbremail,'mbrwhatsapp'=>$mbrwhatsapp,'maberslug'=>$maberslug,'mberimage'=>$proimage);
         $data=$this->Community_model->office($mbername,$mbrmobile,$mbremail);
                     if($data > 0){
                   
                         $data = array("error" => 0);
                          }else{
          $data=$this->Community_model->mabers($ComData);
           
      if($data){
         $data = array("success" => 1);
        // $this->session->set_flashdata('true', 'sussfully insert');
      }else{
         $data = array("error" => 0);
        // $this->session->set_flashdata('error', "check one time");
      }
    }
      echo json_encode($data); 
}
  public function viewmabers($vm){
  
     $result['ofcm']=$this->Community_model->viewmbers($vm);   
    $this->load->view('include/header.php');
    $this->load->view('community/viewmbers.php',$result);
    $this->load->view('include/footer.php');

  }
  public function stateupdatemebers($sateid){
      $data=$this->Community_model->stateupdatemebers($sateid);
            echo json_encode($data);
  }
  public function updatestatemberinfo(){
        $upsid=$_POST['mid']; 
       $upstate=$_POST['upstate'];
       $uppost=$_POST['uppost'];
       $upname=$_POST['upname'];
       $upgender=$_POST['upgender'];
       $upmobile=$_POST['upmobile'];
       $upemail=$_POST['upemail'];
       $upfb=$_POST['upfb'];
       $upinsta=$_POST['upinsta'];
       $upwhatsapp=$_POST['upwhatsapp'];
       
       $upproimage='';
      $upproimge='assets/community/mabers/';
     if(!empty($_FILES['upimage']['name'])){

          $config['upload_path'] = 'assets/community/mabers/';// path where we have to store 
          $config['allowed_types'] = 'jpg|jpeg|png|gif';// allowed types
          $config['file_name'] = time().$_FILES['upimage']['name'];           
          //Load upload library and initialize configuration
          $this->load->library('upload',$config);
          $this->upload->initialize($config);
          if($this->upload->do_upload('upimage')){
              $uploadData = $this->upload->data();
             $upproimg = $uploadData['file_name'];
                $upproimage=$upproimge.=$upproimg."";// file name
          }else{
              $upproimage = 'assets/usercover/rathore.png';
          }
        }
        else{
                $upproimage=$_POST['mimgup'] ;
              }

$upstatedata = array('state'=>$upstate,'mberpost'=>$uppost,'mbername'=>$upname,'mbergender'=>$upgender,'mbrmobile'=>$upmobile,
  'mberfb'=>$upfb,'mbrinsta'=>$upinsta,'mbremail'=>$upemail,'mbrwhatsapp'=>$upwhatsapp,
  'mberimage'=>$upproimage);
          $data=$this->Community_model->stateupmaber($upstatedata,$upsid);
      if($data){
         $data = array("success" => 1);
        // $this->session->set_flashdata('true', 'sussfully insert');
      }else{
         $data = array("error" => 0);
        // $this->session->set_flashdata('error', "check one time");
      }
      echo json_encode($data); 
}
  public function stateoficeupdate($oficid){
     $result['rw']=$this->Community_model->stateoficeupdate($oficid);
          $this->load->view('include/header.php');
    $this->load->view('community/editoffc.php',$result);
    $this->load->view('include/footer.php');
           
  }

 public function updateofiiceinfo(){
        $upofid=$_POST['upofid']; 
       $upofficename=$_POST['upofficename'];
       $upofficedesc=$_POST['upofficedesc'];
       $upofficmobile=json_encode($_POST['officmobile']);
       $upofficelandline=json_encode($_POST['officelandline']);
       $upofficehemail=json_encode($_POST['officehemail']);
       $upofficefacebook=$_POST['upofficefacebook'];
       $upofficeinstagram=$_POST['upofficeinstagram'];
    
       
       $upofficeproimage='';
      $upofficeproimge='assets/community/officeimage/';
     if(!empty($_FILES['upofimage']['name'])){

          $config['upload_path'] = 'assets/community/officeimage/';// path where we have to store 
          $config['allowed_types'] = 'jpg|jpeg|png|gif';// allowed types
          $config['file_name'] = time().$_FILES['upofimage']['name'];           
          //Load upload library and initialize configuration
          $this->load->library('upload',$config);
          $this->upload->initialize($config);
          if($this->upload->do_upload('upofimage')){
              $uploadData = $this->upload->data();
             $upoffiecproimg = $uploadData['file_name'];
                $upofficeproimage=$upofficeproimge.=$upoffiecproimg."";// file name
          }else{
              $upofficeproimage = 'assets/usercover/rathore.png';
          }
        }
        else{
                $upofficeproimage=$_POST['upimgup'] ;
              }

$upofficedata = array('officename'=>$upofficename,'officedesc'=>$upofficedesc,'officmobile'=>$upofficmobile,
  'officelandline'=>$upofficelandline,'officehemail'=>$upofficehemail,'officefacebook'=>$upofficefacebook,
  'officeinstagram'=>$upofficeinstagram,'officeimage'=>$upofficeproimage);
          $data=$this->Community_model->officeup($upofficedata,$upofid);
      if($data){
     
         $this->session->set_flashdata('true', 'sussfully update');
      }else{
      
      $this->session->set_flashdata('error', "check one time");
      }
   redirect('State/stateoficeupdate/'.$upofid,'refresh');
}
}