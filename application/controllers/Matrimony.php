<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Matrimony extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library("session");
        $this->load->helper("url");
        $this->load->helper("form");
        $this->load->model("MatrimonyRagsitration");
        $this->load->model("Directoryinfo");
       
        if (empty($this->session->userdata("id"))) {
            redirect(base_url() . "Home");
        }
    }

    public function index()
    {
        $ids = $_SESSION["id"];

        $result["datas"] = $this->MatrimonyRagsitration->getdetails($ids);
        $this->load->view("include/metroheader.php", $result);
        $this->load->view("matrimony/metrohome.php");
        $this->load->view("include/metrofooter.php");
    }

    public function pesronlinfo($id)
    { $ids = $_SESSION["id"];
        $result["data"] = $this->MatrimonyRagsitration->getpesronlinfo($id);
        $result["st"] = $this->MatrimonyRagsitration->selectdet($id);
        $result["diser"] = $this->MatrimonyRagsitration->selectdiser($id);
        $result["gimag"] = $this->MatrimonyRagsitration->selectimage($id);
        $result["fditslis"] = $this->MatrimonyRagsitration->selectfdtils($id);
        $result["premathc"] = $this->MatrimonyRagsitration->prematch();
        $result["fmatch"] = $this->MatrimonyRagsitration->fmatch();
        $result["datas"] = $this->MatrimonyRagsitration->getdetails($ids);
        $this->load->view("include/metroheader.php",$result);
        $this->load->view("matrimony/pesronlinfo.php", $result);
        $this->load->view("include/metrofooter.php");
    }
    public function profile()
    {
        $ids = $_SESSION["id"];

        $result["data"] = $this->MatrimonyRagsitration->getdetails($ids);

        $this->load->view("include/dhader.php", $result);
        $this->load->view("matrimony/edit.php", $result);
        $this->load->view("include/cofooter.php");
    }
    public function dasbored()
    {
        $ids = $_SESSION["id"];

        $result["data"] = $this->MatrimonyRagsitration->getdetails($ids);
        $result["row"] = $this->MatrimonyRagsitration->getinfo($ids);

        $this->load->view("include/dhader.php", $result);
        $this->load->view("matrimony/dasbored.php", $result);
        $this->load->view("include/cofooter.php");
    }
    public function matrimonyform()
    {$ids = $_SESSION["id"];
        $result["datas"] = $this->MatrimonyRagsitration->getdetails($ids);
        $this->load->view("include/metroheader.php",$result);
        $this->load->view("matrimony/matrimonyform.php");
        $this->load->view("include/metrofooter.php");
    }
    public function fristfrom()
    {
        $id = $_SESSION["id"];
        $profilecreated = $_POST["profilecreated"];
        $FirstName = $_POST["FirstName"];
        $LastName = $_POST["LastName"];
        $gender = $_POST["gender"];
        $dob = $_POST["dob"];
        $newDateTime = date("Y-m-d", strtotime($dob));
        $age = date_diff(date_create($newDateTime), date_create("today"))->y;
        $mothertongue = $_POST["mothertongue"];
        $languages = $_POST["languages"];
        $marital = $_POST["marital"];
        $resident = $_POST["resident"];
        $country = $_POST["country"];
        $state = $_POST["state"];
        $district = $_POST["district"];
        $city = $_POST["city"];
        $pincode = $_POST["pincode"];
        $address = $_POST["address"];
        $height = $_POST["height"];
        $weight = $_POST["weight"];
        $body = $_POST["body"];
        $skin = $_POST["skin"];
        $disability = $_POST["disability"];
        $hobby = $_POST["hobby"];
        $hob = json_encode($_POST["hobby"]);
        $otherhobby = $_POST["otherhobby"];
        $interest = $_POST["interest"];
        $ints = json_encode($_POST["interest"]);
        $otherinterest = $_POST["otherinterest"];
        $diet = $_POST["diet"];
        $dieet = json_encode($_POST["diet"]);
        $smoke = $_POST["smoke"];
        $belongs = $_POST["belongs"];
        $about = $_POST["about"];
        $bloodgroup = $_POST["bloodgroup"];
        $religion = $_POST["religion"];

        $birthtime = $_POST["birthtime"];
        $newbirthtime = date("h:i A", strtotime($birthtime));
        $birthplace = $_POST["birthplace"];
        $gotra = $_POST["gotra"];
        $mamagotra = $_POST["mamagotra"];
        $manglik = $_POST["manglik"];
        $shani = $_POST["shani"];
        $moonsign = $_POST["moonsign"];
        $adharnumber = $_POST["adharnumber"];
        $coverimg = "assets/usercover/rathore.png";
        $aadhar = "";
        $imge = "assets/useraddharimg/";
        if (!empty($_FILES["adharimage"]["name"])) {
            $config["upload_path"] = "assets/useraddharimg/"; // path where we have to store
            $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
            $config["file_name"] = time() . $_FILES["adharimage"]["name"];
            //Load upload library and initialize configuration
            $this->load->library("upload", $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("adharimage")) {
                $uploadData = $this->upload->data();
                $sq = $uploadData["file_name"];
                $aadhar = $imge .= $sq . "";
                // file name
            } else {
                $aadhar = "assets/usercover/rathore.png";
            }
        }
        $userimage = "";
        $imges = "assets/userprofileimage/";
        if (!empty($_FILES["proimage"]["name"])) {
            $config["upload_path"] = "assets/userprofileimage/"; // path where we have to store
            $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
            $config["file_name"] = time() . $_FILES["proimage"]["name"];
            //Load upload library and initialize configuration
            $this->load->library("upload", $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload("proimage")) {
                echo $this->upload->display_errors(); 
             
                // file name
            } else {
                $uploadData = $this->upload->data();
                $config['image_library'] = 'gd2';  
                $config['source_image'] = './assets/userprofileimage/'.$uploadData["file_name"];  
                $config['create_thumb'] = FALSE;  
                $config['maintain_ratio'] = FALSE;  
                $config['quality'] = '100%';  
                $config['width'] = 150;  
                $config['height'] = 150;  
                $config['new_image'] = './assets/userprofileimage/'.$uploadData["file_name"];  
                $this->load->library('image_lib', $config);  
                $this->image_lib->resize();
                $pro = $uploadData["file_name"];
                $userimage = $imges .= $pro . "";
            }
        }

        $userData = [
            "user_id" => $id,
            "profilecreated" => $profilecreated,
            "firstName" => $FirstName,
            "lastName" => $LastName,
            "gender" => $gender,
            "dob" => $newDateTime,
            "mothertongue" => $mothertongue,
            "languages" => $languages,
            "marital" => $marital,
            "resident" => $resident,
            "country" => $country,
            "state" => $state,
            "district" => $district,
            "city" => $city,
            "pincode" => $pincode,
            "address" => $address,
            "height" => $height,
            "weight" => $weight,
            "body" => $body,
            "skin" => $skin,
            "disability" => $disability,
            "hobby" => (string) $hob,
            "otherhobby" => $otherhobby,
            "interest" => (string) $ints,
            "otherinterest" => $otherinterest,
            "diet" => (string) $dieet,
            "smoke" => $smoke,
            "belongs" => $belongs,
            "about" => $about,
            "religion" => $religion,
            "adharimage" => $aadhar,
            "userprofileimage" => $userimage,
            "coveimage" => $coverimg,
            "adharnumber" => $adharnumber,
            "bloodgroup" => $bloodgroup,
            "birthtime" => $newbirthtime,
            "birthplace" => $birthplace,
            "gotra" => $gotra,
            "mamagotra" => $mamagotra,
            "manglik" => $manglik,
            "shani" => $shani,
            "moonsign" => $moonsign,
            "age" => $age,
        ];

        $data = $this->MatrimonyRagsitration->matrimonyuserinsert($userData);

        if ($data) {
            $data = ["success" => 1];
        } else {
            $data = ["error" => 0];
        }

        echo json_encode($data);
    }
    public function updateabout($upabuot)
    {
        $updateprofilecreated = $_POST["updateprofilecreated"];
        $updateFirstName = $_POST["updateFirstName"];
        $updateLastName = $_POST["updateLastName"];
        $updategender = $_POST["updategender"];
        $updatedob = $_POST["updatedob"];
        $updatenewDateTime = date("Y-m-d", strtotime($updatedob));
        $ages = date_diff(date_create($updatenewDateTime), date_create("today"))
            ->y;
        $updatemothertongue = $_POST["updatemothertongue"];
        $updatelanguages = $_POST["updatelanguages"];
        $updatemarital = $_POST["updatemarital"];
        $updateresident = $_POST["updateresident"];
        $updatecity = $_POST["updatecity"];
        $updatepincode = $_POST["updatepincode"];
        $updateaddress = $_POST["updateaddress"];
        $updateheight = $_POST["updateheight"];
        $updateweight = $_POST["updateweight"];
        $updatebody = $_POST["updatebody"];
        $updateskin = $_POST["updateskin"];
        $updatedisability = $_POST["updatedisability"];
        $updatehob = json_encode($_POST["updatehobby"]);
        $updateotherhobby = $_POST["updateotherhobby"];
        $updateints = json_encode($_POST["updateinterest"]);
        $updateotherinterest = $_POST["updateotherinterest"];
        $updatedieet = json_encode($_POST["updatediet"]);
        $updatesmoke = $_POST["updatesmoke"];
        $updateabout = $_POST["updateabout"];
        $updatebloodgroup = $_POST["updatebloodgroup"];

        $updatebirthplace = $_POST["updatebirthplace"];
        $updategotra = $_POST["updategotra"];
        $updatemamagotra = $_POST["updatemamagotra"];
        $updatemanglik = $_POST["updatemanglik"];
        $updateshani = $_POST["updateshani"];
        $updatemoonsign = $_POST["updatemoonsign"];
      

        $updatenewuserData = [
            "profilecreated" => $updateprofilecreated,
            "firstName" => $updateFirstName,
            "lastName" => $updateLastName,
            "gender" => $updategender,
            "dob" => $updatenewDateTime,
            "mothertongue" => $updatemothertongue,
            "languages" => $updatelanguages,
            "marital" => $updatemarital,
            "resident" => $updateresident,
            "city" => $updatecity,
            "pincode" => $updatepincode,
            "address" => $updateaddress,
            "height" => $updateheight,
            "weight" => $updateweight,
            "body" => $updatebody,
            "skin" => $updateskin,
            "disability" => $updatedisability,
            "hobby" => (string) $updatehob,
            "otherhobby" => $updateotherhobby,
            "interest" => (string) $updateints,
            "otherinterest" => $updateotherinterest,
            "diet" => (string) $updatedieet,
            "smoke" => $updatesmoke,
            "about" => $updateabout,
            "bloodgroup" => $updatebloodgroup,
            "birthplace" => $updatebirthplace,
            "gotra" => $updategotra,
            "mamagotra" => $updatemamagotra,
            "manglik" => $updatemanglik,
            "shani" => $updateshani,
            "moonsign" => $updatemoonsign,
            "age" => $ages,
        ];

        $data = $this->MatrimonyRagsitration->matrimonyuserupdatw(
            $updatenewuserData,
            $upabuot
        );

        if ($data) {
            $data = ["success" => 1];
        } else {
            $data = ["error" => 0];
        }

        echo json_encode($data);
    }
   
    public function educationinformations($idu)
    {
        $id = $_SESSION["id"];
        $rid = $_POST["rid"];
        $educations = $_POST["eductionc"];
        $otheredus = $_POST["otheredus"];
        $educationallevels = $_POST["educationallevelus"];
        $educationalleveltwos = json_encode($_POST["educationallevelus"]);
        $occupations = $_POST["occupationus"];
        $occupationtwos = json_encode($_POST["occupationus"]);
        $occupationdescriptions = $_POST["occupationdescriptions"];
        $incomes = $_POST["incomes"];
        $userbiuseens = $_POST["userbiuseens"];
        $userbiuseensimage = "";
        $userbiuseensnewimage = "assets/famliyimages/bussinesimage/";
        if (!empty($_FILES["userbiuseensimage"]["name"])) {
            $config["upload_path"] = "assets/famliyimages/bussinesimage/"; // path where we have to store
            $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
            $config["file_name"] =
                time() . $_FILES["userbiuseensimage"]["name"];
            //Load upload library and initialize configuration
            $this->load->library("upload", $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("userbiuseensimage")) {
                $uploadData = $this->upload->data();
                $ubimg = $uploadData["file_name"];
                $userbiuseensimage = $userbiuseensnewimage .= $ubimg . "";
                // file name
            } else {
                $userbiuseensimage = "assets/usercover/rathore.png";
            }
        } else {
            $userbiuseensimage = $_POST["userbiuseensimageup"];
        }
        $userData = [
            "user_id" => $id,
            "rid" => $rid,
            "education" => $educations,
            "otheredu" => $otheredus,
            "educationallevel" => (string) $educationalleveltwos,
            "occupation" => (string) $occupationtwos,
            "userbiuseens" => $userbiuseens,
            "biuneesimage" => $userbiuseensimage,
            "occupationdescription" => $occupationdescriptions,
            "income" => $incomes,
        ];

        $data = $this->MatrimonyRagsitration->educationupdate($userData, $idu);

        if ($data) {
            $data = ["success" => 2];
        } elseif ($datas) {
            $datas = ["success" => 1];
        } else {
            $data = ["error" => 0];
        }

        echo json_encode($data);
    }
    public function diser($dir)
    {
        $id = $_SESSION["id"];
        $did = $_POST["did"];
        $fromage = $_POST["fromage"];

        $toage = $_POST["toage"];
        $fromheight = $_POST["fromheight"];
        $toheight = $_POST["toheight"];
        $desiredmarital = $_POST["desiredmarital"];
        $desiredtongues = $_POST["desiredtongue"];
        $desiredtongue = json_encode($_POST["desiredtongue"]);
        $desiredmangals = json_encode($_POST["desiredmangal"]);
        $desiredshani = json_encode($_POST["desiredshani"]);
        $desirededucation = json_encode($_POST["desirededucation"]);
        $desiredoccupation = json_encode($_POST["desiredoccupation"]);
        $desireddiet = json_encode($_POST["desireddiet"]);
        $desireddrink = json_encode($_POST["desireddrink"]);
        $desiredsmoke = json_encode($_POST["desiredsmoke"]);
        $desiredcomplexion = json_encode($_POST["desiredcomplexion"]);
        $desiredbody = json_encode($_POST["desiredbody"]);
        $desiredchallenge = json_encode($_POST["desiredchallenge"]);
        $desiredincome = $_POST["desiredincome"];

        $userData = [
            "user_id" => $id,
            "rid" => $did,
            "fromage" => $fromage,
            "toage" => $toage,
            "fromheight" => $fromheight,
            "toheight" => $toheight,
            "desiredmarital" => (string) $desiredmarital,
            "desiredtongue" => (string) $desiredtongue,
            "desiredmangal" => (string) $desiredmangals,
            "desiredshani" => (string) $desiredshani,
            "desirededucation" => (string) $desirededucation,
            "desiredoccupation" => (string) $desiredoccupation,
            "desiredincome" => $desiredincome,
            "desireddiet" => (string) $desireddiet,
            "desireddrink" => (string) $desireddrink,
            "desiredsmoke" => (string) $desiredsmoke,
            "desiredcomplexion" => (string) $desiredcomplexion,
            "desiredbody" => (string) $desiredbody,
            "desiredchallenge" => (string) $desiredchallenge,
        ];

        $data = $this->MatrimonyRagsitration->diseradd($userData, $dir);

        if ($data) {
            $data = ["success" => 2];
        } elseif ($datas) {
            $datas = ["success" => 1];
        } else {
            $data = ["error" => 0];
        }

        echo json_encode($data);
    }

    public function garllyimages()
    {
        $id = $_SESSION["id"];
        $sid = $_POST["grid"];

        $gdata = ["user_id" => $id, "rid" => $sid];

        $data = $this->MatrimonyRagsitration->gadd($gdata);

        if ($data) {
            $gimage = "";
            $gallerysimage = "assets/gallerys/";
            if (!empty($_FILES["gimages"]["name"])) {
                $config["upload_path"] = "assets/gallerys/"; // path where we have to store
                $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
                $config["file_name"] = $data;
                //Load upload library and initialize configuration
                $this->load->library("upload", $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload("gimages")) {
                    echo $this->upload->display_errors(); 
                   
                    // file name
                } else {
                    $uploadData = $this->upload->data();
                    $config['image_library'] = 'gd2';  
                    $config['source_image'] = './assets/gallerys/'.$uploadData["file_name"];  
                    $config['create_thumb'] = FALSE;  
                    $config['maintain_ratio'] = FALSE;  
                    $config['quality'] = '100%';  
                    $config['width'] = 400;  
                    $config['height'] = 400;  
                    $config['new_image'] = './assets/gallerys/'.$uploadData["file_name"];  
                    $this->load->library('image_lib', $config);  
                    $this->image_lib->resize();
                    $gim = $uploadData["file_name"];
                    $gimage = $gallerysimage .= $gim . "";
                }
            }
            $nwes = ["gimages" => $gimage];
            $data = $this->MatrimonyRagsitration->garllyesimages($nwes, $data);
            if ($data) {
                $data = ["success" => 1];
            } else {
                $data = ["error" => 0];
            }
        } else {
            $data = ["error" => 0];
        }
        echo json_encode($data);
    }
    public function editgr($userid)
    {
        $data = $this->MatrimonyRagsitration->edgrs($userid);

        //   $this->load->view('include/metroheader.php');
        // $this->load->view('matrimony/pesronlinfo.php', $result);
        // $this->load->view('include/metrofooter.php');

        echo json_encode($data);
    }
    public function updateimagess()
    {
        $ueid = $_POST["ueid"];
        $garrlyimage = "";
        $galleryseimage = "assets/gallerys/";
        if (!empty($_FILES["ueics"]["name"])) {
            $config["overwrite"] = true;
            $config["upload_path"] = "assets/gallerys/"; // path where we have to store
            $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
            $config["file_name"] = $ueid;
            //Load upload library and initialize configuration
            $this->load->library("upload", $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload("ueics")) {
                echo $this->upload->display_errors(); 
               
                // file name
            } else {
                $uploadData = $this->upload->data();
                $config['image_library'] = 'gd2';  
                $config['source_image'] = './assets/gallerys/'.$uploadData["file_name"];  
                $config['create_thumb'] = FALSE;  
                $config['maintain_ratio'] = FALSE;  
                $config['quality'] = '100%';  
                $config['width'] = 400;  
                $config['height'] = 400;  
                $config['new_image'] = './assets/gallerys/'.$uploadData["file_name"];  
                $this->load->library('image_lib', $config);  
                $this->image_lib->resize();
                $geims = $uploadData["file_name"];
                $geimage = $galleryseimage .= $geims . "";
            }
        } else {
            $geimage = $_POST["uiges"];
        }
        $gedata = ["gimages" => $geimage];

        $data = $this->MatrimonyRagsitration->geupdata($gedata, $ueid);
        if ($data) {
            $data = ["success" => 1];
        } else {
            $data = ["error" => 0];
        }
        echo json_encode($data);
    }
    public function editprofile($pid)
    {
        $data = $this->MatrimonyRagsitration->editprofiles($pid);

        //   $this->load->view('include/metroheader.php');
        // $this->load->view('matrimony/pesronlinfo.php', $result);
        // $this->load->view('include/metrofooter.php');

        echo json_encode($data);
    }
    public function updateproimagess()
    {
        $pid = $_POST["pid"];
        $puserimage = "";
        $pimges = "assets/userprofileimage/";
        if (!empty($_FILES["peimages"]["name"])) {
            $config["overwrite"] = true;
            $config["upload_path"] = "assets/userprofileimage/"; // path where we have to store
            $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
            $config["file_name"] = $pid;
            //Load upload library and initialize configuration
            $this->load->library("upload", $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload("peimages")) {
              
                // file name
            } else {
                $uploadData = $this->upload->data();
                $config['image_library'] = 'gd2';  
                $config['source_image'] = './assets/userprofileimage/'.$uploadData["file_name"];  
                $config['create_thumb'] = FALSE;  
                $config['maintain_ratio'] = FALSE;  
                $config['quality'] = '100%';  
                $config['width'] = 150;  
                $config['height'] = 150;  
                $config['new_image'] = './assets/userprofileimage/'.$uploadData["file_name"];  
                $this->load->library('image_lib', $config);  
                $this->image_lib->resize();
                $puro = $uploadData["file_name"];
                $userimageps = $pimges .= $puro . "";
            }
        } else {
            $userimageps = $_POST["upeuim"];
        }
        $pgedata = ["userprofileimage" => $userimageps];

        $data = $this->MatrimonyRagsitration->gprofiledata($pgedata, $pid);
        if ($data) {
            $data = ["success" => 1];
        } else {
            $data = ["error" => 0];
        }
        echo json_encode($data);
    }
    public function updatecoverproimagess()
    {
        $cpid = $_POST["cpid"];
        $coverpuserimage = "";
        $coverpimges = "assets/usercover/";
        if (!empty($_FILES["coverpeimages"]["name"])) {
            $config["overwrite"] = true;
            $config["upload_path"] = "assets/usercover/"; // path where we have to store
            $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
            $config["file_name"] = $cpid;
            //Load upload library and initialize configuration
            $this->load->library("upload", $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("coverpeimages")) {
                $uploadData = $this->upload->data();
                $coverpuro = $uploadData["file_name"];
                $coveruserimageps = $coverpimges .= $coverpuro . "";
                // file name
            } else {
                $coveruserimageps = "assets/usercover/rathore.png";
            }
        } else {
            $coveruserimageps = $_POST["cupeuim"];
        }
        $covergedata = ["coveimage" => $coveruserimageps];

        $data = $this->MatrimonyRagsitration->gcoverdata($covergedata, $cpid);
        if ($data) {
            $data = ["success" => 1];
        } else {
            $data = ["error" => 0];
        }
        echo json_encode($data);
    }
    public function addfamliy()
    {
        $id = $_SESSION["id"];
        $ferid = $_POST["ferid"];
        $familyvalue = $_POST["familyvalue"];
        $familytype = $_POST["familytype"];
        $familystatus = $_POST["familystatus"];
        $faddress = $_POST["faddress"];
        $fincomes = $_POST["fincomes"];
        $familyb = $_POST["familyb"];
        $gfrandm = $_POST["grandm"];
        $gmramnae = $_POST["gramnae"];
        $fname = $_POST["fname"];
        $foc = $_POST["foc"];
        $focd = $_POST["focd"];
        $fmnumber = $_POST["fmnumber"];
        $mname = $_POST["mname"];
        $moc = $_POST["moc"];
        $mocd = $_POST["mocd"];
        $fwnumber = $_POST["fwnumber"];
        $femail = $_POST["femail"];
        $sibling_array = [
            "sibling_gen" => $_POST["sibling_gen"],
            "sibling_status" => $_POST["siblingstatus"],
            "sibling_name" => $_POST["siblingname"],
            "sibling_marriage" => $_POST["bms"],
            "sibling_ocupation" => $_POST["bo"],
        ];

        $fuserData = [
            "user_id" => $id,
            "frid" => $ferid,
            "grandfather_name" => $gfrandm,
            "grandmother_name" => $gmramnae,
            "father_name" => $fname,
            "mother_name" => $mname,
            "fatheroccupation" => $foc,
            "motheroccupation" => $moc,
            "f_occupation_detail" => $focd,
            "m_occupation_detail" => $mocd,
            "sibling_array" => json_encode($sibling_array),
            "family_type" => $familytype,
            "family_values" => $familyvalue,
            "family_status" => $familystatus,
            "family_income" => $fincomes,
            "famliy_bussines" => $familyb,
            "fcontactnumber" => $fmnumber,
            "whatsapp_number" => $fwnumber,
            "emailid" => $femail,
            "address" => $faddress,
        ];

        $data = $this->MatrimonyRagsitration->familyinsert($fuserData);

        if ($data) {
            $GrandFather = "";
            $GrandFatherimge = "assets/famliyimages/grandfather/";
            if (!empty($_FILES["grfimg"]["name"])) {
                $config["upload_path"] = "assets/famliyimages/grandfather/"; // path where we have to store
                $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
                $config["file_name"] = $data;
                //Load upload library and initialize configuration
                $this->load->library("upload", $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload("grfimg")) {
                    echo $this->upload->display_errors(); 
                    // file name
                } else {
                    $uploadData = $this->upload->data();
                    $config['image_library'] = 'gd2';  
                    $config['source_image'] = './assets/famliyimages/grandfather/'.$uploadData["file_name"];  
                    $config['create_thumb'] = FALSE;  
                    $config['maintain_ratio'] = FALSE;  
                    $config['quality'] = '100%';  
                    $config['width'] = 200;  
                    $config['height'] = 200;  
                    $config['new_image'] = './assets/famliyimages/grandfather/'.$uploadData["file_name"];  
                    $this->load->library('image_lib', $config);  
                    $this->image_lib->resize();
                    $gf = $uploadData["file_name"];
                    $GrandFather = $GrandFatherimge .= $gf . "";
                }
            }
            $GrandMother = "";
            $GrandMotherimge = "assets/famliyimages/grandmother/";
            if (!empty($_FILES["grmimg"]["name"])) {
                $config["upload_path"] = "assets/famliyimages/grandmother/"; // path where we have to store
                $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
                $config["file_name"] = $data;
                //Load upload library and initialize configuration
                $this->load->library("upload", $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload("grmimg")) {
                    echo $this->upload->display_errors(); 
                    // file name
                } else {
                    $uploadData = $this->upload->data();
                    $config['image_library'] = 'gd2';  
                    $config['source_image'] = './assets/famliyimages/grandmother/'.$uploadData["file_name"];  
                    $config['create_thumb'] = FALSE;  
                    $config['maintain_ratio'] = FALSE;  
                    $config['quality'] = '100%';  
                    $config['width'] = 200;  
                    $config['height'] = 200;  
                    $config['new_image'] = './assets/famliyimages/grandmother/'.$uploadData["file_name"];  
                    $this->load->library('image_lib', $config);  
                    $this->image_lib->resize();
                    $gm = $uploadData["file_name"];
                    $GrandMother = $GrandMotherimge .= $gm . "";
                }
            }

            $Father = "";
            $Fatherimge = "assets/famliyimages/father/";
            if (!empty($_FILES["fimg"]["name"])) {
                $config["upload_path"] = "assets/famliyimages/father/"; // path where we have to store
                $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
                $config["file_name"] = $data;
                //Load upload library and initialize configuration
                $this->load->library("upload", $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload("fimg")) {
                    echo $this->upload->display_errors(); 
                  
                    // file name
                } else {
                    $uploadData = $this->upload->data();
                    $config['image_library'] = 'gd2';  
                    $config['source_image'] = './assets/famliyimages/father/'.$uploadData["file_name"];  
                    $config['create_thumb'] = FALSE;  
                    $config['maintain_ratio'] = FALSE;  
                    $config['quality'] = '100%';  
                    $config['width'] = 200;  
                    $config['height'] = 200;  
                    $config['new_image'] = './assets/famliyimages/father/'.$uploadData["file_name"];  
                    $this->load->library('image_lib', $config);  
                    $this->image_lib->resize();
                    $f = $uploadData["file_name"];
                    $Father = $Fatherimge .= $f . "";
                }
            }
            $Mother = "";
            $Motherimge = "assets/famliyimages/mother/";
            if (!empty($_FILES["mimg"]["name"])) {
                $config["upload_path"] = "assets/famliyimages/mother/"; // path where we have to store
                $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
                $config["file_name"] = $data;
                //Load upload library and initialize configuration
                $this->load->library("upload", $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload("mimg")) {
                    echo $this->upload->display_errors(); 
                   
                    // file name
                } else {
                    $uploadData = $this->upload->data();
                    $config['image_library'] = 'gd2';  
                    $config['source_image'] = './assets/famliyimages/mother/'.$uploadData["file_name"];  
                    $config['create_thumb'] = FALSE;  
                    $config['maintain_ratio'] = FALSE;  
                    $config['quality'] = '100%';  
                    $config['width'] = 200;  
                    $config['height'] = 200;  
                    $config['new_image'] = './assets/famliyimages/mother/'.$uploadData["file_name"];  
                    $this->load->library('image_lib', $config);  
                    $this->image_lib->resize();
                    $gf = $uploadData["file_name"];
                    $Mother = $Motherimge .= $gf . "";
                }
            }
            $FAmliycoverimage = "";
            $FAmliycoverrimge = "assets/famliyimages/famliycoverimage/";
            if (!empty($_FILES["famliyimgs"]["name"])) {
                $config["upload_path"] =
                    "assets/famliyimages/famliycoverimage/"; // path where we have to store
                $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
                $config["file_name"] = $data;
                //Load upload library and initialize configuration
                $this->load->library("upload", $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload("famliyimgs")) {
                    $uploadData = $this->upload->data();
                    $fams = $uploadData["file_name"];
                    $FAmliycoverimage = $FAmliycoverrimge .= $fams . "";
                    // file name
                } else {
                    $FAmliycoverimage = "assets/usercover/rathore.png";
                }
            }
            $bussinescoverimage = "";
            $bussinescoverrimge = "assets/famliyimages/bussinesimage/";
            if (!empty($_FILES["bimage"]["name"])) {
                $config["upload_path"] = "assets/famliyimages/bussinesimage/"; // path where we have to store
                $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
                $config["file_name"] = $data;
                //Load upload library and initialize configuration
                $this->load->library("upload", $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload("bimage")) {
                    $uploadData = $this->upload->data();
                    $bams = $uploadData["file_name"];
                    $bussinescoverimage = $bussinescoverrimge .= $bams . "";
                    // file name
                } else {
                    $bussinescoverimage = "assets/usercover/rathore.png";
                }
            }

            $nwes = [
                "grandfatherimage" => $GrandFather,
                "grandmotherimage" => $GrandMother,
                "father_image" => $Father,
                "motherimage" => $Mother,
                "famliyimage" => $FAmliycoverimage,
                "family_businessimg" => $bussinescoverimage,
            ];
            $data = $this->MatrimonyRagsitration->famliyimages($nwes, $data);
            if ($data) {
                $data = ["success" => 1];
            } else {
                $data = ["error" => 0];
            }
        } else {
            $data = ["error" => 0];
        }

        echo json_encode($data);
    }
    public function updatefamliy()
    {
        $famliyid = $_POST["famliyid"];
        $fid = $_POST["fid"];
        $familyvalueupdate = $_POST["familyvalueupdate"];
        $familytypeupdate = $_POST["familytypeupdate"];
        $familystatusupdate = $_POST["familystatusupdate"];
        $faddressupdate = $_POST["faddressupdate"];
        $fincomesupdate = $_POST["fincomesupdate"];
        $familybupdate = $_POST["familybupdate"];
        $grandfupdate = $_POST["grandfupdate"];
        $gramnaeupdate = $_POST["gramnaeupdate"];
        $fnameupdate = $_POST["fnameupdate"];
        $focupdate = $_POST["focupdate"];
        $focdupdate = $_POST["focdupdate"];
        $fmnumberupdate = $_POST["fmnumberupdate"];
        $mnameupdate = $_POST["mnameupdate"];
        $mocupdate = $_POST["mocupdate"];
        $mocdupdate = $_POST["mocdupdate"];
        $fwnumberupdate = $_POST["fwnumberupdate"];
        $femailupdate = $_POST["femailupdate"];
        $sibling_arrays = [
            "sibling_gen" => $_POST["sibling_genupdate"],
            "sibling_status" => $_POST["sibling_statusupdate"],
            "sibling_name" => $_POST["sibling_nameupdate"],
            "sibling_marriage" => $_POST["sibling_marriageupdate"],
            "sibling_ocupation" => $_POST["sibling_ocuupdate"],
        ];
        $GrandFatherupdate = "";
        $GrandFatherimgeupdate = "assets/famliyimages/grandfather/";
        if (!empty($_FILES["updategrfimg"]["name"])) {
            $config["overwrite"] = true;
            $config["upload_path"] = "assets/famliyimages/grandfather/"; // path where we have to store
            $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
            $config["file_name"] = $fid;
            //Load upload library and initialize configuration
            $this->load->library("upload", $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload("updategrfimg")) {
                echo $this->upload->display_errors(); 
                // file name
            } else {
                $uploadData = $this->upload->data();
                $config['image_library'] = 'gd2';  
                $config['source_image'] = './assets/famliyimages/grandfather/'.$uploadData["file_name"];  
                $config['create_thumb'] = FALSE;  
                $config['maintain_ratio'] = FALSE;  
                $config['quality'] = '100%';  
                $config['width'] = 200;  
                $config['height'] = 200;  
                $config['new_image'] = './assets/famliyimages/grandfather/'.$uploadData["file_name"];  
                $this->load->library('image_lib', $config);  
                $this->image_lib->resize();
                $gfupdate = $uploadData["file_name"];
                $GrandFatherupdate = $GrandFatherimgeupdate .= $gfupdate . "";
            }
        } else {
            $GrandFatherupdate = $_POST["secongrfimgupdate"];
        }
        $GrandMotherupdate = "";
        $GrandMotherimgeupdate = "assets/famliyimages/grandmother/";
        if (!empty($_FILES["grmimgupdate"]["name"])) {
            $config["overwrite"] = true;
            $config["upload_path"] = "assets/famliyimages/grandmother/"; // path where we have to store
            $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
            $config["file_name"] = $fid;
            //Load upload library and initialize configuration
            $this->load->library("upload", $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload("grmimgupdate")) {
                echo $this->upload->display_errors(); 
           
                // file name
            } else {
                $uploadData = $this->upload->data();
                $config['image_library'] = 'gd2';  
                $config['source_image'] = './assets/famliyimages/grandmother/'.$uploadData["file_name"];  
                $config['create_thumb'] = FALSE;  
                $config['maintain_ratio'] = FALSE;  
                $config['quality'] = '100%';  
                $config['width'] = 200;  
                $config['height'] = 200;  
                $config['new_image'] = './assets/famliyimages/grandmother/'.$uploadData["file_name"];  
                $this->load->library('image_lib', $config);  
                $this->image_lib->resize();
                $gmupdate = $uploadData["file_name"];
                $GrandMotherupdate = $GrandMotherimgeupdate .= $gmupdate . "";
            }
        } else {
            $GrandMotherupdate = $_POST["secondgrmimgupdate"];
        }
        $Fatherupdate = "";
        $Fatherimgeupdate = "assets/famliyimages/father/";
        if (!empty($_FILES["fimgupdate"]["name"])) {
            $config["overwrite"] = true;
            $config["upload_path"] = "assets/famliyimages/father/"; // path where we have to store
            $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
            $config["file_name"] = $fid;
            //Load upload library and initialize configuration
            $this->load->library("upload", $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload("fimgupdate")) {
                echo $this->upload->display_errors(); 
               
                // file name
            } else {
                $uploadData = $this->upload->data();
                $config['image_library'] = 'gd2';  
                $config['source_image'] = './assets/famliyimages/father/'.$uploadData["file_name"];  
                $config['create_thumb'] = FALSE;  
                $config['maintain_ratio'] = FALSE;  
                $config['quality'] = '100%';  
                $config['width'] = 200;  
                $config['height'] = 200;  
                $config['new_image'] = './assets/famliyimages/father/'.$uploadData["file_name"];  
                $this->load->library('image_lib', $config);  
                $this->image_lib->resize();
                $fupdates = $uploadData["file_name"];
                $Fatherupdate = $Fatherimgeupdate .= $fupdates . "";
            }
        } else {
            $Fatherupdate = $_POST["seconfimgupdate"];
        }
        $Motherupdate = "";
        $Motherimgeupdate = "assets/famliyimages/mother/";
        if (!empty($_FILES["mimgupdate"]["name"])) {
            $config["overwrite"] = true;
            $config["upload_path"] = "assets/famliyimages/mother/"; // path where we have to store
            $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
            $config["file_name"] = $fid;
            //Load upload library and initialize configuration
            $this->load->library("upload", $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload("mimgupdate")) {
                echo $this->upload->display_errors(); 
              
                // file name
            } else {
                $uploadData = $this->upload->data();
                    $config['image_library'] = 'gd2';  
                    $config['source_image'] = './assets/famliyimages/mother/'.$uploadData["file_name"];  
                    $config['create_thumb'] = FALSE;  
                    $config['maintain_ratio'] = FALSE;  
                    $config['quality'] = '100%';  
                    $config['width'] = 200;  
                    $config['height'] = 200;  
                    $config['new_image'] = './assets/famliyimages/mother/'.$uploadData["file_name"];  
                    $this->load->library('image_lib', $config);  
                    $this->image_lib->resize();
                    $gfupdate = $uploadData["file_name"];
                    $Motherupdate = $Motherimgeupdate .= $gfupdate . "";
            }
        } else {
            $Motherupdate = $_POST["secondmimgupdate"];
        }
        $FAmliycoverimageupdate = "";
        $FAmliycoverrimgeupdate = "assets/famliyimages/famliycoverimage/";
        if (!empty($_FILES["newfamliyimgsupdate"]["name"])) {
            $config["overwrite"] = true;
            $config["upload_path"] = "assets/famliyimages/famliycoverimage/"; // path where we have to store
            $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
            $config["file_name"] = $fid;
            //Load upload library and initialize configuration
            $this->load->library("upload", $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("newfamliyimgsupdate")) {
                $uploadData = $this->upload->data();
                $famsupdate = $uploadData["file_name"];
                $FAmliycoverimageupdate = $FAmliycoverrimgeupdate .=
                    $famsupdate . "";
                // file name
            } else {
                $FAmliycoverimageupdate = "assets/usercover/rathore.png";
            }
        } else {
            $FAmliycoverimageupdate = $_POST["updateseconfamliyimg"];
        }
        $bussinescoverimageupdates = "";
        $bussinescoverrimgeupdate = "assets/famliyimages/bussinesimage/";
        if (!empty($_FILES["bimageupdate"]["name"])) {
            $config["overwrite"] = true;
            $config["upload_path"] = "assets/famliyimages/bussinesimage/"; // path where we have to store
            $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
            $config["file_name"] = $fid;
            //Load upload library and initialize configuration
            $this->load->library("upload", $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("bimageupdate")) {
                $uploadData = $this->upload->data();
                $bamsupdate = $uploadData["file_name"];
                $bussinescoverimageupdates = $bussinescoverrimgeupdate .=
                    $bamsupdate . "";
                // file name
            } else {
                $bussinescoverimageupdates = "assets/usercover/rathore.png";
            }
        } else {
            $bussinescoverimageupdates = $_POST["seconbimag"];
        }
        $fuserDataupdate = [
            "grandfather_name" => $grandfupdate,
            "grandfatherimage" => $GrandFatherupdate,
            "grandmother_name" => $gramnaeupdate,
            "grandmotherimage" => $GrandMotherupdate,
            "father_name" => $fnameupdate,
            "father_image" => $Fatherupdate,
            "mother_name" => $mnameupdate,
            "motherimage" => $Motherupdate,
            "fatheroccupation" => $focupdate,
            "motheroccupation" => $mocupdate,
            "f_occupation_detail" => $focdupdate,
            "m_occupation_detail" => $mocdupdate,
            "sibling_array" => json_encode($sibling_arrays),
            "famliyimage" => $FAmliycoverimageupdate,
            "family_type" => $familytypeupdate,
            "family_values" => $familyvalueupdate,
            "family_status" => $familystatusupdate,
            "family_income" => $fincomesupdate,
            "famliy_bussines" => $familybupdate,
            "family_businessimg" => $bussinescoverimageupdates,
            "fcontactnumber" => $fmnumberupdate,
            "whatsapp_number" => $fwnumberupdate,
            "emailid" => $femailupdate,
            "address" => $faddressupdate,
        ];

        $data = $this->MatrimonyRagsitration->familyupdate(
            $fuserDataupdate,
            $famliyid
        );

        if ($data) {
            $data = ["success" => 1];
        } else {
            $data = ["error" => 0];
        }

        echo json_encode($data);
    }

    public function likedprofile()
    {
        // $id=
        $id = $_SESSION["id"];
        $bID = $_POST["nsateid"];
        $sid[] = $_SESSION["id"];

        $res = $this->MatrimonyRagsitration->liked_profiles_id($id);
        $liked_data = json_decode($res[0]->liked_profiles_id);
        if (!is_array($liked_data)) {
            $liked_data = [];
        }

        if (!in_array($bID, $liked_data)) {
            array_push($liked_data, $bID);
        } else {
            foreach ($liked_data as $key) {
                if ($key != $bID) {
                    $new[] = $key;
                }
            }
            // $liked_data='';
            $liked_data = $new;
            // if (($key = array_search($bID, $liked_data)) !== false) {
            // unset($liked_data[$key]);
            // }
        }

        $data = $this->MatrimonyRagsitration->update_user_like_data(
            $id,
            $liked_data
        );
        $data = $this->MatrimonyRagsitration->update_user_like($sid, $bID);
        if ($data) {
            $data = ["success" => 1];
        } else {
            $data = ["error" => 0];
        }
        echo json_encode($data);

        // $data=array('like_profile'=>json_encode($bids));
    }
    public function likedprofilelist()
    {
        $ids = $_SESSION["id"];
        $result["datas"] = $this->MatrimonyRagsitration->getdetails($ids);
        $id = $_SESSION["id"];
        $res = $this->MatrimonyRagsitration->liked_profiles_id($id);
        $liked_data = json_decode($res[0]->liked_profiles_id);
        if (!is_array($liked_data)) {
            $liked_data = [];
        }

        $liked_data_list = $this->MatrimonyRagsitration->get_liked_profiles(
            $liked_data
        );
        $data = [
            "liked_data" => $liked_data_list,
            "cur_liked_data" => $liked_data,
        ];
        $this->load->view("include/metroheader.php",$result);
        $this->load->view("matrimony/liked-profiles.php", $data);
        $this->load->view("include/metrofooter.php");
    }
    public function Bureau()
    {
        $ids = $_SESSION["id"];
        $result["datas"] = $this->MatrimonyRagsitration->getdetails($ids);
        $result["blogs"] = $this->Directoryinfo->getblogdetails();
        $this->load->view("include/matrimonyheader.php" , $result);
        $this->load->view("front/Bureau.php",$result);
        $this->load->view("include/matrimonyfooter.php");
    }
    public function Viewgroom()
    {
        $frist = $this->input->post("frist");
        $second = $this->input->post("second");
        $ids = $_SESSION["id"];
        $result["datas"] = $this->MatrimonyRagsitration->getdetails($ids);
        $result["row"] = $this->Directoryinfo->Viewgroominfo($frist, $second);

        $this->load->view("include/metroheader.php", $result);
        $this->load->view("front/Viewgroom.php", $result);
        $this->load->view("include/metrofooter.php");
    }
    public function Viewbride()
    {
        $ids = $_SESSION["id"];
        $result["datas"] = $this->MatrimonyRagsitration->getdetails($ids);
        $newfrist = $this->input->post("frist");
        $newsecond = $this->input->post("second");
        $result["row"] = $this->Directoryinfo->Viewbrideinfo(
            $newfrist,
            $newsecond
        );
        $this->load->view("include/metroheader.php", $result);
        $this->load->view("front/Viewbride.php", $result);
        $this->load->view("include/metrofooter.php");
    }
    public function metroinfo($id)
    {
        $ids = $_SESSION["id"];
        $result["datas"] = $this->MatrimonyRagsitration->getdetails($ids);
        $result["data"] = $this->Directoryinfo->metroinfoinfo($id);
        $result["st"] = $this->Directoryinfo->mertoddu($id);
        $result["diser"] = $this->Directoryinfo->mertodiser($id);
        $result["gimag"] = $this->Directoryinfo->metroimage($id);
        $result["fditslis"] = $this->Directoryinfo->metrofdtils($id);

        $this->load->view("include/metroheader.php",$result);
        $this->load->view("front/metroinfo.php", $result);
        $this->load->view("include/metrofooter.php");
    }
    public function Hospice()
    {
        $ids = $_SESSION["id"];
        $result["datas"] = $this->MatrimonyRagsitration->getdetails($ids);
        $result["row"] = $this->Directoryinfo->hospicinfo();
        $this->load->view("include/metroheader.php",$result);
        $this->load->view("front/Hospice.php", $result);
        $this->load->view("include/metrofooter.php");
    }
    public function HospiceDetail($hospicid)
    {
        $ids = $_SESSION["id"];
        $result["datas"] = $this->MatrimonyRagsitration->getdetails($ids);
        $result["hospice"] = $this->Directoryinfo->hospicedetail($hospicid);
        $result["man"] = $this->Directoryinfo->mandetail($hospicid);
        $result["woman"] = $this->Directoryinfo->womandetail($hospicid);
        $result["youth"] = $this->Directoryinfo->youthdetail($hospicid);
        $result["gallery"] = $this->Directoryinfo->gallerydetail($hospicid);
        $result["dontion"] = $this->Directoryinfo->dontiondetail($hospicid);
        $this->load->view("include/metroheader.php",$result);
        $this->load->view("front/HospiceDetail.php", $result);
        $this->load->view("include/metrofooter.php");
    }
    public function Statelevel()
    {
        $ids = $_SESSION["id"];

       
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
        $result["datas"] = $this->MatrimonyRagsitration->getdetails($ids);
        $result["search"] = $search_text;
        $this->load->view("include/metroheader.php", $result);
        $this->load->view("front/Statelevel.php", $result);
        $this->load->view("include/metrofooter.php");
    }
    public function StatelevleDetail($state)
    {
        $ids = $_SESSION["id"];

        $result["datas"] = $this->MatrimonyRagsitration->getdetails($ids);
        $result["state"] = $this->Directoryinfo->statedetail($state);
        $result["smale"] = $this->Directoryinfo->maledetail($state);
        $result["sfmale"] = $this->Directoryinfo->femaledetail($state);
        $result["syouth"] = $this->Directoryinfo->syouthdetail($state);
        $this->load->view("include/metroheader.php",$result);
        $this->load->view("front/statelevelDetail.php", $result);
        $this->load->view("include/metrofooter.php");
    }
    public function Nationallevel()
    {
        $ids = $_SESSION["id"];

        $result["datas"] = $this->MatrimonyRagsitration->getdetails($ids);
        $result["row"] = $this->Directoryinfo->Nationalinfo();
        $this->load->view("include/metroheader.php", $result);
        $this->load->view("front/Nationallevel.php", $result);
        $this->load->view("include/metrofooter.php");
    }
    public function NationalDetail($national)
    {
        $ids = $_SESSION["id"];

        $result["datas"] = $this->MatrimonyRagsitration->getdetails($ids);
        $result["national"] = $this->Directoryinfo->nationaldetail($national);
        $result["nmale"] = $this->Directoryinfo->nmaledetail($national);
        $result["nfmale"] = $this->Directoryinfo->nfmaledetail($national);
        $result["nyouth"] = $this->Directoryinfo->nyouthdetail($national);
        $this->load->view("include/metroheader.php", $result);
        $this->load->view("front/NationalDetail.php", $result);
        $this->load->view("include/metrofooter.php");
    }
    public function News()
    {
        $ids = $_SESSION["id"];

        $result["datas"] = $this->MatrimonyRagsitration->getdetails($ids);
        $result["row"] = $this->Directoryinfo->Newsinfo();
        $this->load->view("include/metroheader.php" , $result);
        $this->load->view("front/News.php", $result);
        $this->load->view("include/metrofooter.php");
    }
    public function NewsDetail($news)
    {
        $ids = $_SESSION["id"];

        $result["datas"] = $this->MatrimonyRagsitration->getdetails($ids);
        $result["news"] = $this->Directoryinfo->newsdetail($news);
        $result["maber"] = $this->Directoryinfo->maberdetail($news);
        $result["nt"] = $this->Directoryinfo->papernewdetail($news);
        $this->load->view("include/metroheader.php", $result);
        $this->load->view("front/NewsDetail.php", $result);
        $this->load->view("include/metrofooter.php");
    }
    public function social()
    {
        $ids = $_SESSION["id"];

        $result["datas"] = $this->MatrimonyRagsitration->getdetails($ids);
        $result["row"] = $this->Directoryinfo->socialinfo();
        $this->load->view("include/metroheader.php",$result);
        $this->load->view("front/social.php", $result);
        $this->load->view("include/metrofooter.php");
    }
    public function SocialDetail($social)
    {
        $ids = $_SESSION["id"];

        $result["datas"] = $this->MatrimonyRagsitration->getdetails($ids);
        $result["social"] = $this->Directoryinfo->socialdetail($social);
        $result["smaber"] = $this->Directoryinfo->soicalmaberdetail($social);
        $this->load->view("include/metroheader.php",$result);
        $this->load->view("front/SocialDetail.php", $result);
        $this->load->view("include/metrofooter.php");
    }

    public function edituserprofile()
    {
        $epid = $_POST["edid"];
        $efristname = $_POST["fristname"];
        $elastname = $_POST["lastname"];
        $eemaile = $_POST["emaile"];
        $emobile = $_POST["mobile"];
        $pro = "";
        $imges = "assets/proimg/";
        if (!empty($_FILES["nimage"]["name"])) {
            $config["overwrite"] = true;
            $config["upload_path"] = "assets/proimg/"; // path where we have to store
            $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
            $config["file_name"] = $epid;
            //Load upload library and initialize configuration
            $this->load->library("upload", $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload("nimage")) {
                echo $this->upload->display_errors(); 
            
                // file name
            } else {
                $uploadDatan = $this->upload->data();
                $config['image_library'] = 'gd2';  
                $config['source_image'] = './assets/proimg/'.$uploadDatan["file_name"];  
                $config['create_thumb'] = FALSE;  
                $config['maintain_ratio'] = FALSE;  
                $config['quality'] = '100%';  
                $config['width'] = 180;  
                $config['height'] = 180;  
                $config['new_image'] = './assets/proimg/'.$uploadDatan["file_name"];  
                $this->load->library('image_lib', $config);  
                $this->image_lib->resize();
                $sqs = $uploadDatan["file_name"];
                $pro = $imges .= $sqs . "";
            }
        } else {
            $pro = $_POST["oldimage"];
        }
        $prof = [
            "Fristname" => $efristname,
            "Lastname" => $elastname,
            "Email" => $eemaile,
            "Mobilenumber" => $emobile,
            "proimage" => $pro,
        ];

        $data = $this->MatrimonyRagsitration->proupdate($prof, $epid);

        if ($data) {
            $data = ["success" => 1];
        } else {
            $data = ["error" => 0];
        }

        echo json_encode($data);
    }

    public function contacthide()
    {
        $contactid = $_POST["contactid"];
        $hide = '1';
        $data = $this->MatrimonyRagsitration->contactupdate($contactid, $hide);

        if ($data) {
            $data = ["success" => 1];
        } else {
            $data = ["error" => 0];
        }

        echo json_encode($data);
    }
    public function uncontacthide()
    {
        $uncontactid = $_POST["uncontactid"];
        $unhide = '0';
        $data = $this->MatrimonyRagsitration->uncontactupdate($uncontactid, $unhide);

        if ($data) {
            $data = ["success" => 1];
        } else {
            $data = ["error" => 0];
        }

        echo json_encode($data);
    }


    public function addbusiness()
    {
        $ids = $_SESSION["id"];

        $result["data"] = $this->MatrimonyRagsitration->getdetails($ids);

        $this->load->view("include/dhader.php", $result);
        $this->load->view("matrimony/addbusiness.php");
        $this->load->view("include/cofooter.php");
    }

    public function businessinformation()
    {
        $logid = $_SESSION["id"];
        $businessname = $_POST["businessname"];
        $ownername = $_POST["ownername"];
        $businessdsc = $_POST["business"];
        $businessmobile = $_POST["mobile"];
        $business = [
            "logid" => $logid,
            "businessname" => $businessname,
            "ownername" => $ownername,
            "business_dsc" => $businessdsc,
            "mobile" => $businessmobile,
        ];
        $datas = $this->MatrimonyRagsitration->buinessalredy($logid);
        if ($datas > 0) {
            $data = ["warning" => 2];
        } else {
            $data = $this->MatrimonyRagsitration->addbusiness($business);

            if ($data) {
                $businessimg = "";
                $businessimges = "assets/businessimg/";
                if (!empty($_FILES["bimage"]["name"])) {
                    $config["upload_path"] = "assets/businessimg/"; // path where we have to store
                    $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
                    $config["file_name"] = $data;
                    //Load upload library and initialize configuration
                    $this->load->library("upload", $config);
                    $this->upload->initialize($config);
                    if ($this->upload->do_upload("bimage")) {
                        $uploadData = $this->upload->data();
                        $sqs = $uploadData["file_name"];
                        $businessimg = $businessimges .= $sqs . "";
                        // file name
                    } else {
                        $businessimg = "assets/usercover/rathore.png";
                    }
                    $upb = ["image" => $businessimg];

                    $data = $this->MatrimonyRagsitration->updatebuisennimage(
                        $upb,
                        $data
                    );
                    if ($data) {
                        $data = ["success" => 1];
                    }
                }
            } else {
                $data = ["error" => 0];
            }
        }
        echo json_encode($data);
    }
    public function updatebusiness()
    {
        $ids = $_SESSION["id"];

        $result["data"] = $this->MatrimonyRagsitration->getdetails($ids);
        $result["business"] = $this->MatrimonyRagsitration->getbusinnes($ids);
        $result["businessgarlly"] = $this->MatrimonyRagsitration->businnesgarrlly($ids);

        $this->load->view("include/dhader.php", $result);
        $this->load->view("matrimony/editbusiness.php", $result);
        $this->load->view("include/cofooter.php");
    }

    public function businessupdate()
    {
        $bunissid = $_POST["businessid"];

        $upbusinessname = $_POST["businessname"];
        $upownername = $_POST["ownername"];
        $upbusinessdsc = $_POST["business"];
        $upbusinessmobile = $_POST["mobile"];
        $updatebusinneimg = "";
        $upbusinessimges = "assets/businessimg/";
        if (!empty($_FILES["bimage"]["name"])) {
            $config["overwrite"] = true;
            $config["upload_path"] = "assets/businessimg/"; // path where we have to store
            $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
            $config["file_name"] = $bunissid;
            //Load upload library and initialize configuration
            $this->load->library("upload", $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("bimage")) {
                $uploadData = $this->upload->data();
                $upsqs = $uploadData["file_name"];
                $updatebusinneimg = $upbusinessimges .= $upsqs . "";
                // file name
            } else {
                $pro = "assets/usercover/rathore.png";
            }
        } else {
            $updatebusinneimg = $_POST["upbimage"];
        }
        $upbusiness = [
            "businessname" => $upbusinessname,
            "ownername" => $upownername,
            "business_dsc" => $upbusinessdsc,
            "mobile" => $upbusinessmobile,
            "image" => $updatebusinneimg,
        ];
        $data = $this->MatrimonyRagsitration->upbuinessinfo(
            $upbusiness,
            $bunissid
        );
        if ($data) {
            $data = ["success" => 1];
        } else {
            $data = ["error" => 0];
        }
        echo json_encode($data);
    }

    public function businessgrally()
    {
        $id = $_SESSION["id"];
        $infod = $_POST["infod"];

        $businessgarlly = ["user_id" => $id, "business_id" => $infod];

        $data = $this->MatrimonyRagsitration->businessgarlly($businessgarlly);

        if ($data) {
            $businessgimg = "";
            $businessgimges = "assets/businessimg/gallery/";
            if (!empty($_FILES["buinesg"]["name"])) {
                $config["upload_path"] = "assets/businessimg/gallery/"; // path where we have to store
                $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
                $config["file_name"] = $data;
                //Load upload library and initialize configuration
                $this->load->library("upload", $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload("buinesg")) {
                    $uploadData = $this->upload->data();
                    $bim = $uploadData["file_name"];
                    $businessgimg = $businessgimges .= $bim . "";
                    // file name
                } else {
                    $businessgimg = "assets/usercover/rathore.png";
                }
                $buimahes = ["	images" => $businessgimg];

                $data = $this->MatrimonyRagsitration->buimggarlley(
                    $buimahes,
                    $data
                );
                if ($data) {
                    $data = ["success" => 1];
                }
            } else {
                $data = ["error" => 0];
            }
        }
        echo json_encode($data);
    }
    public function businessnewgarllry($buserid)
    {
        $data = $this->MatrimonyRagsitration->buimgesgarlley($buserid);
        echo json_encode($data);
    }
    public function businessgarlleyupdate()
    {
        $bid = $_POST["ueid"];
        $bgarlleyimg = "";
        $bunisgarlleyimges = "assets/businessimg/gallery/";
        if (!empty($_FILES["nueics"]["name"])) {
            $config["overwrite"] = true;
            $config["upload_path"] = "assets/businessimg/gallery/"; // path where we have to store
            $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
            $config["file_name"] = $bid;
            //Load upload library and initialize configuration
            $this->load->library("upload", $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("nueics")) {
                $uploadData = $this->upload->data();
                $bims = $uploadData["file_name"];
                $bgarlleyimg = $bunisgarlleyimges .= $bims . "";
                // file name
            } else {
                $bgarlleyimg = "assets/usercover/rathore.png";
            }
        } else {
            $bgarlleyimg = $_POST["nuiges"];
        }
        $buidata = ["images" => $bgarlleyimg];

        $data = $this->MatrimonyRagsitration->gimages($buidata, $bid);
        if ($data) {
            $data = ["success" => 1];
        } else {
            $data = ["error" => 0];
        }
        echo json_encode($data);
    }

    public function addevent()
    {
        $ids = $_SESSION["id"];

        $result["data"] = $this->MatrimonyRagsitration->getdetails($ids);

        $this->load->view("include/dhader.php", $result);
        $this->load->view("matrimony/addevent.php");
        $this->load->view("include/cofooter.php");
    }
    public function eventadd()
    {
        $logid = $_SESSION["id"];
        $eventname = $_POST["eventname"];
        $parsonanme = $_POST["parsonanme"];
        $eventdsc = $_POST["business"];
        $eventloction = $_POST["eventloction"];
        $eventdate = $_POST["eventdate"];
        $starttime = $_POST["starttime"];
        $endtime = $_POST["endtime"];
        $mobile = $_POST["mobile"];
        $emailid = $_POST["emailid"];
        $event = [
            "logid" => $logid,
            "eventname" => $eventname,
            "parsonanme" => $parsonanme,
            "description" => $eventdsc,
            "eventloction" => $eventloction,
            "eventdate" => $eventdate,
            "starttime" => $starttime,
            "endtime" => $endtime,
            "mobile" => $mobile,
            "emailid" => $emailid,
        ];
       
            $data = $this->MatrimonyRagsitration->addevent($event);

            if ($data) {
                $eventimg = "";
                $eventimges = "assets/eventimages/";
                if (!empty($_FILES["eimage"]["name"])) {
                    $config["upload_path"] = "assets/eventimages/"; // path where we have to store
                    $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
                    $config["file_name"] = $data;
                    //Load upload library and initialize configuration
                    $this->load->library("upload", $config);
                    $this->upload->initialize($config);
                    if ($this->upload->do_upload("eimage")) {
                        $uploadData = $this->upload->data();
                        $evs = $uploadData["file_name"];
                        $eventimg = $eventimges .= $evs . "";
                        // file name
                    } else {
                        $eventimg = "assets/usercover/rathore.png";
                    }
                    $evb = ["eimage" => $eventimg];

                $data = $this->MatrimonyRagsitration->updateeventimage($evb,$data);
                    if ($data) {
                        $data = ["success" => 1];
                    }
                }
            } else {
                $data = ["error" => 0];
            }
        
        echo json_encode($data);
    }
    public function eventlist()
    {
        $ids = $_SESSION["id"];

        $result["data"] = $this->MatrimonyRagsitration->getdetails($ids);
        $result["evlist"] = $this->MatrimonyRagsitration->getevent($ids);
        $this->load->view("include/dhader.php", $result);
        $this->load->view("matrimony/eventlist.php",$result);
        $this->load->view("include/cofooter.php");
    }
    public function updatevent($uevid)
    {
        $ids = $_SESSION["id"];

        $result["data"] = $this->MatrimonyRagsitration->getdetails($ids);
        $result["upevent"] = $this->MatrimonyRagsitration->geteventinfo($uevid);
       

        $this->load->view("include/dhader.php", $result);
        $this->load->view("matrimony/editevent.php", $result);
        $this->load->view("include/cofooter.php");
    }
    public function eventupdate()
    {
        $eventid = $_POST["eventid"];
        $upeventname = $_POST["eventname"];
        $upparsonanme = $_POST["parsonanme"];
        $upeventdsc = $_POST["business"];
        $upeventloction = $_POST["eventloction"];
        $upeventdate = $_POST["eventdate"];
        $upstarttime = $_POST["starttime"];
        $upendtime = $_POST["endtime"];
        $upmobile = $_POST["mobile"];
        $upemailid = $_POST["emailid"];
        $upeventimg = "";
        $upeventimges = "assets/eventimages/";
        if (!empty($_FILES["eimage"]["name"])) {
            $config["overwrite"] = true;
            $config["upload_path"] = "assets/eventimages/"; // path where we have to store
            $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
            $config["file_name"] = $eventid;
            //Load upload library and initialize configuration
            $this->load->library("upload", $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("eimage")) {
                $uploadData = $this->upload->data();
                $upev = $uploadData["file_name"];
                $upeventimg = $upeventimges .= $upev . "";
                // file name
            } else {
                $upeventimg = "assets/usercover/rathore.png";
            }
        } else {
            $upeventimg = $_POST["upeimage"];
        }
        $upevent = [
            "eventname" => $upeventname,
            "parsonanme" => $upparsonanme,
            "description" => $upeventdsc,
            "eventloction" => $upeventloction,
            "eventdate" => $upeventdate,
            "starttime" => $upstarttime,
            "endtime" => $upendtime,
            "mobile" => $upmobile,
            "emailid" => $upemailid,
            "eimage" => $upeventimg,

        ];
        $data = $this->MatrimonyRagsitration->upeventinfo($upevent,$eventid);
        if ($data) {
            $data = ["success" => 1];
        } else {
            $data = ["error" => 0];
        }
        echo json_encode($data);
    }
    public function dbirthday()
    {
        $ids = $_SESSION["id"];

        $result["data"] = $this->MatrimonyRagsitration->getdetails($ids);

        $this->load->view("include/dhader.php", $result);
        $this->load->view("matrimony/dbirthday.php");
        $this->load->view("include/cofooter.php");
    }
    public function addbirthday()
    {
        $logid = $_SESSION["id"];
        $birthdayname = $_POST["birthdayname"];
        $bmassge = $_POST["business"];
        $wmobile = $_POST["mobile"];
        $dob= $_POST["dob"];
    
        $birthday = [
            "logid" => $logid,
            "name" => $birthdayname,
            "massge" => $bmassge,
            "mobile" => $wmobile,
            "dob" => $dob,
        
        ];
       
            $data = $this->MatrimonyRagsitration->addbirthday($birthday);

            if ($data) {
                $bimage = "";
                $bimages = "assets/birthdayimages/";
                if (!empty($_FILES["bimage"]["name"])) {
                    $config["upload_path"] = "assets/birthdayimages/"; // path where we have to store
                    $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
                    $config["file_name"] = $data;
                  
                    //Load upload library and initialize configuration
                    $this->load->library("upload", $config);
                   
                    $this->upload->initialize($config);
                    if (!$this->upload->do_upload("bimage")) {
                        echo $this->upload->display_errors();  
                        // file name
                        $bimage = "assets/usercover/rathore.png";
                    } else {

                        $uploadData = $this->upload->data();
                        $config['image_library'] = 'gd2';  
                        $config['source_image'] = './assets/birthdayimages/'.$uploadData["file_name"];  
                        $config['create_thumb'] = FALSE;  
                        $config['maintain_ratio'] = FALSE;  
                        $config['quality'] = '100%';  
                        $config['width'] = 150;  
                        $config['height'] = 150;  
                        $config['new_image'] = './assets/birthdayimages/'.$uploadData["file_name"];  
                        $this->load->library('image_lib', $config);  
                        $this->image_lib->resize(); 
                        $brvs = $uploadData["file_name"];
                        $bimage = $bimages .= $brvs . "";
                       
                    }
                   
                    $bvb = ["image" => $bimage];

                $data = $this->MatrimonyRagsitration->updatbimage($bvb,$data);
                    if ($data) {
                        $data = ["success" => 1];
                    }
                }
            } else {
                $data = ["error" => 0];
            }
        
        echo json_encode($data);
    }
    public function birthdaylist()
    {
        $ids = $_SESSION["id"];

        $result["data"] = $this->MatrimonyRagsitration->getdetails($ids);
        $result["birthdaylist"] = $this->MatrimonyRagsitration->birthdaylist($ids);
       
        $this->load->view("include/dhader.php", $result);
        $this->load->view("matrimony/birthdaylist.php",$result);
        $this->load->view("include/cofooter.php");
    }
    public function updatbirthday($ubrid)
    {
        $ids = $_SESSION["id"];
        $result["data"] = $this->MatrimonyRagsitration->getdetails($ids);
        $result["upbday"] = $this->MatrimonyRagsitration->getbirthday($ubrid);
        $this->load->view("include/dhader.php", $result);
        $this->load->view("matrimony/editbirthday.php", $result);
        $this->load->view("include/cofooter.php");
    }
    public function birthdayupdate()
    {
        $bdayid = $_POST["bdayid"];
        $ebirthdayname = $_POST["ebirthdayname"];
        $ebmassge = $_POST["business"];
        $ewmobile = $_POST["mobile"];
        $edob= $_POST["dob"];
        $upbimage = "";
        $upbimges = "assets/birthdayimages/";
        if (!empty($_FILES["bimage"]["name"])) {
            $config["overwrite"] = true;
            $config["upload_path"] = "assets/birthdayimages/"; // path where we have to store
            $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
            $config["file_name"] = $bdayid;
            //Load upload library and initialize configuration
            $this->load->library("upload", $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload("bimage")) {
                echo $this->upload->display_errors();  
               
                // file name
            } else {
                $uploadData = $this->upload->data();
                $config['image_library'] = 'gd2';  
                $config['source_image'] = './assets/birthdayimages/'.$uploadData["file_name"];  
                $config['create_thumb'] = FALSE;  
                $config['maintain_ratio'] = FALSE;  
                $config['quality'] = '100%';  
                $config['width'] = 150;  
                $config['height'] = 150;  
                $config['new_image'] = './assets/birthdayimages/'.$uploadData["file_name"];  
                $this->load->library('image_lib', $config);  
                $this->image_lib->resize(); 
              
                $upbd = $uploadData["file_name"];
                $upbimage = $upbimges .= $upbd . "";
            }
        } else {
            $upbimage = $_POST["upbimage"];
        }
        $upbirthday = [
            "name" => $ebirthdayname,
            "massge" => $ebmassge,
            "mobile" => $ewmobile,
            "dob" => $edob,
            "image" => $upbimage

        ];
        $data = $this->MatrimonyRagsitration->upbdayinfo($upbirthday,$bdayid);
        if ($data) {
            $data = ["success" => 1];
        } else {
            $data = ["error" => 0];
        }
        echo json_encode($data);
    }
    public function condolence()
    {
        $ids = $_SESSION["id"];

        $result["data"] = $this->MatrimonyRagsitration->getdetails($ids);

        $this->load->view("include/dhader.php", $result);
        $this->load->view("matrimony/condolence.php");
        $this->load->view("include/cofooter.php");
    }
    public function addcondolence()
    {
        $logid = $_SESSION["id"];
        $condolencename = $_POST["condolencename"];
        $comassge = $_POST["business"];
        $cwmobile = $_POST["mobile"];
        $dod = $_POST["dob"];
    
        $condolence = [
            "logid" => $logid,
            "name" => $condolencename,
            "massge" => $comassge,
            "mobile" => $cwmobile,
            "dod" => $dod,
        
        ];
       
            $data = $this->MatrimonyRagsitration->addcondolence($condolence);

            if ($data) {
                $dimage = "";
                $dimages = "assets/condolenceimages/";
                if (!empty($_FILES["dimage"]["name"])) {
                    $config["upload_path"] = "assets/condolenceimages/"; // path where we have to store
                    $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
                    $config["file_name"] = $data;
                    //Load upload library and initialize configuration
                    $this->load->library("upload", $config);
                    $this->upload->initialize($config);
                    if (!$this->upload->do_upload("dimage")) {
                        echo $this->upload->display_errors();  
                        // file name
                    } else {
                        $uploadData = $this->upload->data();
                        $config['image_library'] = 'gd2';  
                        $config['source_image'] = './assets/condolenceimages/'.$uploadData["file_name"];  
                        $config['create_thumb'] = FALSE;  
                        $config['maintain_ratio'] = FALSE;  
                        $config['quality'] = '100%';  
                        $config['width'] = 150;  
                        $config['height'] = 150;  
                        $config['new_image'] = './assets/condolenceimages/'.$uploadData["file_name"];  
                        $this->load->library('image_lib', $config);  
                        $this->image_lib->resize(); 
                        $drvs = $uploadData["file_name"];
                        $dimage = $dimages .= $drvs . "";
                    }
                    $dvb = ["image" => $dimage];

                $data = $this->MatrimonyRagsitration->updatdodimage($dvb,$data);
                    if ($data) {
                        $data = ["success" => 1];
                    }
                }
            } else {
                $data = ["error" => 0];
            }
        
        echo json_encode($data);
    }
    public function condolencelist()
    {
        $ids = $_SESSION["id"];

        $result["data"] = $this->MatrimonyRagsitration->getdetails($ids);
        $result["condolencelist"] = $this->MatrimonyRagsitration->condolencelist($ids);
        $this->load->view("include/dhader.php", $result);
        $this->load->view("matrimony/condolencelist.php",$result);
        $this->load->view("include/cofooter.php");
    }
    public function updatcondolence($udrid)
    {
        $ids = $_SESSION["id"];
        $result["data"] = $this->MatrimonyRagsitration->getdetails($ids);
        $result["cupday"] = $this->MatrimonyRagsitration->getcondolence($udrid);
        $this->load->view("include/dhader.php", $result);
        $this->load->view("matrimony/editcondolence.php", $result);
        $this->load->view("include/cofooter.php");
    }
    public function condolencupdate()
    {
        $ddayid = $_POST["ddayid"];
        $dname = $_POST["name"];
        $dbmassge = $_POST["business"];
        $dwmobile = $_POST["mobile"];
        $udob = $_POST["udod"];
        $updimage = "";
        $updimges = "assets/condolenceimages/";
        if (!empty($_FILES["dimage"]["name"])) {
            $config["overwrite"] = true;
            $config["upload_path"] = "assets/condolenceimages/"; // path where we have to store
            $config["allowed_types"] = "jpg|jpeg|png|gif"; // allowed types
            $config["file_name"] = $ddayid;
            //Load upload library and initialize configuration
            $this->load->library("upload", $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload("dimage")) {
                echo $this->upload->display_errors(); 
              
                // file name
            } else {
                $uploadData = $this->upload->data();
                        $config['image_library'] = 'gd2';  
                        $config['source_image'] = './assets/condolenceimages/'.$uploadData["file_name"];  
                        $config['create_thumb'] = FALSE;  
                        $config['maintain_ratio'] = FALSE;  
                        $config['quality'] = '100%';  
                        $config['width'] = 166;  
                        $config['height'] = 185;  
                        $config['new_image'] = './assets/condolenceimages/'.$uploadData["file_name"];  
                        $this->load->library('image_lib', $config);  
                        $this->image_lib->resize();
                        $updd = $uploadData["file_name"];
                        $updimage = $updimges .= $updd . "";
               
            }
        } else {
            $updimage = $_POST["updimage"];
        }
        $upcondolenc = [
            "name" => $dname,
            "massge" => $dbmassge,
            "mobile" => $dwmobile,
            "dod" => $udob,
            "image" => $updimage

        ];
        $data = $this->MatrimonyRagsitration->upcondolencinfo($upcondolenc,$ddayid);
        if ($data) {
            $data = ["success" => 1];
        } else {
            $data = ["error" => 0];
        }
        echo json_encode($data);
    }

    public function bde()
    
    {
        $ids = $_SESSION["id"];

        $result["datas"] = $this->MatrimonyRagsitration->getdetails($ids);
        $result["row"] = $this->Directoryinfo->brithdayinfo();
        $this->load->view("include/metroheader.php",$result);
        $this->load->view("front/brithday.php", $result);
        $this->load->view("include/metrofooter.php");
    }
    public function dcondolence()
   
    {
        $ids = $_SESSION["id"];

        $result["datas"] = $this->MatrimonyRagsitration->getdetails($ids);
        $result["row"] = $this->Directoryinfo->condolenceinfo();
        $this->load->view("include/metroheader.php",$result);
        $this->load->view("front/condolence.php", $result);
        $this->load->view("include/metrofooter.php");
    }
    public function directory()
    {
        $ids = $_SESSION["id"];

        $result["datas"] = $this->MatrimonyRagsitration->getdetails($ids);
        $result["row"] = $this->Directoryinfo->directory();
        $this->load->view("include/metroheader.php" , $result);
        $this->load->view("front/rathore-directory.php", $result);
        $this->load->view("include/metrofooter.php");
    }
    public function Event()
    {
        $ids = $_SESSION["id"];

        $result["datas"] = $this->MatrimonyRagsitration->getdetails($ids);
        $result["row"] = $this->Directoryinfo->event();
        $this->load->view("include/metroheader.php",$result);
        $this->load->view("front/Event.php",$result);
        $this->load->view("include/metrofooter.php");
    }
    public function logout()
    {
        $this->session->unset_userdata("id");
        $this->session->sess_destroy();
        redirect("/");
    }
    public function blog()
    {
        $ids = $_SESSION["id"];

        $result["data"] = $this->MatrimonyRagsitration->getdetails($ids);

        $this->load->view("include/dhader.php", $result);
        $this->load->view("matrimony/blog.php");
        $this->load->view("include/cofooter.php");
    }
    public function addblog()
    {
        $logid = $_SESSION["id"];
        $category = $_POST["category"];
        $hadding = $_POST["hadding"];
        $description = $_POST["description"];
    
        $blog = [
            "logid" => $logid,
            "category" => $category,
            "hadding" => $hadding,
            "description" => $description,
        
        ];
       
            $bdata = $this->MatrimonyRagsitration->addblog($blog);

            if ($bdata) {
                $blogimg = "";
                $blogimages = "assets/blog/";
                if (!empty($_FILES["bimage"]["name"])) {
                    $config["upload_path"] = "assets/blog/"; // path where we have to store
                    $config["allowed_types"] = "jpg|jpeg|png|gif|webp"; // allowed types
                    $config["file_name"] = $bdata;
                    //Load upload library and initialize configuration
                    $this->load->library("upload", $config);
                    $this->upload->initialize($config);
                    if ($this->upload->do_upload("bimage")) {
                        $uploadData = $this->upload->data();
                        $bvs = $uploadData["file_name"];
                        $blogimg = $blogimages .= $bvs . "";
                        // file name
                    } else {
                        $blogimg = "assets/usercover/rathore.png";
                    }
                    $bvb = ["bimage" => $blogimg];

                $data = $this->MatrimonyRagsitration->updateblogimage($bvb,$bdata);
                    if ($data) {
                        $data = ["success" => 1];
                    }
                }
            } else {
                $data = ["error" => 0];
            }
        
        echo json_encode($data);
    }
}
?>
