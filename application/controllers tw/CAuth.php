<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

public function __construct() {
        parent::__construct();
          $this->load->helper('cookie');
      $this->load->library('session');   
      $this->load->helper('url');
      $this->load->helper('form');
     $this->load->model('Community_model');
     
       

}
	 

	public function logs()
	{
		$chemail=$this->input->post('chemail');
		$chpassword=$this->input->post('chpassword');
		$reulit=$this->Community_model->log($chemail,md5($chpassword));
		
		if($reulit->num_rows()>0)

		{
			$data=$reulit->row_array();
			$roles=$data['userrole'];
			$id=$data['cid'];
			$sessdata = array(
                  'cid'=>$id,
                 'userrole'=> $roles,
                  'logged_in'=> TRUE
                 );
			$this->session->set_userdata($sessdata);
				if($roles == 2)
			{
				redirect('Page');

			}
			if($roles == 3)
			{
				redirect('page/State');

			}
			if($roles == 4)
			{
				redirect('page/Nationl');

			}
				if($roles == 5)
			{
				redirect('page/Newspaper');

			}
			
			
		}
		// else{
		// 	echo "hrm";
		// 	redirect('Home');
		// }
		

		
	}
	
}
