<?php

class Donatio_model extends CI_Model{
    public function __construct() 
    {
          parent::__construct(); 
          $this->load->database();
          
    }

    var $table = "donation";  
    var $select_column = array("id", "name", "dontion_type", "dontion","mobile","address");  
    var $order_column = array(null, "name", null, null,"mobile",null );  
 var $hospicids =1;
    function make_query()  
    {  
         $this->db->select($this->select_column);  
         $this->db->from($this->table);  
         $this->db->or_like('hospicid',$this->hospicids);
        
         if(isset($_POST["search"]["value"]))  
         {  
              $this->db->like("name", $_POST["search"]["value"]);  
              $this->db->or_like("mobile", $_POST["search"]["value"]);  
         }  
         if(isset($_POST["order"]))  
         {  
              $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
         }  
         else  
         {  
              $this->db->order_by('id', 'DESC');  
         }  
    }  
    function make_datatables(){  
         $this->make_query();  
         if($_POST["length"] != -1)  
         {  
              $this->db->limit($_POST['length'], $_POST['start']);  
         }  
         $query = $this->db->get();  
         return $query->result();  
    }  
    function get_filtered_data(){  
         $this->make_query();  
         $query = $this->db->get();  
         return $query->num_rows();  
    }       
    function get_all_data()  
    {  
         $this->db->select("*");  
         $this->db->from($this->table); 
         $this->db->or_like('hospicid',$this->hospicids);
    
         return $this->db->count_all_results();  
    } 
    public function officedetilles($officeid){
     $this->db->select("*");
     $this->db->from('nationalofiice');
          $this->db->where('id',$officeid);
  
         $query = $this->db->get();
   // print_r($query);die;
  return $query->row_array();

    }
    public function nmaledetail($officeid)
{
   $this->db->select("*");
        $this->db->from('nationalmabers');
        $this->db->where('noffid', $officeid);
        $this->db->where('nmbergender', 'male');
        // $this->db->where('status', 1);
       
      
        $query = $this->db->get();
       
 // print_r($query);die;
 return $query->result();
}
public function nfmaledetail($nf)
{
   $this->db->select("*");
        $this->db->from('nationalmabers');
        $this->db->where('noffid', $nf);
        $this->db->where('nmbergender', 'female');
        // $this->db->where('status', 1);
       
      
        $query = $this->db->get();
       
 // print_r($query);die;
 return $query->result();
}
public function nyouthdetail($nyx)
{
   $this->db->select("*");
        $this->db->from('nationalmabers');
        $this->db->where('noffid', $nyx);
        $this->db->where('nmbergender', 'youth');
        // $this->db->where('status', 1);
       
      
        $query = $this->db->get();
       
 // print_r($query);die;
 return $query->result();
}
public function activemale($profileid,$hide){
     $this->db->where("id", $profileid);
     $this->db->set("satats", $hide);
     $query = $this->db->update("nationalmabers");

     return $query;
}
public function activeoffice($officeid,$hide){
     $this->db->where("id", $officeid);
     $this->db->set("status", $hide);
     $query = $this->db->update("nationalofiice");

     return $query;
}
  }
?>