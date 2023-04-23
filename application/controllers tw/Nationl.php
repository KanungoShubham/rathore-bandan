<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nationl extends CI_Controller {

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
     public function Nationlforms(){
    $this->load->view('include/header.php');
    $this->load->view('community/nationalform.php');
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
     public function nationalmaber(){
          $nom=$_SESSION['cid'];
     $result['nodm']=$this->Community_model->nationalmaber($nom);
    $this->load->view('include/header.php');
    $this->load->view('community/nationaloffices.php',$result);
    $this->load->view('include/footer.php');

  }
     public function nationalmambers($naom){
     $result['natio']=$this->Community_model->nationalmambers($naom);
    $this->load->view('include/header.php');
    $this->load->view('community/nationalmambersform.php',$result);
    $this->load->view('include/footer.php');

  }
   public function nationaladdoffice(){
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
            
       $userData = array('socid'=>$oid,'officename'=>$officename,'officergnumber'=>$officergnumber, 
        'officeyears'=>$officergyear,'officedesc'=>$officedesc,'country'=>$ofcountry,'state'=>$ofstate,
        'district'=>$ofdistrict,'city'=>$ofcity,'pincode'=>$ofpincode,'address'=>$ofaddress,
        'officelandmark'=>$officelandmark,'officmobile'=>$officmobile,'officelandline'=>$officelandline,
        'officehemail'=>$officehemail,'officefacebook'=>$officefacebook,'officeinstagram'=>$officeinstagram,
        'officeimage'=>$officeimages,'officslug'=>$officslug);
      
         $datas=$this->Community_model->nationaladdoffice($userData);
      if($datas){
         // $data = array("success" => 1);
        $this->session->set_flashdata('true', 'sussfully insert');
      }else{
         // $data = array("error" => 0);
        $this->session->set_flashdata('error', "check one time");
      }

         redirect(base_url().'Nationl/Nationlforms','refresh');
  
         // echo json_encode($data);   
}
public function addnationalmbers(){
       $slid=$_SESSION['cid']; 
       $noficid=$_POST['noficid']; 
       $nmberpost=$_POST['nmberpost'];
       $nmbername=$_POST['nmbername'];
       $nmbergender=$_POST['nmbergender'];
       $nmbrmobile=$_POST['nmbrmobile'];
       $nmbremail=$_POST['nmbremail'];
       $country=$_POST['country'];
       $state=$_POST['state'];
       $district=$_POST['district'];
       $nmberfb=$_POST['nmberfb'];
       $nmbrinsta=$_POST['nmbrinsta'];
       $nmbrwhatsapp=$_POST['nmbrwhatsapp'];
        $maberslug=preg_replace('/[^A-Za-z0-9-]+/', '-', $nmbername)."-".uniqid(); 
       $proimage='';
      $proimge='assets/community/mabers/';
     if(!empty($_FILES['nmberimage']['name'])){

          $config['upload_path'] = 'assets/community/mabers/';// path where we have to store 
          $config['allowed_types'] = 'jpg|jpeg|png|gif';// allowed types
          $config['file_name'] = time().$_FILES['nmberimage']['name'];           
          //Load upload library and initialize configuration
          $this->load->library('upload',$config);
          $this->upload->initialize($config);
          if($this->upload->do_upload('nmberimage')){
              $uploadData = $this->upload->data();
             $proimg = $uploadData['file_name'];
                $proimage=$proimge.=$proimg."";// file name
          }else{
              $proimage = 'assets/usercover/rathore.png';
          }
        }
          
    $ComData = array('noffid'=>$noficid,'nloid'=>$slid,'nmberpost'=>$nmberpost,'nmbername'=>$nmbername,
            'nmbergender'=>$nmbergender,'nmbrmobile'=>$nmbrmobile,'nmbremail'=>$nmbremail,'country'=>$country,
            'state'=>$state,'district'=>$district,'nmberfb'=>$nmberfb,'nmbrinsta'=>$nmbrinsta,
            'nmbrwhatsapp'=>$nmbrwhatsapp,'nmberimage'=>$proimage,'nmaberslug'=>$maberslug);

          $data=$this->Community_model->natioofmabers($ComData);
           
      if($data){
         $data = array("success" => 1);
        // $this->session->set_flashdata('true', 'sussfully insert');
      }else{
         $data = array("error" => 0);
        // $this->session->set_flashdata('error', "check one time");
      }
   
      echo json_encode($data); 
}
  public function nviewmabers($nvm){
  
     $result['nofcm']=$this->Community_model->nviewmbers($nvm);   
    $this->load->view('include/header.php');
    $this->load->view('community/nviewmbers.php',$result);
    $this->load->view('include/footer.php');

  }
  public function nationlupdatemebers($nsateid){
      $data=$this->Community_model->nationlupdatemebers($nsateid);
            echo json_encode($data);
  }
  public function updatenationlmberinfo(){
        $nupsid=$_POST['mid']; 
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

$nupstatedata = array('nmberpost'=>$uppost,'nmbername'=>$upname,'nmbergender'=>$upgender,'nmbrmobile'=>$upmobile,
     'nmbremail'=>$upemail,'nmberfb'=>$upfb,'nmbrinsta'=>$upinsta,'nmbrwhatsapp'=>$upwhatsapp,
       'nmberimage'=>$upproimage);
          $data=$this->Community_model->nationlupdateoficmebers($nupstatedata,$nupsid);
      if($data){
         $data = array("success" => 1);
        // $this->session->set_flashdata('true', 'sussfully insert');
      }else{
         $data = array("error" => 0);
        // $this->session->set_flashdata('error', "check one time");
      }
      echo json_encode($data); 
}
  public function nationaleditoffic($noficid){
     $result['rw']=$this->Community_model->nationaleditoffic($noficid);
          $this->load->view('include/header.php');
    $this->load->view('community/nationaleditoffic.php',$result);
    $this->load->view('include/footer.php');
           
  }

 public function nupdateofiiceinfo(){
        $nupofid=$_POST['upofid']; 
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

$nupofficedata = array('officename'=>$upofficename,'officedesc'=>$upofficedesc,'officmobile'=>$upofficmobile,
  'officelandline'=>$upofficelandline,'officehemail'=>$upofficehemail,'officefacebook'=>$upofficefacebook,
  'officeinstagram'=>$upofficeinstagram,'officeimage'=>$upofficeproimage);
          $data=$this->Community_model->nupdateofiiceinfo($nupofficedata,$nupofid);
      if($data){
     
         $this->session->set_flashdata('true', 'sussfully update');
      }else{
      
      $this->session->set_flashdata('error', "check one time");
      }
   redirect(base_url().'Nationl/nationaleditoffic/'.$nupofid,'refresh');
}
}