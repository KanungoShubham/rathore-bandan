<?php
class Page extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library("session");

        if (
            empty(
                $this->session->userdata("id") &&
                    $this->session->userdata("logged_in") == true
            )
        ) {
            redirect(base_url() . "Home");
        }
    }

    function index()
    {
        //Allowing akses to admin only
        if ($this->session->userdata("userrole") === "1") {
            redirect(base_url() . "Matrimony");
        } else {
            echo "Access Denied";
        }
    }
}
?>