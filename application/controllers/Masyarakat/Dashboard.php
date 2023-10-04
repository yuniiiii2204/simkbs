<?php

class Dashboard extends CI_Controller{
	public function index(){
		
		$data['title'] = "Dashboard";
		$this->load->view('masyarakat/templates/header');
        $this->load->view('masyarakat/templates/sidebar');
        $this->load->view('masyarakat/dashboard',$data);
        $this->load->view('masyarakat/templates/footder');
	}
	
}

 ?>
