<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newspaper extends CI_Controller {

public function __construct() {
        parent::__construct();
      
      $this->load->library('session');   
      $this->load->helper('url');
      $this->load->helper('form');
      $this->load->model('News_model');
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
     public function Newspaperforms(){
    $this->load->view('include/header.php');
    $this->load->view('community/Newspaperform.php');
    $this->load->view('include/footer.php');
  
  }

     public function newspaperoffice(){
          $nom=$_SESSION['cid'];
     $result['nodm']=$this->News_model->newsoffice($nom);
    $this->load->view('include/header.php');
    $this->load->view('community/newsoffice.php',$result);
    $this->load->view('include/footer.php');

  }
     public function newspapermambers($naom){
     $result['natio']=$this->News_model->newspapermambers($naom);
    $this->load->view('include/header.php');
    $this->load->view('community/newspaprmambersform.php',$result);
    $this->load->view('include/footer.php');

  }
   public function addNewspaperoffice(){
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
    $officega='assets/News/npofficeimage/';
     if(!empty($_FILES['officeimage']['name'])){

          $config['upload_path'] = 'assets/News/npofficeimage/';// path where we have to store 
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
            $thumbnail='';
    $thumbnailimg='assets/News/thumbnailimage/';
     if(!empty($_FILES['thumbnailimage']['name'])){

          $config['upload_path'] = 'assets/News/npofficeimage/';// path where we have to store 
          $config['allowed_types'] = 'jpg|jpeg|png';// allowed types
          $config['file_name'] = time().$_FILES['thumbnailimage']['name'];           
          //Load upload library and initialize configuration
          $this->load->library('upload',$config);
          $this->upload->initialize($config);
          if($this->upload->do_upload('thumbnailimage')){
              $uploadData = $this->upload->data();
             $thumbnailimgs = $uploadData['file_name'];
                $thumbnail=$thumbnailimg.=$thumbnailimgs."";// file name
          }else{
            
              $thumbnail = 'assets/usercover/rathore.png';
          }
        }    
                  $paper='';
           $paperpdf='assets/News/pdf/';
     if(!empty($_FILES['paperpdf']['name'])){

          $config['upload_path'] = 'assets/News/npofficeimage/';// path where we have to store 
          $config['allowed_types'] = 'pdf';// allowed types
          $config['file_name'] = time().$_FILES['paperpdf']['name'];           
          //Load upload library and initialize configuration
          $this->load->library('upload',$config);
          $this->upload->initialize($config);
          if($this->upload->do_upload('paperpdf')){
              $uploadData = $this->upload->data();
             $pdf = $uploadData['file_name'];
                $paper=$paperpdf.=$pdf."";// file name
          }else{
            
              $paper = 'assets/usercover/rathore.png';
          }
        } 
       $userData = array('nlogid'=>$oid,'npofficename'=>$officename,'npofficerg'=>$officergnumber,
        'nprgyrars'=>$officergyear,'npdec'=>$officedesc,'npcountry'=>$ofcountry,'npstate'=>$ofstate,
        'npdistrict'=>$ofdistrict,'npcity'=>$ofcity,'nppincode'=>$ofpincode,'npaddress'=>$ofaddress,
        'npofficelandmark'=>$officelandmark,'npofficmobile'=>$officmobile,'npofficelandline'=>$officelandline,
        'npofficehemail'=>$officehemail,'npofficefacebook'=>$officefacebook,'npofficeinstagram'=>$officeinstagram,
        'npofficeimage'=>$officeimages,'thumbnailimage'=>$thumbnail,'paperpdf'=>$paper,'npslug'=>$officslug);
      
         $datas=$this->News_model->newsaddoffice($userData);
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
public function addnewspapermembers(){
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
      $proimge='assets/News/newsmabers/';
     if(!empty($_FILES['nmberimage']['name'])){

          $config['upload_path'] = 'assets/News/newsmabers/';// path where we have to store 
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
          
    $ComData = array('newslogid'=>$noficid,'newsid'=>$slid,'memberpost'=>$nmberpost,
           'membername'=>$nmbername,'membergander'=>$nmbergender,'membernumber'=>$nmbrmobile,
           'memberemailid'=>$nmbremail,'country'=>$country,'state'=>$state,'district'=>$district,
            'memberimage'=>$proimage,'memberfb'=>$nmberfb,'memberinsta'=>$nmbrinsta,
            'memberwtnum'=>$nmbrwhatsapp,'memberslug'=>$maberslug);

          $data=$this->News_model->newsmabers($ComData);
           
      if($data){
         $data = array("success" => 1);
        // $this->session->set_flashdata('true', 'sussfully insert');
      }else{
         $data = array("error" => 0);
        // $this->session->set_flashdata('error', "check one time");
      }
   
      echo json_encode($data); 
}
  public function newofficmamber($nvm){
  
     $result['nofcm']=$this->News_model->vnewsmbers($nvm);   
    $this->load->view('include/header.php');
    $this->load->view('community/newofficmamber.php',$result);
    $this->load->view('include/footer.php');

  }
  public function newsupdatemebers($nsateid){
      $data=$this->News_model->newsupdatemebers($nsateid);
            echo json_encode($data);
  }
  public function updatenewsmberinfo(){
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
      $upproimge='assets/News/newsmabers/';
     if(!empty($_FILES['upimage']['name'])){

          $config['upload_path'] = 'assets/News/newsmabers/';// path where we have to store 
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

$nupstatedata = array('memberpost'=>$uppost,'membername'=>$upname,'membergander'=>$upgender,
    'membernumber'=>$upmobile,'memberemailid'=>$upemail,'memberimage'=>$upproimage,'memberfb'=>$upfb,
    'memberinsta'=>$upinsta,'memberwtnum'=>$upwhatsapp,);
          $data=$this->News_model->newsupdateoficmebers($nupstatedata,$nupsid);
      if($data){
         $data = array("success" => 1);
        // $this->session->set_flashdata('true', 'sussfully insert');
      }else{
         $data = array("error" => 0);
        // $this->session->set_flashdata('error', "check one time");
      }
      echo json_encode($data); 
}
  public function newpapereditoffice($noficid){
     $result['rw']=$this->News_model->newpapereditoffice($noficid);
          $this->load->view('include/header.php');
    $this->load->view('community/newpapereditoffice.php',$result);
    $this->load->view('include/footer.php');
           
  }

 public function newupdateofiiceinfos(){
        $nupofid=$_POST['upofid']; 
       $upofficename=$_POST['upofficename'];
       $upofficedesc=$_POST['upofficedesc'];
       $upofficmobile=json_encode($_POST['officmobile']);
       $upofficelandline=json_encode($_POST['officelandline']);
       $upofficehemail=json_encode($_POST['officehemail']);
       $upofficefacebook=$_POST['upofficefacebook'];
       $upofficeinstagram=$_POST['upofficeinstagram'];
    
       
       $upofficeproimage='';
      $upofficeproimge='assets/News/npofficeimage/';
     if(!empty($_FILES['upofimage']['name'])){

          $config['upload_path'] = 'assets/News/npofficeimage/';// path where we have to store 
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

$nupofficedata = array('npofficename'=>$upofficename,'npdec'=>$upofficedesc,
    'npofficmobile'=>$upofficmobile,'npofficelandline'=>$upofficelandline,
    'npofficehemail'=>$upofficehemail,'npofficefacebook'=>$upofficefacebook,
  'npofficeinstagram'=>$upofficeinstagram,'npofficeimage'=>$upofficeproimage);
          $data=$this->News_model->newsupdateofiiceinfo($nupofficedata,$nupofid);
      if($data){
     
         $this->session->set_flashdata('true', 'sussfully update');
      }else{
      
      $this->session->set_flashdata('error', "check one time");
      }
   redirect('Newspaper/newpapereditoffice/'.$nupofid,'refresh');
}
}