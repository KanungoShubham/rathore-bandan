<?php

class Directoryinfo extends CI_Model{

public function __construct() 
{
parent::__construct(); 
$this->load->database();

}
public function hospicinfo()
{
$this->db->select("*");
$this->db->from('hospice');

// $this->db->where('status', 1);


$query = $this->db->get();

// print_r($query);die;
return $query->result();
}
public function hospicedetail($hospicid)
{
$this->db->select("*");
$this->db->from('hospice');
$this->db->where('id', $hospicid);
// $this->db->where('status', 1);


$query = $this->db->get();

// print_r($query);die;
return $query->row_array();
}
public function mandetail($hoid)
{
$this->db->select("*");
$this->db->from('hospicemeber');
$this->db->where('hospicid', $hoid);
$this->db->where('caregender', 'male');
// $this->db->where('status', 1);


$query = $this->db->get();

// print_r($query);die;
return $query->result();
}
public function womandetail($wo)
{
$this->db->select("*");
$this->db->from('hospicemeber');
$this->db->where('hospicid', $wo);
$this->db->where('caregender', 'female');
// $this->db->where('status', 1);


$query = $this->db->get();

// print_r($query);die;
return $query->result();
}
public function youthdetail($yo)
{
$this->db->select("*");
$this->db->from('hospicemeber');
$this->db->where('hospicid', $yo);
$this->db->where('caregender', 'youth');
// $this->db->where('status', 1);


$query = $this->db->get();

// print_r($query);die;
return $query->result();
}
public function dontiondetail($don)
{
$this->db->select("*");
$this->db->from('donation');
$this->db->where('hospicid', $don);

// $this->db->where('status', 1);


$query = $this->db->get();

// print_r($query);die;
return $query->result();
}
public function gallerydetail($ga)
{
$this->db->select("*");
$this->db->from('hospicegarllay');
$this->db->where('hid', $ga);

// $this->db->where('status', 1);


$query = $this->db->get();

// print_r($query);die;
return $query->result();
}
public function Statelevelinfo($search="")
{
$this->db->select("*");
$this->db->from('office');

// $this->db->where('status', 1);
if($search != ''){
$this->db->like('state', $search);
$this->db->or_like('all', $search);


}


$query = $this->db->get();

// print_r($query);die;
return $query->result();
}
public function getrecordCount($search = '') {

$this->db->select('count(*) as allcount');
$this->db->from('office');


if($search != ''){
$this->db->like('state', $search);
$this->db->or_like('all', $search);


}

$query = $this->db->get();
$result = $query->result_array();

return $result[0]['allcount'];
}
public function statedetail($stle)
{
$this->db->select("*");
$this->db->from('office');
$this->db->where('id', $stle);
// $this->db->where('status', 1);


$query = $this->db->get();

// print_r($query);die;
return $query->row_array();
}
public function maledetail($male)
{
$this->db->select("*");
$this->db->from('mabers');
$this->db->where('officid', $male);
$this->db->where('mbergender', 'male');
// $this->db->where('status', 1);


$query = $this->db->get();

// print_r($query);die;
return $query->result();
}
public function femaledetail($fmale)
{
$this->db->select("*");
$this->db->from('mabers');
$this->db->where('officid', $fmale);
$this->db->where('mbergender', 'female');
// $this->db->where('status', 1);


$query = $this->db->get();

// print_r($query);die;
return $query->result();
}
public function syouthdetail($syo)
{
$this->db->select("*");
$this->db->from('mabers');
$this->db->where('officid', $syo);
$this->db->where('mbergender', 'youth');
// $this->db->where('status', 1);


$query = $this->db->get();

// print_r($query);die;
return $query->result();
}
public function Nationalinfo()
{
$this->db->select("*");
$this->db->from('nationalofiice');

// $this->db->where('status', 1);


$query = $this->db->get();

// print_r($query);die;
return $query->result();
}
public function nationaldetail($nat)
{
$this->db->select("*");
$this->db->from('nationalofiice');
$this->db->where('id', $nat);
// $this->db->where('status', 1);


$query = $this->db->get();

// print_r($query);die;
return $query->row_array();
}
public function nmaledetail($nmale)
{
$this->db->select("*");
$this->db->from('nationalmabers');
$this->db->where('noffid', $nmale);
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
//marrgie buru//
public function Viewgroominfo($frist,$second)
{
$this->db->select("*");
$this->db->from('matrimonyuser');
$this->db->where('gender', 'Male');
// $this->db->where('status', '1');
if(!empty($frist) && !empty($second)){
$this->db->group_start();
$this->db->where('age BETWEEN "'. $frist. '" AND "'. $second.'" ');
$this->db->group_end();
}
//  $this->db->like('age', $frist);
//  $this->db->or_like('age', $second);

$query = $this->db->get();

// print_r($query);die;
return $query->result();
}

public function Viewbrideinfo($newfrist,$newsecond)
{
$this->db->select("*");
$this->db->from('matrimonyuser');
$this->db->where('gender', 'Female');
$this->db->where('status', '1');

if(!empty($newfrist) && !empty($newsecond)){
$this->db->group_start();
$this->db->where('age BETWEEN "'. $newfrist. '" AND "'. $newsecond.'" ');
$this->db->group_end();
}

$query = $this->db->get();

// print_r($query);die;
return $query->result();
}
public function metroinfoinfo($id)
{
$this->db->select("*");
$this->db->from('matrimonyuser');
$this->db->where('id',$id);
// $this->db->where('status', 1);


$query = $this->db->get();

// print_r($query);die;
return  $query->row_array();

}
public function mertoddu($id)
{
$this->db->select("*");
$this->db->from('educationinformation');
$this->db->where(array('rid'=>$id)); 



// $this->db->where('status', 1);


$query = $this->db->get();

// print_r($query);die;
return  $query->row_array();

}
public function mertodiser($id)
{
$this->db->select("*");
$this->db->from('desiredpartner');
$this->db->where(array('rid'=>$id)); 



// $this->db->where('status', 1);


$query = $this->db->get();

// print_r($query);die;
return  $query->row_array();

}
public  function metroimage($id){


$this->db->select("*");

$this->db->from('metromonyusergallery');
$this->db->where('rid',$id);
   $this->db->limit(6);

// $this->db->where('date',$date);

// $this->db->where('status', 1);


$querys = $this->db->get();
// print_r($query);die;
return $querys;
}
public function metrofdtils($id)
{
$this->db->select("*");
$this->db->from('matrimonyfamilyinfo');
$this->db->where(array('frid'=>$id )); 



// $this->db->where('status', 1);


$query = $this->db->get();

// print_r($query);die;
return  $query->row_array();

}
public function Newsinfo()
{
$this->db->select("*");
$this->db->from('newpaperoffice');

// $this->db->where('status', 1);


$query = $this->db->get();

// print_r($query);die;
return $query->result();
}
public function newsdetail($news)
{
$this->db->select("*");
$this->db->from('newpaperoffice');
$this->db->where('id', $news);
// $this->db->where('status', 1);


$query = $this->db->get();

// print_r($query);die;
return $query->row_array();
}
public function maberdetail($mnews)
{
$this->db->select("*");
$this->db->from('newsmaber');
$this->db->where('newslogid', $mnews);

// $this->db->where('status', 1);


$query = $this->db->get();

// print_r($query);die;
return $query->result();
}
public function papernewdetail($newspe)
{
$this->db->select("*");
$this->db->from('newspaper');
$this->db->where('newsoffice_id', $newspe);

// $this->db->where('status', 1);


$query = $this->db->get();

//  print_r($query);die;
return $query->result();
}
public function socialinfo()
{
$this->db->select("*");
$this->db->from('social');

// $this->db->where('status', 1);


$query = $this->db->get();

// print_r($query);die;
return $query->result();
}
public function  socialdetail($social)
{
$this->db->select("*");
$this->db->from('social');
$this->db->where('id', $social);
// $this->db->where('status', 1);


$query = $this->db->get();

// print_r($query);die;
return $query->row_array();
}
public function soicalmaberdetail($soicalma)
{
$this->db->select("*");
$this->db->from('soicalmaber');
$this->db->where('socaiid', $soicalma);

// $this->db->where('status', 1);


$query = $this->db->get();

// print_r($query);die;
return $query->result();
}
public function brithdayinfo()
{

$this->db->select("*");
$this->db->from('birthday');

$this->db->where('DATE_FORMAT(dob,"%m-%d") >= DATE_FORMAT((NOW() - INTERVAL 7 DAY),"%m-%d")');
// $this->db->where('status', 1);


$query = $this->db->get();

// print_r($query);die;
return $query->result();
}
public function condolenceinfo()
{

$this->db->select("*");
$this->db->from('condolence');

$this->db->where('DATE_FORMAT(dod,"%m-%d") >= DATE_FORMAT((NOW() - INTERVAL 7 DAY),"%m-%d")');
// $this->db->where('status', 1);


$query = $this->db->get();

// print_r($query);die;
return $query->result();
}
public function directory()
{
$this->db->select("*");
$this->db->from('user');
// $this->db->where('status', 1);
$query = $this->db->get();
// print_r($query);die;
return $query->result();
}
public function event()
{
$this->db->select("*");
$this->db->from('event');
// $this->db->where('status', 1);
$query = $this->db->get();
// print_r($query);die;
return $query->result();
}
public function getblogdetails()
{
$this->db->select("*");
$this->db->from('blog');
$this->db->where('beru_show', 1);
$query = $this->db->get();

// print_r($query);die;
return $query->result();
}
}