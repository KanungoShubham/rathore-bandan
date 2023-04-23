<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Nationl extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library("session");
        $this->load->helper("url");
        $this->load->helper("form");
        $this->load->model("Community_model");
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
    public function Nationlforms()
    {
        $this->load->view("include/coheader.php");
        $this->load->view("community/nationalform.php");
        $this->load->view("include/cofooter.php");
    }
    public function satemebersfrom()
    {
        $st = $_SESSION["cid"];

        $result["stu"] = $this->Community_model->satemebers($st);
        $this->load->view("include/coheader.php");
        $this->load->view("community/Statemberform.php", $result);
        $this->load->view("include/cofooter.php");
    }
    public function formssatember($mab)
    {
        $result["ofcm"] = $this->Community_model->offmbers($mab);
        $this->load->view("include/coheader.php");
        $this->load->view("community/Statembersform.php", $result);
        $this->load->view("include/cofooter.php");
    }
    public function nationalmaber()
    {
        $nom = $_SESSION["cid"];
        $result["nodm"] = $this->Community_model->nationalmaber($nom);
        $this->load->view("include/coheader.php");
        $this->load->view("community/nationaloffices.php", $result);
        $this->load->view("include/cofooter.php");
    }
    public function nationalmambers($naom)
    {
        $result["natio"] = $this->Community_model->nationalmambers($naom);
        $this->load->view("include/coheader.php");
        $this->load->view("community/nationalmambersform.php", $result);
        $this->load->view("include/cofooter.php");
    }
    public function nationaladdoffice()
    {
        $oid = $_SESSION["cid"];
        $officename = $_POST["officename"];
        $officergnumber = $_POST["officergnumber"];
        $officergyear = $_POST["officergyear"];
        $officedesc = $_POST["officedesc"];
        $ofcountry = $_POST["country"];
        $ofstate = $_POST["state"];
        $ofdistrict = $_POST["district"];
        $ofcity = $_POST["city"];
        $ofpincode = $_POST["pincode"];
        $ofaddress = $_POST["address"];
        $officelandmark = $_POST["officelandmark"];
        $officmobile = json_encode($_POST["officmobile"]);
        $officelandline = json_encode($_POST["officelandline"]);
        $officehemail = json_encode($_POST["officehemail"]);
        $officefacebook = $_POST["officefacebook"];
        $officeinstagram = $_POST["officeinstagram"];
        $officslug =
            preg_replace("/[^A-Za-z0-9-]+/", "-", $officename) . "-" . uniqid();

        $userData = [
            "socid" => $oid,
            "officename" => $officename,
            "officergnumber" => $officergnumber,
            "officeyears" => $officergyear,
            "officedesc" => $officedesc,
            "country" => $ofcountry,
            "state" => $ofstate,
            "district" => $ofdistrict,
            "city" => $ofcity,
            "pincode" => $ofpincode,
            "address" => $ofaddress,
            "officelandmark" => $officelandmark,
            "officmobile" => $officmobile,
            "officelandline" => $officelandline,
            "officehemail" => $officehemail,
            "officefacebook" => $officefacebook,
            "officeinstagram" => $officeinstagram,
            "officslug" => $officslug,
        ];

        $data = $this->Community_model->nationaladdoffice($userData);
        if ($data) {
            $officeimages = "";
            $officega = "assets/nationl/officeimage/";
            if (!empty($_FILES["officeimage"]["name"])) {
                $config["upload_path"] = "assets/nationl/officeimage/"; // path where we have to store
                $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
                $config["file_name"] = $data;
                //Load upload library and initialize configuration
                $this->load->library("upload", $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload("officeimage")) {
                    $uploadData = $this->upload->data();
                    $officse = $uploadData["file_name"];
                    $officeimages = $officega .= $officse . ""; // file name
                } else {
                    $officeimages = "assets/usercover/rathore.png";
                }
            }
            $nim = ["officeimage" => $officeimages];
            $data = $this->Community_model->nationlimge($nim, $data);
            if ($data) {
                $data = ["success" => 1];
            }
        } else {
            $data = ["error" => 0];
        }

        echo json_encode($data);
    }
    public function addnationalmbers()
    {
        $slid = $_SESSION["cid"];
        $noficid = $_POST["noficid"];
        $nmberpost = $_POST["nmberpost"];
        $nmbername = $_POST["nmbername"];
        $nmbergender = $_POST["nmbergender"];
        $nmbrmobile = $_POST["nmbrmobile"];
        $nmbremail = $_POST["nmbremail"];
        $country = $_POST["country"];
        $state = $_POST["state"];
        $district = $_POST["district"];
        $nmberfb = $_POST["nmberfb"];
        $nmbrinsta = $_POST["nmbrinsta"];
        $nmbrwhatsapp = $_POST["nmbrwhatsapp"];
        $maberslug =
            preg_replace("/[^A-Za-z0-9-]+/", "-", $nmbername) . "-" . uniqid();

        $ComData = [
            "noffid" => $noficid,
            "nloid" => $slid,
            "nmberpost" => $nmberpost,
            "nmbername" => $nmbername,
            "nmbergender" => $nmbergender,
            "nmbrmobile" => $nmbrmobile,
            "nmbremail" => $nmbremail,
            "country" => $country,
            "state" => $state,
            "district" => $district,
            "nmberfb" => $nmberfb,
            "nmbrinsta" => $nmbrinsta,
            "nmbrwhatsapp" => $nmbrwhatsapp,
            "nmaberslug" => $maberslug,
        ];

        $data = $this->Community_model->natioofmabers($ComData);

        if ($data) {
            $proimage = "";
            $proimge = "assets/nationl/mabers/";
            if (!empty($_FILES["nmberimage"]["name"])) {
                $config["upload_path"] = "assets/nationl/mabers/"; // path where we have to store
                $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
                $config["file_name"] = $data;
                //Load upload library and initialize configuration
                $this->load->library("upload", $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload("nmberimage")) {
                    echo $this->upload->display_errors();
                  // file name
                } else {
                    $uploadData = $this->upload->data();
                    $config['image_library'] = 'gd2';  
                    $config['source_image'] = './assets/nationl/mabers/'.$uploadData["file_name"];  
                    $config['create_thumb'] = FALSE;  
                    $config['maintain_ratio'] = FALSE;  
                    $config['quality'] = '100%';  
                    $config['width'] = 400;  
                    $config['height'] = 400;  
                    $config['new_image'] = './assets/nationl/mabers/'.$uploadData["file_name"];  
                    $this->load->library('image_lib', $config);  
                    $this->image_lib->resize();
                    $proimg = $uploadData["file_name"];
                    $proimage = $proimge .= $proimg . "";
                }
            }
            else {
                if($nmbergender == "male"){
                 $proimage="assets/images/man.png";
                }
                elseif($nmbergender == "female"){
                 $proimage="assets/images/woman.png";
                }
                elseif($nmbergender == "youth"){
                 $proimage="assets/images/youth.png";
                }
             }
            $nims = ["nmberimage" => $proimage];
            $data = $this->Community_model->nationlmimge($nims, $data);
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
    public function nviewmabers($nvm)
    {
        $result["nofcm"] = $this->Community_model->nviewmbers($nvm);
        $this->load->view("include/coheader.php");
        $this->load->view("community/nviewmbers.php", $result);
        $this->load->view("include/cofooter.php");
    }
    public function nationlupdatemebers($nsateid)
    {
        $data = $this->Community_model->nationlupdatemebers($nsateid);
        echo json_encode($data);
    }
    public function updatenationlmberinfo()
    {
        $nupsid = $_POST["mid"];
        $uppost = $_POST["uppost"];
        $upname = $_POST["upname"];
        $upgender = $_POST["upgender"];
        $upmobile = $_POST["upmobile"];
        $upemail = $_POST["upemail"];
        $upfb = $_POST["upfb"];
        $upinsta = $_POST["upinsta"];
        $upwhatsapp = $_POST["upwhatsapp"];

        $upproimage = "";
        $upproimge = "assets/nationl/mabers/";
        if (!empty($_FILES["upimage"]["name"])) {
            $config["overwrite"] = true;
            $config["upload_path"] = "assets/nationl/mabers/"; // path where we have to store
            $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
            $config["file_name"] = $nupsid;
            //Load upload library and initialize configuration
            $this->load->library("upload", $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload("upimage")) {
                echo $this->upload->display_errors();
              // file name
            } else {
                $uploadData = $this->upload->data();
                $config['image_library'] = 'gd2';  
                $config['source_image'] = './assets/nationl/mabers/'.$uploadData["file_name"];  
                $config['create_thumb'] = FALSE;  
                $config['maintain_ratio'] = FALSE;  
                $config['quality'] = '100%';  
                $config['width'] = 400;  
                $config['height'] = 400;  
                $config['new_image'] = './assets/nationl/mabers/'.$uploadData["file_name"];  
                $this->load->library('image_lib', $config);  
                $this->image_lib->resize();
                $upproimg = $uploadData["file_name"];
                $upproimage = $upproimge .= $upproimg . ""; 
            }
        } else {
            $upproimage = $_POST["mimgup"];
        }

        $nupstatedata = [
            "nmberpost" => $uppost,
            "nmbername" => $upname,
            "nmbergender" => $upgender,
            "nmbrmobile" => $upmobile,
            "nmbremail" => $upemail,
            "nmberfb" => $upfb,
            "nmbrinsta" => $upinsta,
            "nmbrwhatsapp" => $upwhatsapp,
            "nmberimage" => $upproimage,
        ];
        $data = $this->Community_model->nationlupdateoficmebers(
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
    public function nationaleditoffic($noficid)
    {
        $result["rw"] = $this->Community_model->nationaleditoffic($noficid);
        $this->load->view("include/coheader.php");
        $this->load->view("community/nationaleditoffic.php", $result);
        $this->load->view("include/cofooter.php");
    }

    public function nupdateofiiceinfo()
    {
        $nupofid = $_POST["upofid"];
        $upofficename = $_POST["upofficename"];
        $upofficedesc = $_POST["upofficedesc"];
        $upofficmobile = json_encode($_POST["officmobile"]);
        $upofficelandline = json_encode($_POST["officelandline"]);
        $upofficehemail = json_encode($_POST["officehemail"]);
        $upofficefacebook = $_POST["upofficefacebook"];
        $upofficeinstagram = $_POST["upofficeinstagram"];

        $upofficeproimage = "";
        $upofficeproimge = "assets/nationl/officeimage/";
        if (!empty($_FILES["upofimage"]["name"])) {
            $config["overwrite"] = true;
            $config["upload_path"] = "assets/nationl/officeimage/"; // path where we have to store
            $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
            $config["file_name"] = $nupofid;
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
            "officename" => $upofficename,
            "officedesc" => $upofficedesc,
            "officmobile" => $upofficmobile,
            "officelandline" => $upofficelandline,
            "officehemail" => $upofficehemail,
            "officefacebook" => $upofficefacebook,
            "officeinstagram" => $upofficeinstagram,
            "officeimage" => $upofficeproimage,
        ];
        $data = $this->Community_model->nupdateofiiceinfo(
            $nupofficedata,
            $nupofid
        );
        if ($data) {
            $data = ["success" => 1];
        } else {
            $data = ["error" => 0];
            // $this->session->set_flashdata('error', "check one time");
        }
        echo json_encode($data);
    }
}
?>