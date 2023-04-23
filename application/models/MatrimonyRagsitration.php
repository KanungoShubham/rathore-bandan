<?php

class MatrimonyRagsitration extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function matrimonyuserinsert($userData)
    {
        $n = $this->db->insert("matrimonyuser", $userData);

        return $n;
    }
    public function prematch()
    {
        $this->db->select("*");
        $this->db->from("matrimonyuser");
        $this->db->where("gender", "Female");
        // $this->db->where('status', 1);

        $query = $this->db->get();
        // print_r($query);die;
        return $query->result();
    }
    public function fmatch()
    {
        $this->db->select("*");
        $this->db->from("matrimonyuser");
        $this->db->where("gender", "Male");
        // $this->db->where('status', 1);

        $query = $this->db->get();
        // print_r($query);die;
        return $query->result();
    }
    public function getdetails($ids)
    {
        $this->db->select("*");
        $this->db->from("user");
        $this->db->where("id", $ids);
        // $this->db->where('status', 1);

        $query = $this->db->get();
        // print_r($query);die;
        return $query->row_array();
    }
    public function getinfo($ids)
    {
        $this->db->select("*");
        $this->db->from("matrimonyuser");
        $this->db->where("user_id", $ids);
        // $this->db->where('status', 1);

        $query = $this->db->get();

        // print_r($query);die;
        return $query->result();
    }

    public function getpesronlinfo($id)
    {
        $this->db->select("*");
        $this->db->from("matrimonyuser");
        $this->db->where("id", $id);
        // $this->db->where('status', 1);

        $query = $this->db->get();

        // print_r($query);die;
        return $query->row_array();
    }

    public function selectdet($id)
    {
        $this->db->select("*");
        $this->db->from("educationinformation");
        $this->db->where(["rid" => $id]);

        // $this->db->where('status', 1);

        $query = $this->db->get();

        // print_r($query);die;
        return $query->row_array();
    }
    public function selectdiser($id)
    {
        $this->db->select("*");
        $this->db->from("desiredpartner");
        $this->db->where(["rid" => $id]);

        // $this->db->where('status', 1);

        $query = $this->db->get();

        // print_r($query);die;
        return $query->row_array();
    }

    // public  function educationinformation($userData){

    //   $n= $this->db->insert('educationinformation',$userData);

    //       return $n;

    //         }

    public function educationupdate($userData, $idu)
    {
        $this->db->where("rid", $idu);
        $q = $this->db->get("educationinformation");

        if ($q->num_rows() > 0) {
            $this->db->where("rid", $idu);
            $this->db->update("educationinformation", $userData);
        } else {
            $this->db->set("rid", $idu);
            $this->db->insert("educationinformation", $userData);
        }

        // $this->db->where('rid',$idu);
        //        $this->db->set($userData);
        //         $query=$this->db->update('educationinformation');

        return $q;
    }

    public function emfech($rid)
    {
        $this->db->select("*");

        $this->db->from("educationinformation");
        $this->db->where("rid", $rid);

        // $this->db->where('date',$date);

        // $this->db->where('status', 1);

        $querys = $this->db->get();
        // print_r($query);die;
        return $querys->num_rows();
    }
    public function diseradd($userData, $dir)
    {
        $this->db->where("rid", $dir);
        $q = $this->db->get("desiredpartner");

        if ($q->num_rows() > 0) {
            $this->db->where("rid", $dir);
            $this->db->update("desiredpartner", $userData);
        } else {
            $this->db->set("rid", $dir);
            $this->db->insert("desiredpartner", $userData);
        }

        // $this->db->where('rid',$idu);
        //        $this->db->set($userData);
        //         $query=$this->db->update('educationinformation');

        return $q;
    }
    public function gadd($gdata)
    {
        $this->db->insert("metromonyusergallery", $gdata);
        $gallerys = $this->db->insert_id();
        return $gallerys;
    }
    public function garllyesimages($gims, $gaid)
    {
        $this->db->where("id", $gaid);
        $this->db->set($gims);
        $query = $this->db->update("metromonyusergallery");

        return $query;
    }

    public function selectimage($id)
    {
        $this->db->select("*");

        $this->db->from("metromonyusergallery");
        $this->db->where("rid", $id);
        $this->db->limit(6);

        // $this->db->where('date',$date);

        // $this->db->where('status', 1);

        $querys = $this->db->get();
        // print_r($query);die;
        return $querys;
    }

    public function edgrs($userid)
    {
        $this->db->from("metromonyusergallery");
        $this->db->where("id", $userid);

        $query = $this->db->get();

        return $query->row();
    }
    public function geupdata($gedata, $ueid)
    {
        $this->db->where("id", $ueid);
        $this->db->set($gedata);
        $query = $this->db->update("metromonyusergallery");

        return $query;
    }
    public function editprofiles($pid)
    {
        $this->db->from(" matrimonyuser");
        $this->db->where("id", $pid);

        $query = $this->db->get();

        return $query->row();
    }
    public function gprofiledata($pgedata, $pid)
    {
        $this->db->where("id", $pid);
        $this->db->set($pgedata);
        $query = $this->db->update("matrimonyuser");
        return $query;
    }
    public function gcoverdata($covergedata, $cpid)
    {
        $this->db->where("id", $cpid);
        $this->db->set($covergedata);
        $query = $this->db->update("matrimonyuser");
        return $query;
    }
    public function familyinsert($fuserData)
    {
        $this->db->insert("matrimonyfamilyinfo", $fuserData);
        $nid = $this->db->insert_id();
        return $nid;
    }
    public function famliyimages($nims, $nms_id)
    {
        $this->db->where("id", $nms_id);
        $this->db->set($nims);
        $query = $this->db->update("matrimonyfamilyinfo");

        return $query;
    }
    public function selectfdtils($id)
    {
        $this->db->select("*");
        $this->db->from("matrimonyfamilyinfo");
        $this->db->where(["frid" => $id]);

        // $this->db->where('status', 1);

        $query = $this->db->get();

        // print_r($query);die;
        return $query->row_array();
    }
    public function familyupdate($fuserDataupdate, $ufid)
    {
        $this->db->where("frid", $ufid);
        $this->db->set($fuserDataupdate);
        $query = $this->db->update("matrimonyfamilyinfo");

        return $query;
    }
    public function matrimonyuserupdatw($updatenewuserData, $upabuot)
    {
        $this->db->where("id", $upabuot);
        $this->db->set($updatenewuserData);
        $query = $this->db->update("matrimonyuser");

        return $query;
    }

    public function liked_profiles_id($current_user)
    {
        $this->db->select("liked_profiles_id");
        $this->db->where("id", $current_user);
        $this->db->from("user");
        $query = $this->db->get();
        return $query->result();
    }
    public function update_user_like_data($id, $data)
    {
        $this->db->where("id", $id);
        // $this->db->set($fuse);
        $query = $this->db->update("user", [
            "liked_profiles_id" => json_encode($data),
        ]);
        return $query;
    }
    public function update_user_like($sid, $bID)
    {
        $this->db->where("id", $bID);
        // $this->db->set($fuse);
        $query = $this->db->update("matrimonyuser", [
            "like_id" => json_encode($sid),
        ]);
        return $query;
    }
    function get_liked_profiles($liked_data)
    {
        $this->db->select("*");
        $this->db->where_in("id", $liked_data);

        $this->db->order_by("id", "ASC");
        $this->db->from("matrimonyuser");
        $query = $this->db->get();
        return $query->result();
    }
    public function proupdate($prof, $epid)
    {
        $this->db->where("id", $epid);
        $this->db->set($prof);
        $query = $this->db->update("user");
        return $query;
    }
    public function contactupdate($contactid, $hide)
    {
        $this->db->where("frid", $contactid);
        $this->db->set("hide", $hide);
        $query = $this->db->update("matrimonyfamilyinfo");
        return $query;
    }
    public function uncontactupdate($uncontactid, $unhide)
    {
        $this->db->where("frid", $uncontactid);
        $this->db->set("hide", $unhide);
        $query = $this->db->update("matrimonyfamilyinfo");
        return $query;
    }
    public function addbusiness($business)
    {
        $this->db->insert("business_information", $business);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    public function updatebuisennimage($upb, $insert_id)
    {
        $this->db->where("id", $insert_id);
        $this->db->set($upb);
        $query = $this->db->update("business_information");
        return $query;
    }
    public function buinessalredy($logid)
    {
        $this->db->select("*");

        $this->db->from("business_information");
        $this->db->where("logid", $logid);

        // $this->db->where('date',$date);

        // $this->db->where('status', 1);

        $querys = $this->db->get();
        // print_r($query);die;
        return $querys->num_rows();
    }
    public function getbusinnes($ids)
    {
        $this->db->select("*");
        $this->db->from("business_information");
        $this->db->where("logid", $ids);
        // $this->db->where('status', 1);

        $query = $this->db->get();
        // print_r($query);die;
        return $query->row_array();
    }
    public function upbuinessinfo($upbusiness, $bunissid)
    {
        $this->db->where("id", $bunissid);
        $this->db->set($upbusiness);
        $query = $this->db->update("business_information");
        return $query;
    }
    public function businnesgarrlly($binoid)
    {
        $this->db->select("*");
        $this->db->from("business_gallery");
        $this->db->where("business_id", $binoid);
        // $this->db->where('status', 1);

        $query = $this->db->get();
        // print_r($query);die;
        return $query;
    }
    public function businessgarlly($businessgarlly)
    {
        $this->db->insert("business_gallery", $businessgarlly);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    public function buimggarlley($bupimg, $nindi)
    {
        $this->db->where("id", $nindi);
        $this->db->set($bupimg);
        $query = $this->db->update("business_gallery");
        return $query;
    }
    public function buimgesgarlley($buuserid)
    {
        $this->db->from("business_gallery");
        $this->db->where("id", $buuserid);

        $query = $this->db->get();

        return $query->row();
    }
    public function gimages($buidata, $bid)
    {
        $this->db->where("id", $bid);
        $this->db->set($buidata);
        $query = $this->db->update("business_gallery");

        return $query;
    }
    public function addevent($event)
    {
        $this->db->insert("event", $event);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    public function updateeventimage($evb, $evid)
    {
        $this->db->where("id", $evid);
        $this->db->set($evb);
        $query = $this->db->update("event");

        return $query;
    }
    public function getevent($evlogid)
    {
        $this->db->select("*");
        $this->db->from("event");
        $this->db->where("logid", $evlogid);
        // $this->db->where('status', 1);

        $query = $this->db->get();
        // print_r($query);die;
        return $query->result();
    }
    public function geteventinfo($upevid)
    {
        $this->db->select("*");
        $this->db->from("event");
        $this->db->where("id", $upevid);
        // $this->db->where('status', 1);

        $query = $this->db->get();
        // print_r($query);die;
        return $query->row_array();
    }
    public function upeventinfo($upevent, $eventid)
    {
        $this->db->where("id", $eventid);
        $this->db->set($upevent);
        $query = $this->db->update("event");
        return $query;
    }
    public function addbirthday($birthday)
    {
        $this->db->insert("birthday", $birthday);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    public function updatbimage($bvb, $bvid)
    {
        $this->db->where("id", $bvid);
        $this->db->set($bvb);
        $query = $this->db->update("birthday");

        return $query;
    }
    public function birthdaylist($bdayid)
    {
        $this->db->select("*");
        $this->db->from("birthday");
        $this->db->where("logid", $bdayid);
        // $this->db->where('status', 1);

        $query = $this->db->get();
        // print_r($query);die;
        return $query->result();
    }
    public function getbirthday($ubrid)
    {
        $this->db->select("*");
        $this->db->from("birthday");
        $this->db->where("id", $ubrid);
        // $this->db->where('status', 1);

        $query = $this->db->get();
        // print_r($query);die;
        return $query->row_array();
    }
    public function upbdayinfo($upbirthday, $bdayid)
    {
        $this->db->where("id", $bdayid);
        $this->db->set($upbirthday);
        $query = $this->db->update("birthday");
        return $query;
    }
    public function addcondolence($condolence)
    {
        $this->db->insert("condolence", $condolence);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    public function updatdodimage($dvb, $dvid)
    {
        $this->db->where("id", $dvid);
        $this->db->set($dvb);
        $query = $this->db->update("condolence");

        return $query;
    }
    public function condolencelist($ddayid)
    {
        $this->db->select("*");
        $this->db->from("condolence");
        $this->db->where("logid", $ddayid);
        // $this->db->where('status', 1);

        $query = $this->db->get();
        // print_r($query);die;
        return $query->result();
    }
    public function getcondolence($ucrid)
    {
        $this->db->select("*");
        $this->db->from("condolence");
        $this->db->where("id", $ucrid);
        // $this->db->where('status', 1);

        $query = $this->db->get();
        // print_r($query);die;
        return $query->row_array();
    }
    public function upcondolencinfo($upcondolenc, $ddayid)
    {
        $this->db->where("id", $ddayid);
        $this->db->set($upcondolenc);
        $query = $this->db->update("condolence");
        return $query;
    }
    public function addblog($blog)
    {
        $this->db->insert("blog", $blog);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    public function updateblogimage($bvb, $bdata)
    {
        $this->db->where("id", $bdata);
        $this->db->set($bvb);
        $query = $this->db->update("blog");

        return $query;
    }
}
?>
