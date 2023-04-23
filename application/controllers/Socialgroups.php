<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Socialgroups extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library("session");
        $this->load->helper("url");
        $this->load->helper("form");
        $this->load->model("Social_model");
        $this->load->library("pagination");
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
    public function Socialgroupsforms()
    {
        $this->load->view("include/coheader.php");
        $this->load->view("community/Socialgroupsforms.php");
        $this->load->view("include/cofooter.php");
    }

    public function Socialgroupsoffice()
    {
        $nom = $_SESSION["cid"];
        $result["nodm"] = $this->Social_model->newsoffice($nom);
        $this->load->view("include/coheader.php");
        $this->load->view("community/socialoffice.php", $result);
        $this->load->view("include/cofooter.php");
    }
    public function soicaladdmambers($naom)
    {
        $result["natio"] = $this->Social_model->soicalmaber($naom);
        $this->load->view("include/coheader.php");
        $this->load->view("community/soicalmaberform.php", $result);
        $this->load->view("include/cofooter.php");
    }
    public function socialgroupadd()
    {
        $oid = $_SESSION["cid"];
        $socialname = $_POST["socialname"];
        $socialyear = $_POST["socialyear"];
        $socialdec = $_POST["socialdec"];
        $country = $_POST["country"];
        $state = $_POST["state"];
        $district = $_POST["district"];
        $city = $_POST["city"];
        $pincode = $_POST["pincode"];
        $address = $_POST["address"];
        $sociallandmark = $_POST["sociallandmark"];
        $officmobile = json_encode($_POST["officmobile"]);
        $officelandline = json_encode($_POST["officelandline"]);
        $officehemail = json_encode($_POST["officehemail"]);
        $socialfacebook = $_POST["socialfacebook"];
        $socialinstagram = $_POST["socialinstagram"];
        $socialslug =
            preg_replace("/[^A-Za-z0-9-]+/", "-", $socialname) . "-" . uniqid();

        $officeimages = "";
        $officega = "assets/social/socialgroup/";
        if (!empty($_FILES["socialimage"]["name"])) {
            $config["upload_path"] = "assets/social/socialgroup/"; // path where we have to store
            $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
            $config["file_name"] = time() . $_FILES["socialimage"]["name"];
            //Load upload library and initialize configuration
            $this->load->library("upload", $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("socialimage")) {
                $uploadData = $this->upload->data();
                $officse = $uploadData["file_name"];
                $officeimages = $officega .= $officse . ""; // file name
            } else {
                $officeimages = "assets/usercover/rathore.png";
            }
        }

        $userData = [
            "sollogid" => $oid,
            "socialname" => $socialname,
            "socialyear" => $socialyear,
            "socialdec" => $socialdec,
            "country" => $country,
            "state" => $state,
            "district" => $district,
            "city" => $city,
            "pincode" => $pincode,
            "sociallandmark" => $sociallandmark,
            "officmobile" => $officmobile,
            "officelandline" => $officelandline,
            "officehemail" => $officehemail,
            "socialfacebook" => $socialfacebook,
            "socialinstagram" => $socialinstagram,
            "profileimage" => $officeimages,
            "socialslug" => $socialslug,
        ];

        $datas = $this->Social_model->socialgroupe($userData);
        if ($datas) {
            $data = ["success" => 1];
            // $this->session->set_flashdata('true', 'sussfully insert');
        } else {
            $data = ["error" => 0];
            // $this->session->set_flashdata('error', "check one time");
        }

        echo json_encode($data);
        // echo json_encode($data);
    }
    public function addsosicalmembers()
    {
        $slid = $_SESSION["cid"];
        $noficid = $_POST["noficid"];
        $spost = $_POST["spost"];
        $name = $_POST["name"];
        $gender = $_POST["gender"];
        $mobile = $_POST["mobile"];
        $emailid = $_POST["emailid"];
        $country = $_POST["country"];
        $state = $_POST["state"];
        $district = $_POST["district"];
        $facboock = $_POST["facboock"];
        $instagram = $_POST["instagram"];
        $whatsappno = $_POST["whatsappno"];
        $maberslug =
            preg_replace("/[^A-Za-z0-9-]+/", "-", $name) . "-" . uniqid();
        $proimage = "";
        $proimge = "assets/social/socialmember/";
        if (!empty($_FILES["image"]["name"])) {
            $config["upload_path"] = "assets/social/socialmember/"; // path where we have to store
            $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
            $config["file_name"] = time() . $_FILES["image"]["name"];
            //Load upload library and initialize configuration
            $this->load->library("upload", $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload("image")) {
                echo $this->upload->display_errors();
               // file name
            } else {
                $uploadData = $this->upload->data();
                $config['image_library'] = 'gd2';  
                $config['source_image'] = './assets/social/socialmember/'.$uploadData["file_name"];  
                $config['create_thumb'] = FALSE;  
                $config['maintain_ratio'] = FALSE;  
                $config['quality'] = '100%';  
                $config['width'] = 400;  
                $config['height'] = 400;  
                $config['new_image'] = './assets/social/socialmember/'.$uploadData["file_name"];  
                $this->load->library('image_lib', $config);  
                $this->image_lib->resize();
                $proimg = $uploadData["file_name"];
                $proimage = $proimge .= $proimg . "";
            }
        }
        else {
            if($gender == "male"){
             $proimage="assets/images/man.png";
            }
            elseif($gender == "female"){
             $proimage="assets/images/woman.png";
            }
            
         }

        $ComData = [
            "socaiid" => $noficid,
            "sologid" => $slid,
            "name" => $name,
            "post" => $spost,
            "gender" => $gender,
            "mobile" => $mobile,
            "emailid" => $emailid,
            "country" => $country,
            "state" => $state,
            "district" => $district,
            "image" => $proimage,
            "facboock" => $facboock,
            "instagram" => $instagram,
            "whatsappno" => $whatsappno,
            "memberslug" => $maberslug,
        ];

        $data = $this->Social_model->soicalmabers($ComData);

        if ($data) {
            $data = ["success" => 1];
            // $this->session->set_flashdata('true', 'sussfully insert');
        } else {
            $data = ["error" => 0];
            // $this->session->set_flashdata('error', "check one time");
        }

        echo json_encode($data);
    }
    public function socialviewmamber($nvm)
    {
        $result["nofcm"] = $this->Social_model->socialviewmamber($nvm);
        $this->load->view("include/coheader.php");
        $this->load->view("community/socialviewmamber.php", $result);
        $this->load->view("include/cofooter.php");
    }
    public function socialupdatemebers($nsateid)
    {
        $data = $this->Social_model->newsupdatemebers($nsateid);
        echo json_encode($data);
    }
    public function updatesoicalmberinfo()
    {
        $nupsid = $_POST["mid"];
        $upname = $_POST["upname"];
        $upgender = $_POST["upgender"];
        $upmobile = $_POST["upmobile"];
        $upemail = $_POST["upemail"];
        $upfb = $_POST["upfb"];
        $upinsta = $_POST["upinsta"];
        $upwhatsapp = $_POST["upwhatsapp"];

        $upproimage = "";
        $upproimge = "assets/social/socialmember/";
        if (!empty($_FILES["upimage"]["name"])) {
            $config["upload_path"] = "assets/social/socialmember/"; // path where we have to store
            $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
            $config["file_name"] = time() . $_FILES["upimage"]["name"];
            //Load upload library and initialize configuration
            $this->load->library("upload", $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload("upimage")) {
                echo $this->upload->display_errors();
                // file name
            } else {
                $uploadData = $this->upload->data();
                $config['image_library'] = 'gd2';  
                $config['source_image'] = './assets/social/socialmember/'.$uploadData["file_name"];  
                $config['create_thumb'] = FALSE;  
                $config['maintain_ratio'] = FALSE;  
                $config['quality'] = '100%';  
                $config['width'] = 400;  
                $config['height'] = 400;  
                $config['new_image'] = './assets/social/socialmember/'.$uploadData["file_name"];  
                $this->load->library('image_lib', $config);  
                $this->image_lib->resize();
                $upproimg = $uploadData["file_name"];
                $upproimage = $upproimge .= $upproimg . "";
            }
        } else {
            $upproimage = $_POST["mimgup"];
        }

        $nupstatedata = [
            "name" => $upname,
            "gender" => $upgender,
            "mobile" => $upmobile,
            "emailid" => $upemail,
            "image" => $upproimage,
            "facboock" => $upfb,
            "instagram" => $upinsta,
            "whatsappno" => $upwhatsapp,
        ];
        $data = $this->Social_model->newsupdateoficmebers(
            $nupstatedata,
            $nupsid
        );
        if ($data) {
            $data = ["success" => 1];
            // $this->session->set_flashdata('true', 'sussfully insert');
        } else {
            $data = ["error" => 0];
            // $this->session->set_flashdata('error', "check one time");
        }
        echo json_encode($data);
    }
    public function socialupdate($noficid)
    {
        $result["rw"] = $this->Social_model->newpapereditoffice($noficid);
        $this->load->view("include/coheader.php");
        $this->load->view("community/socialupdate.php", $result);
        $this->load->view("include/cofooter.php");
    }

    public function officeupdate()
    {
        $nupofid = $_POST["upofid"];
        $upofficename = $_POST["upofficename"];
        $upofficedesc = $_POST["socialdec"];
        $upofficmobile = json_encode($_POST["officmobile"]);
        $upofficelandline = json_encode($_POST["officelandline"]);
        $upofficehemail = json_encode($_POST["officehemail"]);
        $upofficefacebook = $_POST["upofficefacebook"];
        $upofficeinstagram = $_POST["upofficeinstagram"];

        $upofficeproimage = "";
        $upofficeproimge = "assets/social/socialgroup/";
        if (!empty($_FILES["upofimage"]["name"])) {
            $config["upload_path"] = "assets/social/socialgroup/"; // path where we have to store
            $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
            $config["file_name"] = time() . $_FILES["upofimage"]["name"];
            //Load upload library and initialize configuration
            $this->load->library("upload", $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("upofimage")) {
                $uploadData = $this->upload->data();
                $upoffiecproimg = $uploadData["file_name"];
                $upofficeproimage = $upofficeproimge .= $upoffiecproimg . ""; // file name
            } else {
                $upofficeproimage = "assets/usercover/rathore.png";
            }
        } else {
            $upofficeproimage = $_POST["upimgup"];
        }

        $nupofficedata = [
            "socialname" => $upofficename,
            "socialdec" => $upofficedesc,
            "officmobile" => $upofficmobile,
            "officelandline" => $upofficelandline,
            "officehemail" => $upofficehemail,
            "socialfacebook" => $upofficefacebook,
            "socialinstagram" => $upofficeinstagram,
            "profileimage" => $upofficeproimage,
        ];
        $data = $this->Social_model->newsupdateofiiceinfo(
            $nupofficedata,
            $nupofid
        );
        if ($data) {
            $data = ["success" => 1];
            // $this->session->set_flashdata('true', 'sussfully insert');
        } else {
            $data = ["error" => 0];
            // $this->session->set_flashdata('error', "check one time");
        }
        echo json_encode($data);
    }
}
?>