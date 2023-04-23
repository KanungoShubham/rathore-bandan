<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Newspaper extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library("session");
        $this->load->helper("url");
        $this->load->helper("form");
        $this->load->model("News_model");
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
    public function Newspaperforms()
    {
        $this->load->view("include/coheader.php");
        $this->load->view("community/Newspaperform.php");
        $this->load->view("include/cofooter.php");
    }

    public function newspaperoffice()
    {
        $nom = $_SESSION["cid"];
        $result["nodm"] = $this->News_model->newsoffice($nom);
        $this->load->view("include/coheader.php");
        $this->load->view("community/newsoffice.php", $result);
        $this->load->view("include/cofooter.php");
    }
    public function newspapermambers($naom)
    {
        $result["natio"] = $this->News_model->newspapermambers($naom);
        $this->load->view("include/coheader.php");
        $this->load->view("community/newspaprmambersform.php", $result);
        $this->load->view("include/cofooter.php");
    }
    public function addNewspaperoffice()
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
            "nlogid" => $oid,
            "npofficename" => $officename,
            "npofficerg" => $officergnumber,
            "nprgyrars" => $officergyear,
            "npdec" => $officedesc,
            "npcountry" => $ofcountry,
            "npstate" => $ofstate,
            "npdistrict" => $ofdistrict,
            "npcity" => $ofcity,
            "nppincode" => $ofpincode,
            "npaddress" => $ofaddress,
            "npofficelandmark" => $officelandmark,
            "npofficmobile" => $officmobile,
            "npofficelandline" => $officelandline,
            "npofficehemail" => $officehemail,
            "npofficefacebook" => $officefacebook,
            "npofficeinstagram" => $officeinstagram,
            "npslug" => $officslug,
        ];

        $data = $this->News_model->newsaddoffice($userData);
        if ($data) {
            $officeimages = "";
            $officega = "assets/News/npofficeimage/";
            if (!empty($_FILES["officeimage"]["name"])) {
                $config["upload_path"] = "assets/News/npofficeimage/"; // path where we have to store
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

            $nims = ["npofficeimage" => $officeimages];
            $data = $this->News_model->imge($nims, $data);
            if ($data) {
                $data = ["success" => 1];
            }
        } else {
            $data = ["error" => 0];
        }

        echo json_encode($data);
    }
    public function addnewspapermembers()
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
            "newslogid" => $noficid,
            "newsid" => $slid,
            "memberpost" => $nmberpost,
            "membername" => $nmbername,
            "membergander" => $nmbergender,
            "membernumber" => $nmbrmobile,
            "memberemailid" => $nmbremail,
            "country" => $country,
            "state" => $state,
            "district" => $district,
            "memberfb" => $nmberfb,
            "memberinsta" => $nmbrinsta,
            "memberwtnum" => $nmbrwhatsapp,
            "memberslug" => $maberslug,
        ];

        $data = $this->News_model->newsmabers($ComData);

        if ($data) {
            $proimage = "";
            $proimge = "assets/News/newsmabers/";
            if (!empty($_FILES["nmberimage"]["name"])) {
                $config["upload_path"] = "assets/News/newsmabers/"; // path where we have to store
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
                $config['source_image'] = './assets/News/newsmabers/'.$uploadData["file_name"];  
                $config['create_thumb'] = FALSE;  
                $config['maintain_ratio'] = FALSE;  
                $config['quality'] = '100%';  
                $config['width'] = 400;  
                $config['height'] = 400;  
                $config['new_image'] = './assets/News/newsmabers/'.$uploadData["file_name"];  
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
            $nmimage = ["memberimage" => $proimage];
            $data = $this->News_model->mimge($nmimage, $data);
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
    public function newofficmamber($nvm)
    {
        $result["nofcm"] = $this->News_model->vnewsmbers($nvm);
        $this->load->view("include/coheader.php");
        $this->load->view("community/newofficmamber.php", $result);
        $this->load->view("include/cofooter.php");
    }
    public function newsupdatemebers($nsateid)
    {
        $data = $this->News_model->newsupdatemebers($nsateid);
        echo json_encode($data);
    }
    public function updatenewsmberinfo()
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
        $upproimge = "assets/News/newsmabers/";
        if (!empty($_FILES["upimage"]["name"])) {
            $config["overwrite"] = true;
            $config["upload_path"] = "assets/News/newsmabers/"; // path where we have to store
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
                $config['source_image'] = './assets/News/newsmabers/'.$uploadData["file_name"];  
                $config['create_thumb'] = FALSE;  
                $config['maintain_ratio'] = FALSE;  
                $config['quality'] = '100%';  
                $config['width'] = 400;  
                $config['height'] = 400;  
                $config['new_image'] = './assets/News/newsmabers/'.$uploadData["file_name"];  
                $this->load->library('image_lib', $config);  
                $this->image_lib->resize();
                $upproimg = $uploadData["file_name"];
                $upproimage = $upproimge .= $upproimg . "";
            }
        } else {
            $upproimage = $_POST["mimgup"];
        }

        $nupstatedata = [
            "memberpost" => $uppost,
            "membername" => $upname,
            "membergander" => $upgender,
            "membernumber" => $upmobile,
            "memberemailid" => $upemail,
            "memberimage" => $upproimage,
            "memberfb" => $upfb,
            "memberinsta" => $upinsta,
            "memberwtnum" => $upwhatsapp,
        ];
        $data = $this->News_model->newsupdateoficmebers($nupstatedata, $nupsid);
        if ($data) {
            $data = ["success" => 1];
            // $this->session->set_flashdata('true', 'sussfully insert');
        } else {
            $data = ["error" => 0];
            // $this->session->set_flashdata('error', "check one time");
        }
        echo json_encode($data);
    }
    public function newpapereditoffice($noficid)
    {
        $result["rw"] = $this->News_model->newpapereditoffice($noficid);
        $this->load->view("include/coheader.php");
        $this->load->view("community/newpapereditoffice.php", $result);
        $this->load->view("include/cofooter.php");
    }

    public function newupdateofiiceinfos()
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
        $upofficeproimge = "assets/News/npofficeimage/";
        if (!empty($_FILES["upofimage"]["name"])) {
            $config["overwrite"] = true;
            $config["upload_path"] = "assets/News/npofficeimage/"; // path where we have to store
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
            "npofficename" => $upofficename,
            "npdec" => $upofficedesc,
            "npofficmobile" => $upofficmobile,
            "npofficelandline" => $upofficelandline,
            "npofficehemail" => $upofficehemail,
            "npofficefacebook" => $upofficefacebook,
            "npofficeinstagram" => $upofficeinstagram,
            "npofficeimage" => $upofficeproimage,
        ];
        $data = $this->News_model->newsupdateofiiceinfo(
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
    public function newspaper($newsid)
    {
        $result["news"] = $newsid;
        $result["newsgarlly"] = $this->News_model->newgarlly($newsid);
        $this->load->view("include/coheader.php");
        $this->load->view("community/addnewspaper.php", $result);
        $this->load->view("include/cofooter.php");
    }
    public function addnewpaper()
    {
        $officid = $_POST["officid"];
        $years = $_POST["years"];

        $ComData = ["newsoffice_id" => $officid, "year" => $years];

        $data = $this->News_model->addnewpaper($ComData);

        if ($data) {
            $newsimages = "";
            $newpaper = "assets/News/newspaper/";
            if (!empty($_FILES["newspaperi"]["name"])) {
                $config["upload_path"] = "assets/News/newspaper/"; // path where we have to store
                $config["allowed_types"] = "pdf"; // allowed types
                $config["file_name"] = $data;
                //Load upload library and initialize configuration
                $this->load->library("upload", $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload("newspaperi")) {
                    $uploadData = $this->upload->data();
                    $newsimg = $uploadData["file_name"];
                    $newsimages = $newpaper .= $newsimg . ""; // file name
                } else {
                    $newsimages = "assets/usercover/rathore.png";
                }
            }
            $thumbnailimages = "";
            $newpaperthumbnail = "assets/News/thumbnail/";
            if (!empty($_FILES["thumbnail"]["name"])) {
                $config["upload_path"] = "assets/News/thumbnail/"; // path where we have to store
                $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
                $config["file_name"] = $data;
                //Load upload library and initialize configuration
                $this->load->library("upload", $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload("thumbnail")) {
                    $uploadData = $this->upload->data();
                    $thumbnailimg = $uploadData["file_name"];
                    $thumbnailimages = $newpaperthumbnail .= $thumbnailimg . ""; // file name
                } else {
                    $thumbnailimages = "assets/usercover/rathore.png";
                }
            }
            $nwes = [
                "paper_thumbnail" => $thumbnailimages,
                "paper" => $newsimages,
            ];
            $data = $this->News_model->newspaperimages($nwes, $data);
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
}
?>
