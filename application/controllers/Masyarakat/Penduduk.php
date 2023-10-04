<?php

class Penduduk extends CI_Controller{
	public function index(){
		$data['t_penduduk'] = $this->db->query("SELECT * FROM data_penduduk")->result();

		$this->load->view('masyarakat/templates/header');
        $this->load->view('masyarakat/templates/sidebar');
        $this->load->view('masyarakat/penduduk',$data);
        $this->load->view('masyarakat/templates/footder');
	}

}

 ?>