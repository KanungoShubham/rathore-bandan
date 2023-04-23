<?php

class Social_model extends CI_Model{

    public function __construct() 
    {
          parent::__construct(); 
          $this->load->database();
          $this->db->initialize();
    }
        public function socialgroupe($userData){
    $offic=$this->db->insert('social',$userData);  
       return $offic;
}
 public function newsoffice($nom){
   $this->db->select("*");
        $this->db->from('social');
        $this->db->where('sollogid',$nom);
        // $this->db->where('status', 1);
       
      
        $mb = $this->db->get();
 // print_r($st);die;
 return $mb->result();
}
public function soicalmaber($naom){
    
   $this->db->select("*");
        $this->db->from('social');
        $this->db->where('id',$naom);
        // $this->db->where('status', 1);
       
      
        $query = $this->db->get();
 // print_r($query);die;
return $query->row_array();
}
public function newpapereditoffice($noficid)
{
      $this->db->select("*");
   $this->db->from('social');
        $this->db->where('id',$noficid);

       $query = $this->db->get();
 // print_r($query);die;
return $query->row_array();

}
public  function newsupdateofiiceinfo($nupofficedata,$nupofid){
$this->db->where('id',$nupofid);
          $this->db->set($nupofficedata);
           $query=$this->db->update('social');
          
        return $query;
}
   public function soicalmabers($ComData){
    $offics=$this->db->insert('soicalmaber',$ComData);  
       return $offics;
}
    public  function socialviewmamber($nvm){
          $this->db->select("*");
        $this->db->from('soicalmaber');
        $this->db->where('socaiid',$nvm);
        // $this->db->where('status', 1)

        // $this->db->limit($rowperpage, $rowno); 
       
      
        $query = $this->db->get();
       
 // print_r($query);die;
return $query->result();
}
public function newsupdatemebers($nsateid)
{
   $this->db->from('soicalmaber');
        $this->db->where('id',$nsateid);

        $query = $this->db->get();

    return $query->row();

}
public  function newsupdateoficmebers($nupstatedata,$nupsid){
$this->db->where('id',$nupsid);
          $this->db->set($nupstatedata);
           $query=$this->db->update('soicalmaber');
          
        return $query;
}
  }
?>