<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Hospic extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library("session");
        $this->load->helper("url");
        $this->load->helper("form");
        $this->load->model("Community_model");
        $this->load->model("Donatio_model");
        $this->db->initialize();
        if (empty($this->session->userdata("cid"))) {
            redirect(base_url() . "Community");
        }
    }
    public function index()
    {
        $this->load->view("include/coheader.php");
        $this->load->view("community/Home.php");
        $this->load->view("include/cofooter.php");
    }
    public function Hospiceform()
    {
        $this->load->view("include/coheader.php");
        $this->load->view("community/hospiceform.php");
        $this->load->view("include/cofooter.php");
    }
    public function addhospic()
    {
        $id = $_SESSION["cid"];

        $hospicname = $_POST["hospicname"];
        $registrationnmber = $_POST["registrationnmber"];
        $registratioyear = $_POST["registratioyear"];
        $hospice = $_POST["hospice_desc"];
        $facilities = $_POST["facilities"];
        $note = $_POST["note"];
        $room = $_POST["room"];
        $pricefromhospic = $_POST["pricefromhospic"];
        $pricetohospic = $_POST["pricetohospic"];
        $hospicelectricity = $_POST["hospicelectricity"];
        $country = $_POST["country"];
        $state = $_POST["state"];
        $district = $_POST["district"];
        $city = $_POST["city"];
        $pincode = $_POST["pincode"];
        $address = $_POST["address"];
        $landmark = $_POST["landmark"];
        $mobile = json_encode($_POST["mobile"]);
        $landline = json_encode($_POST["landline"]);
        $hemail = json_encode($_POST["hemail"]);
        $facebook = $_POST["facebook"];
        $instagram = $_POST["instagram"];
        $slug =
            preg_replace("/[^A-Za-z0-9-]+/", "-", $hospicname) . "-" . uniqid();
        $userData = [
            "hid " => $id,
            "hopicuniqid" => $slug,
            "hospicname" => $hospicname,
            "registrationnmber" => $registrationnmber,
            "	registratioyear" => $registratioyear,
            "hospice_desc" => $hospice,
            "facilities" => $facilities,
            "note" => $note,
            "room" => $room,
            "pricefromhospic" => $pricefromhospic,
            "pricetohospic" => $pricetohospic,
            "hospicelectricity" => $hospicelectricity,
            "country" => $country,
            "state" => $state,
            "district" => $district,
            "city" => $city,
            "	pincode" => $pincode,
            "address" => $address,
            "landmark" => $landmark,
            "mobile" => $mobile,
            "landline" => $landline,
            "hemail" => $hemail,
            "facebook" => $facebook,
            "instagram" => $instagram,
        ];
        $data = $this->Community_model->hospic($userData);
        if ($data) {
            $hospicimage = "";
            $ga = "assets/hospic/hospicimage/";
            if (!empty($_FILES["image"]["name"])) {
                $config["upload_path"] = "assets/hospic/hospicimage/"; // path where we have to store
                $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
                $config["file_name"] = $data;
                //Load upload library and initialize configuration
                $this->load->library("upload", $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload("image")) {
                    $uploadData = $this->upload->data();
                    $se = $uploadData["file_name"];
                    $hospicimage = $ga .= $se . ""; // file name
                } else {
                    $hospicimage = "assets/usercover/rathore.png";
                }
            }
            $upb = ["image" => $hospicimage];
            $data = $this->Community_model->hospicimage($upb, $data);
            if ($data) {
                $data = ["success" => 1];
            }
        } else {
            $data = ["error" => 0];
        }

        echo json_encode($data);
    }

    public function dasbored()
    {
        $ids = $_SESSION["cid"];

        $result["data"] = $this->Community_model->getdetails($ids);

        $this->load->view("include/coheader.php");
        $this->load->view("community/listhospice.php", $result);
        $this->load->view("include/cofooter.php");
    }
    public function addmeber($id)
    {
        $result["hos"] = $this->Community_model->hospicdetillis($id);
        $this->load->view("include/coheader.php");
        $this->load->view("community/addmebers.php", $result);
        $this->load->view("include/cofooter.php");
    }
    public function adddonation($id)
    {
        $result["donation"] = $this->Community_model->hospicdetillis($id);
        $this->load->view("include/coheader.php");
        $this->load->view("community/adddonation.php", $result);
        $this->load->view("include/cofooter.php");
    }
    public function hospicaddmber()
    {
        $id = $_SESSION["cid"];
        $hospicid = $_POST["hospicid"];
        $hospicrag = $_POST["hospicrag"];
        $hospicuniq = $_POST["hospicuniq"];
        $carepost = $_POST["carepost"];
        $carename = $_POST["carename"];
        $caregender = $_POST["caregender"];
        $caremobile = $_POST["caremobile"];
        $caremail = $_POST["caremail"];
        $carefb = $_POST["carefb"];
        $careinsta = $_POST["careinsta"];
        $carewhatsapp = $_POST["carewhatsapp"];

        $ComData = [
            "hmid " => $id,
            "hospicid" => $hospicid,
            "hospicuniq" => $hospicuniq,
            "carepost" => $carepost,
            "carename" => $carename,
            "caregender" => $caregender,
            "caremobile" => $caremobile,
            "caremail" => $caremail,
            "carefb" => $carefb,
            "careinsta" => $careinsta,
            "carewhatsapp" => $carewhatsapp,
            "rgnumber" => $hospicrag,
        ];
        $data = $this->Community_model->hospicmaber($ComData);
        if ($data) {
            $proimage = "";
            $proimge = "assets/hospic/communitymember/";
            if (!empty($_FILES["careimage"]["name"])) {
                $config["upload_path"] = "assets/hospic/communitymember/"; // path where we have to store
                $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
                $config["file_name"] = $data;
                //Load upload library and initialize configuration
                $this->load->library("upload", $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload("careimage")) {
                    echo $this->upload->display_errors(); 
                 // file name
                } else {
                    $uploadData = $this->upload->data();
                    $config['image_library'] = 'gd2';  
                    $config['source_image'] = './assets/hospic/communitymember/'.$uploadData["file_name"];  
                    $config['create_thumb'] = FALSE;  
                    $config['maintain_ratio'] = FALSE;  
                    $config['quality'] = '100%';  
                    $config['width'] = 400;  
                    $config['height'] = 400;  
                    $config['new_image'] = './assets/hospic/communitymember/'.$uploadData["file_name"];  
                    $this->load->library('image_lib', $config);  
                    $this->image_lib->resize();
                    $proimg = $uploadData["file_name"];
                    $proimage = $proimge .= $proimg . "";
                }
            }
            else {
               if($caregender == "male"){
                $proimage="assets/images/man.png";
               }
               elseif($caregender == "female"){
                $proimage="assets/images/woman.png";
               }
               elseif($caregender == "youth"){
                $proimage="assets/images/youth.png";
               }
            }
            $mabimage = ["careimage" => $proimage];
            $data = $this->Community_model->hospicmaberimage($mabimage, $data);
            if ($data) {
                $data = ["success" => 1];
            }

            // $this->session->set_flashdata('true', 'sussfully insert');
        } else {
            $data = ["error" => 0];
            // $this->session->set_flashdata('error', "check one time");
        }
        echo json_encode($data);
    }
    public function updatehospic($hospic)
    {
        $result["hodata"] = $this->Community_model->hospicupdate($hospic);
        $result["hodga"] = $this->Community_model->hospicgarrly($hospic);
        $result["hmb"] = $this->Community_model->hospimeber($hospic);
        $this->load->view("include/coheader.php");
        $this->load->view("community/infohospic.php", $result);
        $this->load->view("include/cofooter.php");
    }
    public function addgrallys()
    {
        $id = $_SESSION["cid"];
        $rgid = $_POST["rgid"];
        $rgnumbers = $_POST["rgnumber"];
        $rguniq = $_POST["rguniq"];

        $garData = [
            "hid " => $rgid,
            "hgid" => $id,
            "hguniqid" => $rguniq,
            "rgnumber" => $rgnumbers,
        ];
        $data = $this->Community_model->imgdata($garData);
        if ($data) {
            $hospicgarlly = "";
            $garlly = "assets/hospic/hospicgarllay/";
            if (!empty($_FILES["garllay"]["name"])) {
                $config["upload_path"] = "assets/hospic/hospicgarllay/"; // path where we have to store
                $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
                $config["file_name"] = $data;
                //Load upload library and initialize configuration
                $this->load->library("upload", $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload("garllay")) {
                    $uploadData = $this->upload->data();
                    $gar = $uploadData["file_name"];
                    $hospicgarlly = $garlly .= $gar . ""; // file name
                } else {
                    $hospicgarlly = "assets/usercover/rathore.png";
                }
            }

            $gup = ["images" => $hospicgarlly];
            $data = $this->Community_model->upgarllyimage($gup, $data);
            if ($data) {
                $data = ["success" => 1];
            }
            // $this->session->set_flashdata('true', 'sussfully insert');
        } else {
            $data = ["error" => 0];
            // $this->session->set_flashdata('error', "check one time");
        }
        echo json_encode($data);
    }
    public function editgr($userid)
    {
        $data = $this->Community_model->edgrs($userid);
        echo json_encode($data);
    }
    public function hosupmber($huserid)
    {
        $data = $this->Community_model->hosupmber($huserid);
        echo json_encode($data);
    }
    public function updateimagess()
    {
        $ueid = $_POST["ueid"];
        $hospicupgarlly = "";
        $upgarlly = "assets/hospic/hospicgarllay/";
        if (!empty($_FILES["ueics"]["name"])) {
            $config["overwrite"] = true;
            $config["upload_path"] = "assets/hospic/hospicgarllay/"; // path where we have to store
            $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
            $config["file_name"] = $ueid;
            //Load upload library and initialize configuration
            $this->load->library("upload", $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("ueics")) {
                $uploadData = $this->upload->data();
                $upgar = $uploadData["file_name"];
                $hospicupgarlly = $upgarlly .= $upgar . ""; // file name
                // file name
            } else {
                $hospicupgarlly = "assets/usercover/rathore.png";
            }
        } else {
            $hospicupgarlly = $_POST["uiges"];
        }
        $gedata = ["images" => $hospicupgarlly];

        $data = $this->Community_model->geupdata($gedata, $ueid);
        if ($data) {
            $data = ["success" => 1];
        } else {
            $data = ["error" => 0];
        }
        echo json_encode($data);
    }
    public function updatehospice()
    {
        $ufid = $_POST["uhospicid"];
        $upname = $_POST["upname"];
        $registrationupnmber = $_POST["registrationupnmber"];
        $registratioupyear = $_POST["registratioupyear"];
        $uphospice = $_POST["uphospice_desc"];
        $upfacilities = $_POST["upfacilities"];
        $upnote = $_POST["upnote"];
        $uproom = $_POST["uproom"];
        $uppricefromhospic = $_POST["uppricefromhospic"];
        $uppricetohospic = $_POST["uppricetohospic"];
        $uphospicelectricity = $_POST["uphospicelectricity"];
        $upmobile = json_encode($_POST["upmobile"]);
        $uplandline = json_encode($_POST["uplandline"]);
        $uphemail = json_encode($_POST["uphemail"]);
        $upfacebook = $_POST["upfacebook"];
        $upinstagram = $_POST["upinstagram"];
        $uphospicimage = "";
        $upga = "assets/hospic/hospicimage/";
        if (!empty($_FILES["upnewimage"]["name"])) {
            $config["overwrite"] = true;
            $config["upload_path"] = "assets/hospic/hospicimage/"; // path where we have to store
            $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
            $config["file_name"] = $ufid;
            //Load upload library and initialize configuration
            $this->load->library("upload", $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("upnewimage")) {
                $uploadData = $this->upload->data();
                $upse = $uploadData["file_name"];
                $uphospicimage = $upga .= $upse . ""; // file name
            } else {
                $uphospicimage = "assets/usercover/rathore.png";
            }
        } else {
            $uphospicimage = $_POST["upimage"];
        }

        $userData = [
            "hospicname" => $upname,
            "registrationnmber" => $registrationupnmber,
            "registratioyear" => $registratioupyear,
            "hospice_desc" => $uphospice,
            "facilities" => $upfacilities,
            "note" => $upnote,
            "room" => $uproom,
            "pricefromhospic" => $uppricefromhospic,
            "pricetohospic" => $uppricetohospic,
            "hospicelectricity" => $uphospicelectricity,
            "mobile" => $upmobile,
            "landline" => $uplandline,
            "hemail" => $uphemail,
            "facebook" => $upfacebook,
            "instagram" => $upinstagram,
            "image" => $uphospicimage,
        ];
        $datanew = $this->Community_model->updathospice($userData, $ufid);
        if ($datanew) {
            $data = ["success" => 1];
        } else {
            $data = ["error" => 0];
        }

        echo json_encode($data);
    }

    public function updatemberinfo()
    {
        $mid = $_POST["mid"];
        $upcarepost = $_POST["upcarepost"];
        $upcarename = $_POST["upcarename"];
        $upcaregender = $_POST["upcaregender"];
        $upcaremobile = $_POST["upcaremobile"];
        $upcaremail = $_POST["upcaremail"];
        $upcarefb = $_POST["upcarefb"];
        $upcareinsta = $_POST["upcareinsta"];
        $upcarewhatsapp = $_POST["upcarewhatsapp"];

        $upproimage = "";
        $upproimge = "assets/hospic/communitymember/";
        if (!empty($_FILES["upcareimage"]["name"])) {
            $config["overwrite"] = true;
            $config["upload_path"] = "assets/hospic/communitymember/"; // path where we have to store
            $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
            $config["file_name"] = $mid;
            //Load upload library and initialize configuration
            $this->load->library("upload", $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload("upcareimage")) {
                echo $this->upload->display_errors();  // file name
            } else {
                $uploadData = $this->upload->data();
                $config['image_library'] = 'gd2';  
                $config['source_image'] = './assets/hospic/communitymember/'.$uploadData["file_name"];  
                $config['create_thumb'] = FALSE;  
                $config['maintain_ratio'] = FALSE;  
                $config['quality'] = '100%';  
                $config['width'] = 400;  
                $config['height'] = 400;  
                $config['new_image'] = './assets/hospic/communitymember/'.$uploadData["file_name"];  
                $this->load->library('image_lib', $config);  
                $this->image_lib->resize();
                $upproimg = $uploadData["file_name"];
                $upproimage = $upproimge .= $upproimg . "";
            }
        } else {
            $upproimage = $_POST["mimgup"];
        }

        $upComData = [
            "carepost" => $upcarepost,
            "carename" => $upcarename,
            "caregender" => $upcaregender,
            "caremobile" => $upcaremobile,
            "caremail" => $upcaremail,
            "carefb" => $upcarefb,
            "careinsta" => $upcareinsta,
            "carewhatsapp" => $upcarewhatsapp,
            "careimage" => $upproimage,
        ];
        $data = $this->Community_model->hospicupmaber($upComData, $mid);
        if ($data) {
            $data = ["success" => 1];
            // $this->session->set_flashdata('true', 'sussfully insert');
        } else {
            $data = ["error" => 0];
            // $this->session->set_flashdata('error', "check one time");
        }
        echo json_encode($data);
    }
public function hospicadddonation(){
    $id = $_SESSION["cid"];
    $donationid = $_POST["donationid"];
    $donername = $_POST["donername"];
    $donation = $_POST["donation"];
    $donationtype = $_POST["donationtype"];
    $date = $_POST["date"];
    $mobile = $_POST["mobile"];
    $Address = $_POST["Address"];
    $upComData = [
        "hospicid" => $donationid,
        "loginid" => $id ,
        "name"=>$donername,
        "dontion_type" => $donationtype,
        "dontion" => $donation,
        "date"=> $date,
        "mobile" => $mobile,
        "address" => $Address,
      
    ];
    $data = $this->Community_model->hospicdonation($upComData);
    if ($data) {
        $data = ["success" => 1];
        // $this->session->set_flashdata('true', 'sussfully insert');
    } else {
        $data = ["error" => 0];
        // $this->session->set_flashdata('error', "check one time");
    }
    echo json_encode($data);

}
public function dontion () {
    $fetch_data = $this->Donatio_model->make_datatables();  
    $data = array();  
    foreach($fetch_data as $row)  
    {  
         $sub_array = array();  
         $sub_array[] = $row->name;   
         $sub_array[] = $row->dontion_type;  
         $sub_array[] = $row->dontion;  
         $sub_array[] = $row->mobile;  
         $sub_array[] = $row->address;  
         
         $data[] = $sub_array;  
    }  
    $output = array(  
         "draw"                    =>     intval($_POST["draw"]),  
         "recordsTotal"          =>      $this->Donatio_model->get_all_data(),  
         "recordsFiltered"     =>     $this->Donatio_model->get_filtered_data(),  
         "data"                    =>     $data  
    );  
    echo json_encode($output); 
}
    public function logout()
    {
        $this->session->unset_userdata("cid");
        $this->session->sess_destroy();
        redirect("Community");
    }
}
?>