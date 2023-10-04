<?php

class Dashboard extends CI_Controller{
	public function index(){
		
		$data['title'] = "Dashboard";
		$this->load->view('user/templates/header');
        $this->load->view('user/templates/sidebar');
        $this->load->view('user/dashboard',$data);
        $this->load->view('user/templates/footder');
	}
	
}

 ?>