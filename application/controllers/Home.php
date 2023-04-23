<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library("session");
        $this->load->helper("url");
        $this->load->helper("form");
        $this->load->model("UserRagsitration");
        $this->load->model("Directoryinfo");
        $this->load->library("form_validation");
    }

    public function index()
    {
      
        $this->load->view("front/Home.php");
   
    }
    public function user()
    {
        $Fristname = $_POST["Fristname"];
        $Lastname = $_POST["Lastname"];
        $Email = $_POST["Email"];
        $Mobilenumber = $_POST["Mobilenumber"];
        $addharname = $_POST["addharname"];
        $password = md5($_POST["password"]);
        $Gender = $_POST["Gender"];
        $Belongs = $_POST["Belongs"];
        $Bloodgroup = $_POST["Bloodgroup"];
        $Donate = $_POST["Donate"];
        $Durgadasji = $_POST["Durgadasji"];
        $country = $_POST["country"];
        $state = $_POST["state"];
        $district = $_POST["district"];
        $userrole = $_POST["userrole"];
        $aadhar = "";
        $imge = "assets/useraddharimg/";
        if (!empty($_FILES["addcard"]["name"])) {
            $config["upload_path"] = "assets/useraddharimg/"; // path where we have to store
            $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
            $config["file_name"] = time() . $_FILES["addcard"]["name"];
            //Load upload library and initialize configuration
            $this->load->library("upload", $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("addcard")) {
                $uploadData = $this->upload->data();
                $sq = $uploadData["file_name"];
                $aadhar = $imge .= $sq . "";
                // file name
            } else {
                $aadhar = "assets/usercover/rathore.png";
            }
        }

        $userData = [
            "Fristname" => $Fristname,
            "Lastname" => $Lastname,
            "Email" => $Email,
            "Mobilenumber" => $Mobilenumber,
            "addharname" => $addharname,
            "password" => $password,
            "Gender" => $Gender,
            "Belongs" => $Belongs,
            "Bloodgroup" => $Bloodgroup,
            "Donate" => $Donate,
            "Durgadasji" => $Durgadasji,
            "country" => $country,
            "state" => $state,
            "district" => $district,
            "userrole" => $userrole,
        ];
        $data = $this->UserRagsitration->userfech(
            $Fristname,
            $Email,
            $addharname,
            $Mobilenumber
        );
        if ($data > 0) {
            $data = ["error" => 1];
        } else {
            $data = $this->UserRagsitration->userinsert($userData);
            if ($data) {
                $pro = "";
                $imges = "assets/proimg/";
                if (!empty($_FILES["image"]["name"])) {
                    $config["upload_path"] = "assets/proimg/"; // path where we have to store
                    $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
                    $config["file_name"] = $data;
                    //Load upload library and initialize configuration
                    $this->load->library("upload", $config);
                    $this->upload->initialize($config);
                    if (!$this->upload->do_upload("image")) {
                        echo $this->upload->display_errors(); 
                   
                        // file name
                    } else {
                        $uploadData = $this->upload->data();
                        $config['image_library'] = 'gd2';  
                        $config['source_image'] = './assets/proimg/'.$uploadData["file_name"];  
                        $config['create_thumb'] = FALSE;  
                        $config['maintain_ratio'] = FALSE;  
                        $config['quality'] = '100%';  
                        $config['width'] = 180;  
                        $config['height'] = 180;  
                        $config['new_image'] = './assets/proimg/'.$uploadData["file_name"];  
                        $this->load->library('image_lib', $config);  
                        $this->image_lib->resize();
                        $sqs = $uploadData["file_name"];
                        $pro = $imges .= $sqs . "";
                    }
                }
                $aadhar = "";
                $imge = "assets/useraddharimg/";
                if (!empty($_FILES["addcard"]["name"])) {
                    $config["upload_path"] = "assets/useraddharimg/"; // path where we have to store
                    $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
                    $config["file_name"] = $data;
                    //Load upload library and initialize configuration
                    $this->load->library("upload", $config);
                    $this->upload->initialize($config);
                    if ($this->upload->do_upload("addcard")) {
                        $uploadData = $this->upload->data();
                        $sq = $uploadData["file_name"];
                        $aadhar = $imge .= $sq . "";
                        // file name
                    } else {
                        $aadhar = "assets/usercover/rathore.png";
                    }
                }
                $upb = ["images" => $aadhar, "proimage" => $pro];

                $data = $this->UserRagsitration->updateimage($upb, $data);
                if ($data) {
                    $data = ["success" => 1];
                }
            } else {
                $data = ["success" => 0];
            }
        }
        echo json_encode($data);
    }
    public function Bureau()
    {
        $this->load->view("include/metroheader.php");
        $this->load->view("front/Bureau.php");
        $this->load->view("include/metrofooter.php");
    }
    public function Viewgroom()
    {
        $frist = $this->input->post("frist");
        $second = $this->input->post("second");

        $result["row"] = $this->Directoryinfo->Viewgroominfo($frist, $second);

        $this->load->view("include/metroheader.php");
        $this->load->view("front/Viewgroom.php", $result);
        $this->load->view("include/metrofooter.php");
    }
    public function Viewbride()
    {
        $newfrist = $this->input->post("frist");
        $newsecond = $this->input->post("second");
        $result["row"] = $this->Directoryinfo->Viewbrideinfo(
            $newfrist,
            $newsecond
        );
        $this->load->view("include/metroheader.php");
        $this->load->view("front/Viewbride.php", $result);
        $this->load->view("include/metrofooter.php");
    }
    public function metroinfo($id)
    {
        $result["data"] = $this->Directoryinfo->metroinfoinfo($id);
        $result["st"] = $this->Directoryinfo->mertoddu($id);
        $result["diser"] = $this->Directoryinfo->mertodiser($id);
        $result["gimag"] = $this->Directoryinfo->metroimage($id);
        $result["fditslis"] = $this->Directoryinfo->metrofdtils($id);

        $this->load->view("include/metroheader.php");
        $this->load->view("front/metroinfo.php", $result);
        $this->load->view("include/metrofooter.php");
    }
    public function Hospice()
    {
        $result["row"] = $this->Directoryinfo->hospicinfo();
        $this->load->view("include/header.php");
        $this->load->view("front/Hospice.php", $result);
        $this->load->view("include/footer.php");
    }
    public function HospiceDetail($hospicid)
    {
        $result["hospice"] = $this->Directoryinfo->hospicedetail($hospicid);
        $result["man"] = $this->Directoryinfo->mandetail($hospicid);
        $result["woman"] = $this->Directoryinfo->womandetail($hospicid);
        $result["youth"] = $this->Directoryinfo->youthdetail($hospicid);
        $result["gallery"] = $this->Directoryinfo->gallerydetail($hospicid);
        $this->load->view("include/header.php");
        $this->load->view("front/HospiceDetail.php", $result);
        $this->load->view("include/footer.php");
    }
    public function Statelevel()
    {
        $search_text = "";
        if ($this->input->post("submit") != null) {
            $search_text = $this->input->post("search");
            $this->session->set_userdata(["search" => $search_text]);
        } else {
            if ($this->session->userdata("search") != null) {
                $search_text = $this->session->userdata("search");
            }
        }
        $allcount = $this->Directoryinfo->getrecordCount($search_text);
        $result["row"] = $this->Directoryinfo->Statelevelinfo($search_text);
        $result["search"] = $search_text;
        $this->load->view("include/header.php");
        $this->load->view("front/Statelevel.php", $result);
        $this->load->view("include/footer.php");
    }
    public function StatelevleDetail($state)
    {
        $result["state"] = $this->Directoryinfo->statedetail($state);
        $result["smale"] = $this->Directoryinfo->maledetail($state);
        $result["sfmale"] = $this->Directoryinfo->femaledetail($state);
        $result["syouth"] = $this->Directoryinfo->syouthdetail($state);
        $this->load->view("include/header.php");
        $this->load->view("front/statelevelDetail.php", $result);
        $this->load->view("include/footer.php");
    }
    public function Nationallevel()
    {
        $result["row"] = $this->Directoryinfo->Nationalinfo();
        $this->load->view("include/header.php");
        $this->load->view("front/Nationallevel.php", $result);
        $this->load->view("include/footer.php");
    }
    public function NationalDetail($national)
    {
        $result["national"] = $this->Directoryinfo->nationaldetail($national);
        $result["nmale"] = $this->Directoryinfo->nmaledetail($national);
        $result["nfmale"] = $this->Directoryinfo->nfmaledetail($national);
        $result["nyouth"] = $this->Directoryinfo->nyouthdetail($national);
        $this->load->view("include/header.php");
        $this->load->view("front/NationalDetail.php", $result);
        $this->load->view("include/footer.php");
    }
    public function News()
    {
        $result["row"] = $this->Directoryinfo->Newsinfo();
        $this->load->view("include/header.php");
        $this->load->view("front/News.php", $result);
        $this->load->view("include/footer.php");
    }
    public function NewsDetail($news)
    {
        $result["news"] = $this->Directoryinfo->newsdetail($news);
        $result["maber"] = $this->Directoryinfo->maberdetail($news);
        $result["nt"] = $this->Directoryinfo->papernewdetail($news);
        $this->load->view("include/header.php");
        $this->load->view("front/NewsDetail.php", $result);
        $this->load->view("include/footer.php");
    }
    public function social()
    {
        $result["row"] = $this->Directoryinfo->socialinfo();
        $this->load->view("include/header.php");
        $this->load->view("front/social.php", $result);
        $this->load->view("include/footer.php");
    }
    public function SocialDetail($social)
    {
        $result["social"] = $this->Directoryinfo->socialdetail($social);
        $result["smaber"] = $this->Directoryinfo->soicalmaberdetail($social);
        $this->load->view("include/header.php");
        $this->load->view("front/SocialDetail.php", $result);
        $this->load->view("include/footer.php");
    }
}
?>