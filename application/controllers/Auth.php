<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("cookie");
        $this->load->library("session");
        $this->load->helper("url");
        $this->load->helper("form");
        $this->load->model("Auth_model");
    }

    public function log()
    {
        $Email = $this->input->post("Email");
        $password = $this->input->post("Password");
        $reulit = $this->Auth_model->log($Email, md5($password));

        if ($reulit->num_rows() > 0) {
            $data = $reulit->row_array();
            $role = $data["userrole"];
            $id = $data["id"];
            $sessdata = [
                "id" => $id,
                "userrole" => $role,
                "logged_in" => true,
            ];
            $this->session->set_userdata($sessdata);
            if ($role == 1) {
                redirect("Page");
            }
            if ($role == 20) {
                redirect("page/admin");
            }
        }
        // else{
        // 	echo "hrm";
        // 	redirect('Home');
        // }
    }
}
?>
