<?php

class Community_model extends CI_Model{

    public function __construct() 
    {
          parent::__construct(); 
          $this->load->database();
          $this->db->initialize();
    }
   public function userinsert($userData){
   $n=$this->db->insert('community',$userData);  
       
      return $n;
}
public function hospicdonation($upComData){

  $donation=$this->db->insert('donation',$upComData);  
       
      return $donation;
}
public function log($chemail,$chpassword){
    $this->db->select("*");
        $this->db->from('community');

      $this->db->where('c_emailid',$chemail);

      $this->db->where('c_password',$chpassword);
        $this->db->where('status', 1);

      $query=$this->db->get();

      return $query;
    }
    public function hospic($userData){
      $this->db->insert('hospice',$userData);  
      $hospice_id = $this->db->insert_id();
         return $hospice_id;
   }
   public function hospicimage($upb,$hospice_id){
      $this->db->where('id',$hospice_id);
      $this->db->set($upb);
    $query=$this->db->update('hospice');  
    return $query;
   
   }
   public function imgdata($garData){
    $this->db->insert('hospicegarllay',$garData); 
    $hospaicgarrly_id = $this->db->insert_id(); 
        
       return $hospaicgarrly_id;
 }
 public function upgarllyimage($gup,$ga_id){
   $this->db->where('id',$ga_id);
   $this->db->set($gup);
 $query=$this->db->update('hospicegarllay');  
 return $query;

}
    public function hospicmaber($ComData){
    $this->db->insert('hospicemeber',$ComData);  
    $hospaicmabe_id = $this->db->insert_id(); 
       
      return $hospaicmabe_id;
}
public function hospicmaberimage($mabimage,$hospicemb_id){
   $this->db->where('id',$hospicemb_id);
   $this->db->set($mabimage);
 $query=$this->db->update('hospicemeber');  
 return $query;

}
public function getdetails($ids)
{
   $this->db->select("*");
        $this->db->from('hospice');
        $this->db->where('hid',$ids);
        // $this->db->where('status', 1);
       
      
        $query = $this->db->get();
 // print_r($query);die;
return $query->result();
}
public function hospicdetillis($id)
{
   $this->db->select("*");
        $this->db->from('hospice');
        $this->db->where('id',$id);
        // $this->db->where('status', 1);
       
      
        $query = $this->db->get();
 // print_r($query);die;
return $query->row_array();
}
public function hospicupdate($hospic)
{
        $this->db->select("*");
        $this->db->from('hospice');
        $this->db->where('id',$hospic);
        // $this->db->where('status', 1);
       
      
        $query = $this->db->get();
 // print_r($query);die;
return $query->row_array();
}
public function hospicgarrly($hospic)
{
        $this->db->select("*");
        $this->db->from('hospicegarllay');
        $this->db->where('hid',$hospic);
        // $this->db->where('status', 1);
       
      
        $query = $this->db->get();
 // print_r($query);die;
return $query;
}
public function hospimeber($hospic)
{
        $this->db->select("*");
        $this->db->from(' hospicemeber');
        $this->db->where('hospicid',$hospic);
        // $this->db->where('status', 1);
       
      
        $query = $this->db->get();
 // print_r($query);die;
return $query;
}
public function hosupmber($huserid)
{
   $this->db->from('hospicemeber');
        $this->db->where('id',$huserid);

        $query = $this->db->get();

    return $query->row();

}
public function stateupdatemebers($sateid)
{
   $this->db->from('mabers');
        $this->db->where('id',$sateid);

        $query = $this->db->get();

    return $query->row();

}
public function stateoficeupdate($oficid)
{
      $this->db->select("*");
   $this->db->from('office');
        $this->db->where('id',$oficid);

       $query = $this->db->get();
 // print_r($query);die;
return $query->row_array();

}
public function edgrs($userid)
{
   $this->db->from('hospicegarllay');
        $this->db->where('id',$userid);

        $query = $this->db->get();

    return $query->row();

}
 public  function geupdata($userData,$ufid){


 $this->db->where('id',$ufid);
          $this->db->set($userData);
           $query=$this->db->update('hospicegarllay');
          
        return $query;
}
 public  function updathospice($gedata,$ueid){
$this->db->where('id',$ueid);
          $this->db->set($gedata);
           $query=$this->db->update('hospice');
          
        return $query;
}
public  function hospicupmaber($upComData,$mid){
$this->db->where('id',$mid);
          $this->db->set($upComData);
           $query=$this->db->update('hospicemeber');
          
        return $query;
}
    public function addoffice($userData){
    $this->db->insert('office',$userData);  
    $sate_id = $this->db->insert_id(); 
       return $sate_id;
}
public function sateimge($sim,$ste_id){
   $this->db->where('id',$ste_id);
   $this->db->set($sim);
 $query=$this->db->update('office');  
 return $query;

}
    public function nationaladdoffice($userData){
    $this->db->insert('nationalofiice',$userData);  
    $nationl_id = $this->db->insert_id(); 
       return $nationl_id;
}
public function nationlimge($nim,$nationls_id){
   $this->db->where('id',$nationls_id);
   $this->db->set($nim);
 $query=$this->db->update('nationalofiice');  
 return $query;

}
public function userfech($oid,$officename,$ofstate){
 $this->db->select("*");

       $this->db->from('office');
         $this->db->where('ocid',$oid);
     $this->db->where('officename',$officename);
      $this->db->where('state',$ofstate);
       
         // $this->db->where('date',$date);

        // $this->db->where('status', 1);
       
      
        $querys = $this->db->get();
 // print_r($query);die;
 return $querys->num_rows();
}
public function office($mbername,$mbrmobile,$mbremail){
 $this->db->select("*");

       $this->db->from('mabers');
         $this->db->where('mbername',$mbername);
     $this->db->where('mbrmobile',$mbrmobile);
      $this->db->where('mbremail',$mbremail);
       
         // $this->db->where('date',$date);

        // $this->db->where('status', 1);
       
      
        $querys = $this->db->get();
 // print_r($query);die;
 return $querys->num_rows();
}
    public function mabers($ComData){
    $this->db->insert('mabers',$ComData);  
    $statmber_id = $this->db->insert_id();
       return $statmber_id;
}
public  function satemberimge($smim,$smm_id){
   $this->db->where('id',$smm_id);
             $this->db->set($smim);
              $query=$this->db->update('mabers');
             
           return $query;
   }
 public function satemebers($st){
   $this->db->select("*");
        $this->db->from('office');
        $this->db->where('ocid',$st);
        // $this->db->where('status', 1);
       
      
        $mb = $this->db->get();
 // print_r($st);die;
 return $mb->result();
}
public function offmbers($mab){
    
   $this->db->select("*");
        $this->db->from('office');
        $this->db->where('id',$mab);
        // $this->db->where('status', 1);
       
      
        $query = $this->db->get();
 // print_r($query);die;
return $query->row_array();
}
  public function getrecordCount($svm) {

        $this->db->select('count(*) as allcount');
        $this->db->from('mabers');
        $this->db->where('officid',$svm);
         $query = $this->db->get();
        $result = $query->result_array();
      
        return $result[0]['allcount'];
    }
    public  function viewmbers($vm){


  $this->db->select("*");
        $this->db->from('mabers');
        $this->db->where('officid',$vm);
        // $this->db->where('status', 1)

        // $this->db->limit($rowperpage, $rowno); 
       
      
        $query = $this->db->get();
       
 // print_r($query);die;
return $query->result();
}
public  function stateupmaber($upstatedata,$upsid){
$this->db->where('id',$upsid);
          $this->db->set($upstatedata);
           $query=$this->db->update('mabers');
          
        return $query;
}
public  function officeup($upofficedata,$upofid){
$this->db->where('id',$upofid);
          $this->db->set($upofficedata);
           $query=$this->db->update('office');
          
        return $query;
}
 public function nationalmaber($nom){
   $this->db->select("*");
        $this->db->from('nationalofiice');
        $this->db->where('socid',$nom);
        // $this->db->where('status', 1);
       
      
        $mb = $this->db->get();
 // print_r($st);die;
 return $mb->result();
}
public function nationalmambers($naom){
    
   $this->db->select("*");
        $this->db->from('nationalofiice');
        $this->db->where('id',$naom);
        // $this->db->where('status', 1);
       
      
        $query = $this->db->get();
 // print_r($query);die;
return $query->row_array();
}
    public function natioofmabers($ComData){
    $this->db->insert('nationalmabers',$ComData);  
    $nm_id = $this->db->insert_id(); 
       return $nm_id;
}
public  function nationlmimge($nims,$nms_id){
   $this->db->where('id',$nms_id);
             $this->db->set($nims);
              $query=$this->db->update('nationalmabers');
             
           return $query;
   }
    public  function nviewmbers($nvm){


  $this->db->select("*");
        $this->db->from('nationalmabers');
        $this->db->where('noffid',$nvm);
        // $this->db->where('status', 1)

        // $this->db->limit($rowperpage, $rowno); 
       
      
        $query = $this->db->get();
       
 // print_r($query);die;
return $query->result();
}
public function nationlupdatemebers($nsateid)
{
   $this->db->from('nationalmabers');
        $this->db->where('id',$nsateid);

        $query = $this->db->get();

    return $query->row();

}
public  function nationlupdateoficmebers($nupstatedata,$nupsid){
$this->db->where('id',$nupsid);
          $this->db->set($nupstatedata);
           $query=$this->db->update('nationalmabers');
          
        return $query;
}
public function nationaleditoffic($noficid)
{
      $this->db->select("*");
   $this->db->from('nationalofiice');
        $this->db->where('id',$noficid);

       $query = $this->db->get();
 // print_r($query);die;
return $query->row_array();

}
public  function nupdateofiiceinfo($nupofficedata,$nupofid){
$this->db->where('id',$nupofid);
          $this->db->set($nupofficedata);
           $query=$this->db->update('nationalofiice');
          
        return $query;
}
}
?>