<?php
defined("BASEPATH") or exit("No direct script access allowed");

class CAuth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("cookie");
        $this->load->library("session");
        $this->load->helper("url");
        $this->load->helper("form");
        $this->load->model("Community_model");
    }

    public function logs()
    {
        $chemail = $this->input->post("chemail");
        $chpassword = $this->input->post("chpassword");
        $reulit = $this->Community_model->log($chemail, md5($chpassword));

        if ($reulit->num_rows() > 0) {
            $data = $reulit->row_array();
            $roles = $data["userrole"];
            $id = $data["cid"];
            $sessdata = [
                "cid" => $id,
                "userrole" => $roles,
                "logged_in" => true,
            ];
            $this->session->set_userdata($sessdata);
            if ($roles == 2) {
                redirect("CPage");
            }
            if ($roles == 3) {
                redirect("Cpage/State");
            }
            if ($roles == 4) {
                redirect("Cpage/Nationl");
            }
            if ($roles == 5) {
                redirect("Cpage/Newspaper");
            }
            if ($roles == 6) {
                redirect("Cpage/Newschannel");
            }
            if ($roles == 7) {
                redirect("Cpage/socialgroups");
            }
        }
        // else{
        // 	echo "hrm";
        // 	redirect('Home');
        // }
    }
}
?>
