<?php

class News_model extends CI_Model{

    public function __construct() 
    {
          parent::__construct(); 
          $this->load->database();
          $this->db->initialize();
    }
        public function newsaddoffice($userData){
    $this->db->insert('newpaperoffice',$userData); 
    $nm_id = $this->db->insert_id();  
       return $nm_id;
}
public  function imge($nims,$nms_id){
   $this->db->where('id',$nms_id);
             $this->db->set($nims);
              $query=$this->db->update('newpaperoffice');
             
           return $query;
   }
 public function newsoffice($nom){
   $this->db->select("*");
        $this->db->from('newpaperoffice');
        $this->db->where('nlogid',$nom);
        // $this->db->where('status', 1);
       
      
        $mb = $this->db->get();
 // print_r($st);die;
 return $mb->result();
}
public function newspapermambers($naom){
    
   $this->db->select("*");
        $this->db->from('newpaperoffice');
        $this->db->where('id',$naom);
        // $this->db->where('status', 1);
       
      
        $query = $this->db->get();
 // print_r($query);die;
return $query->row_array();
}
public function newpapereditoffice($noficid)
{
      $this->db->select("*");
   $this->db->from('newpaperoffice');
        $this->db->where('id',$noficid);

       $query = $this->db->get();
 // print_r($query);die;
return $query->row_array();

}
public  function newsupdateofiiceinfo($nupofficedata,$nupofid){
$this->db->where('id',$nupofid);
          $this->db->set($nupofficedata);
           $query=$this->db->update('newpaperoffice');
          
        return $query;
}
   public function newsmabers($ComData){
    $this->db->insert('newsmaber',$ComData);  
    $m_id = $this->db->insert_id();  
       return $m_id;
}
public  function mimge($nmimage,$m_id){
   $this->db->where('id',$m_id);
             $this->db->set($nmimage);
              $query=$this->db->update('newsmaber');
             
           return $query;
   }
    public  function vnewsmbers($nvm){
          $this->db->select("*");
        $this->db->from('newsmaber');
        $this->db->where('newslogid',$nvm);
        // $this->db->where('status', 1)

        // $this->db->limit($rowperpage, $rowno); 
       
      
        $query = $this->db->get();
       
 // print_r($query);die;
return $query->result();
}
public function newsupdatemebers($nsateid)
{
   $this->db->from('newsmaber');
        $this->db->where('id',$nsateid);

        $query = $this->db->get();

    return $query->row();

}
public  function newsupdateoficmebers($nupstatedata,$nupsid){
$this->db->where('id',$nupsid);
          $this->db->set($nupstatedata);
           $query=$this->db->update('newsmaber');
          
        return $query;
}
public function newgarlly($newsid)
{
        $this->db->select("*");
        $this->db->from('newspaper');
        $this->db->where('newsoffice_id',$newsid);
        // $this->db->where('status', 1);
       
      
        $query = $this->db->get();
 // print_r($query);die;
return $query;
}
public function addnewpaper($ComData){
   $this->db->insert('newspaper',$ComData);  
   $nid = $this->db->insert_id();  
      return $nid;
}
public  function newspaperimages($nwes,$nid){
   $this->db->where('id',$nid);
             $this->db->set($nwes);
              $query=$this->db->update('newspaper');
             
           return $query;
   }
  }
?>