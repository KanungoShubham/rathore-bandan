<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hospic extends CI_Controller {

public function __construct() {
        parent::__construct();
      
      $this->load->library('session');   
      $this->load->helper('url');
      $this->load->helper('form');
      $this->load->model('Community_model');
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
    public function Hospiceform(){

	
        $this->load->view('include/header.php');
		$this->load->view('community/hospiceform.php');
		$this->load->view('include/footer.php');
	
	}
  public function addhospic(){
    $id=$_SESSION['cid']; 
    
    $hospicname=$_POST['hospicname'];
    $registrationnmber=$_POST['registrationnmber'];
    $registratioyear=$_POST['registratioyear'];
    $hospice=$_POST['hospice_desc'];
    $facilities=$_POST['facilities'];
    $note=$_POST['note'];
    $room=$_POST['room'];
    $pricefromhospic=$_POST['pricefromhospic'];
    $pricetohospic=$_POST['pricetohospic'];
    $hospicelectricity=$_POST['hospicelectricity'];
    $country=$_POST['country'];
    $state=$_POST['state'];
    $district=$_POST['district'];
    $city=$_POST['city'];
    $pincode=$_POST['pincode'];
    $address=$_POST['address'];
    $landmark=$_POST['landmark'];
    $mobile=json_encode($_POST['mobile']);
    $landline=json_encode($_POST['landline']);
    $hemail=json_encode($_POST['hemail']);
    $facebook=$_POST['facebook'];
    $instagram=$_POST['instagram'];
    $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $hospicname)."-".uniqid(); 

    $hospicimage='';
    $ga='assets/hospic/hospicimage/';
     if(!empty($_FILES['image']['name'])){

          $config['upload_path'] = 'assets/hospic/hospicimage/';// path where we have to store 
          $config['allowed_types'] = 'jpg|jpeg|png|gif';// allowed types
          $config['file_name'] = time().$_FILES['image']['name'];           
          //Load upload library and initialize configuration
          $this->load->library('upload',$config);
          $this->upload->initialize($config);
          if($this->upload->do_upload('image')){
              $uploadData = $this->upload->data();
             $se = $uploadData['file_name'];
                $hospicimage=$ga.=$se."";// file name
          }else{
              $hospicimage = 'assets/usercover/rathore.png';
          }
        }
  
       
         
        // If file upload form submitted 
      
             
            // If files are selected to upload 
            // if(!empty($_FILES['files']['name']) && count(array_filter($_FILES['files']['name'])) > 0){ 
               // $images=array();
     
                
                $userData = array('hid '=>$id,'hopicuniqid'=>$slug,'hospicname'=>$hospicname,'registrationnmber'=>$registrationnmber,'	registratioyear'=>$registratioyear,'hospice_desc'=>$hospice,'facilities'=>$facilities,'note'=>$note,'room'=>$room,'pricefromhospic'=>$pricefromhospic,'pricetohospic'=>$pricetohospic,'hospicelectricity'=>$hospicelectricity,'country'=>$country,'state'=>$state,'district'=>$district,'city'=>$city,'	pincode'=>$pincode,'address'=>$address,'landmark'=>$landmark ,'mobile'=> $mobile,'landline'=> $landline,'hemail'=>$hemail,'facebook'=>$facebook,'instagram'=>$instagram,'image'=>$hospicimage);
      $datas=$this->Community_model->hospic($userData);
      if($datas){
         // $data = array("success" => 1);
        $this->session->set_flashdata('true', 'sussfully insert');
      }else{
         // $data = array("error" => 0);
        $this->session->set_flashdata('error', "check one time");
      }

         redirect('Hospiceform','refresh');
  
         // echo json_encode($data);   
}
	
    public function dasbored()
    {
        $ids=$_SESSION['cid']; 
                  
     $result['data']=$this->Community_model->getdetails($ids);
    
                    
        $this->load->view('include/header.php');
        $this->load->view('community/listhospice.php', $result);
        $this->load->view('include/footer.php');
    }
     public function addmeber($id)
    {
       $result['hos']=$this->Community_model->hospicdetillis($id);
        $this->load->view('include/header.php');
        $this->load->view('community/addmebers.php',$result);
        $this->load->view('include/footer.php');
    }
		
public function hospicaddmber(){
       $id=$_SESSION['cid']; 
       $hospicid=$_POST['hospicid'];
       $hospicrag=$_POST['hospicrag'];
       $hospicuniq=$_POST['hospicuniq'];
       $carepost=$_POST['carepost'];
       $carename=$_POST['carename'];
       $caregender=$_POST['caregender'];
       $caremobile=$_POST['caremobile'];
       $caremail=$_POST['caremail'];
       $carefb=$_POST['carefb'];
       $careinsta=$_POST['careinsta'];
       $carewhatsapp=$_POST['carewhatsapp'];
       $proimage='';
      $proimge='assets/hospic/communitymember/';
     if(!empty($_FILES['careimage']['name'])){

          $config['upload_path'] = 'assets/hospic/communitymember/';// path where we have to store 
          $config['allowed_types'] = 'jpg|jpeg|png|gif';// allowed types
          $config['file_name'] = time().$_FILES['careimage']['name'];           
          //Load upload library and initialize configuration
          $this->load->library('upload',$config);
          $this->upload->initialize($config);
          if($this->upload->do_upload('careimage')){
              $uploadData = $this->upload->data();
             $proimg = $uploadData['file_name'];
                $proimage=$proimge.=$proimg."";// file name
          }else{
              $proimage = 'assets/usercover/rathore.png';
          }
        }
         $ComData = array('hmid '=>$id,'hospicid'=>$hospicid,'hospicuniq'=>$hospicuniq,'carepost'=>$carepost,
            'carename'=>$carename,'caregender'=>$caregender,'caremobile'=>$caremobile,'caremail'=>$caremail,
            'carefb'=>$carefb,'careinsta'=>$careinsta,'carewhatsapp'=>$carewhatsapp,'careimage'=>$proimage,
            'rgnumber'=>$hospicrag);
          $data=$this->Community_model->hospicmaber($ComData);
      if($data){
         $data = array("success" => 1);
        // $this->session->set_flashdata('true', 'sussfully insert');
      }else{
         $data = array("error" => 0);
        // $this->session->set_flashdata('error', "check one time");
      }
      echo json_encode($data); 
}
     public function updatehospic($hospic)
    {
       $result['hodata']=$this->Community_model->hospicupdate($hospic);
       $result['hodga']=$this->Community_model->hospicgarrly($hospic);
       $result['hmb']=$this->Community_model->hospimeber($hospic);
        $this->load->view('include/header.php');
        $this->load->view('community/infohospic.php',$result);
        $this->load->view('include/footer.php');
    }
    public function addgrallys(){
        $id=$_SESSION['cid']; 
       $rgid=$_POST['rgid'];
       $rgnumbers=$_POST['rgnumber'];
       $rguniq=$_POST['rguniq'];
         $hospicgarlly='';
      $garlly='assets/hospic/hospicgarllay/';
     if(!empty($_FILES['garllay']['name'])){

          $config['upload_path'] = 'assets/hospic/hospicgarllay/';// path where we have to store 
          $config['allowed_types'] = 'jpg|jpeg|png|gif';// allowed types
          $config['file_name'] = time().$_FILES['garllay']['name'];           
          //Load upload library and initialize configuration
          $this->load->library('upload',$config);
          $this->upload->initialize($config);
          if($this->upload->do_upload('garllay')){
              $uploadData = $this->upload->data();
             $gar = $uploadData['file_name'];
                $hospicgarlly=$garlly.=$gar."";// file name
          }else{
              $hospicgarlly = 'assets/usercover/rathore.png';
          }
        }
         $garData = array('hid '=>$rgid,'hgid'=>$id,'hguniqid'=>$rguniq,'rgnumber'=>$rgnumbers,
            'images'=>$hospicgarlly);
               $data=$this->Community_model->imgdata($garData);
      if($data){
         $data = array("success" => 1);
        // $this->session->set_flashdata('true', 'sussfully insert');
      }else{
         $data = array("error" => 0);
        // $this->session->set_flashdata('error', "check one time");
      }
      echo json_encode($data); 

    }
    public function editgr($userid){
        $data=$this->Community_model->edgrs($userid);
            echo json_encode($data);    
    }
        public function hosupmber($huserid){
        $data=$this->Community_model->hosupmber($huserid);
            echo json_encode($data);    
    }
    public function updateimagess(){
        $ueid=$_POST['ueid'];
       $hospicupgarlly='';
      $upgarlly='assets/hospic/hospicgarllay/';
     if(!empty($_FILES['ueics']['name'])){

          $config['upload_path'] = 'assets/hospic/hospicgarllay/';// path where we have to store 
          $config['allowed_types'] = 'jpg|jpeg|png|gif';// allowed types
          $config['file_name'] = time().$_FILES['ueics']['name'];           
          //Load upload library and initialize configuration
          $this->load->library('upload',$config);
          $this->upload->initialize($config);
          if($this->upload->do_upload('ueics')){
              $uploadData = $this->upload->data();
             $upgar = $uploadData['file_name'];
                $hospicupgarlly=$upgarlly.=$upgar."";// file name
                    // file name
                }else{
                    $hospicupgarlly = 'assets/usercover/rathore.png';
                }
              }
               else{
                $hospicupgarlly=$_POST['uiges'] ;
              }
              $gedata = array('images'=>$hospicupgarlly);
   
                  
                 $data=$this->Community_model->geupdata($gedata,$ueid);
                       if($data){

                         $data = array("success" => 1);
                      }
                      else{
                             $data = array("error" => 0);
                      }
                      echo json_encode($data);  

    }
    public function updatehospice($ufid){
   
       $upname=$_POST['upname'];
       $registrationupnmber=$_POST['registrationupnmber'];
       $registratioupyear=$_POST['registratioupyear'];
       $uphospice=$_POST['uphospice_desc'];
       $upfacilities=$_POST['upfacilities'];
       $upnote=$_POST['upnote'];
       $uproom=$_POST['uproom'];
       $uppricefromhospic=$_POST['uppricefromhospic'];
       $uppricetohospic=$_POST['uppricetohospic'];
       $uphospicelectricity=$_POST['uphospicelectricity'];
       $upmobile=json_encode($_POST['upmobile']);
        $uplandline=json_encode($_POST['uplandline']);
         $uphemail=json_encode($_POST['uphemail']);
          $upfacebook=$_POST['upfacebook'];
          $upinstagram=$_POST['upinstagram'];
      $uphospicimage='';
    $upga='assets/hospic/hospicimage/';
     if(!empty($_FILES['upnewimage']['name'])){

          $config['upload_path'] = 'assets/hospic/hospicimage/';// path where we have to store 
          $config['allowed_types'] = 'jpg|jpeg|png|gif';// allowed types
          $config['file_name'] = time().$_FILES['upnewimage']['name'];           
          //Load upload library and initialize configuration
          $this->load->library('upload',$config);
          $this->upload->initialize($config);
          if($this->upload->do_upload('upnewimage')){
              $uploadData = $this->upload->data();
             $upse = $uploadData['file_name'];
                $uphospicimage=$upga.=$upse."";// file name
          }else{
              $uphospicimage = 'assets/usercover/rathore.png';
          }
        }
         else{
                $uphospicimage=$_POST['upimage'] ;
              }


$userData = array('hospicname'=>$upname,'registrationnmber'=>$registrationupnmber,'registratioyear'=>$registratioupyear,
    'hospice_desc'=>$uphospice,'facilities'=>$upfacilities,'note'=>$upnote,'room'=>$uproom,'pricefromhospic'=>$uppricefromhospic,
    'pricetohospic'=>$uppricetohospic,'hospicelectricity'=>$uphospicelectricity,'mobile'=> $upmobile,'landline'=> $uplandline,'hemail'=>$uphemail,'facebook'=>$upfacebook,'instagram'=>$upinstagram,'image'=>$uphospicimage);
          $datanew=$this->Community_model->updathospice($userData,$ufid);
      if($datanew){
         // $data = array("success" => 1);
        $this->session->set_flashdata('true', 'sussfully Update');
      }else{
         // $data = array("error" => 0);
         $this->session->set_flashdata('error', "check one time");
      }
      redirect('updatehospic/'.$ufid,'refresh');
      // echo json_encode($data); 
}

public function updatemberinfo(){
        $mid=$_POST['mid']; 
       $upcarepost=$_POST['upcarepost'];
       $upcarename=$_POST['upcarename'];
       $upcaregender=$_POST['upcaregender'];
       $upcaremobile=$_POST['upcaremobile'];
       $upcaremail=$_POST['upcaremail'];
       $upcarefb=$_POST['upcarefb'];
       $upcareinsta=$_POST['upcareinsta'];
       $upcarewhatsapp=$_POST['upcarewhatsapp'];
       
       $upproimage='';
      $upproimge='assets/hospic/communitymember/';
     if(!empty($_FILES['upcareimage']['name'])){

          $config['upload_path'] = 'assets/hospic/communitymember/';// path where we have to store 
          $config['allowed_types'] = 'jpg|jpeg|png|gif';// allowed types
          $config['file_name'] = time().$_FILES['upcareimage']['name'];           
          //Load upload library and initialize configuration
          $this->load->library('upload',$config);
          $this->upload->initialize($config);
          if($this->upload->do_upload('upcareimage')){
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

$upComData = array('carepost'=>$upcarepost,'carename'=>$upcarename,'caregender'=>$upcaregender,
    'caremobile'=>$upcaremobile,'caremail'=>$upcaremail,'carefb'=>$upcarefb,'careinsta'=>$upcareinsta,
    'carewhatsapp'=>$upcarewhatsapp,'careimage'=>$upproimage);
          $data=$this->Community_model->hospicupmaber($upComData,$mid);
      if($data){
         $data = array("success" => 1);
        // $this->session->set_flashdata('true', 'sussfully insert');
      }else{
         $data = array("error" => 0);
        // $this->session->set_flashdata('error', "check one time");
      }
      echo json_encode($data); 
}

	public function logout(){
	$this->session->unset_userdata('cid');
	$this->session->sess_destroy();
	 redirect('Community');
	}
}
