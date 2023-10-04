<?php

class Laporan extends CI_Controller{
	public function tampil(){
		$pen 				= $this->input->post('tampil_dusun');
		if($pen == ''){
			$data['t_penduduk'] = $this->db->query("SELECT * FROM data_penduduk WHERE keterangan = 'Layak'")->result();
		} else {
			$data['t_penduduk'] = $this->db->query("SELECT * FROM data_penduduk WHERE keterangan = 'Layak' && alamat_dusun = '$pen'")->result();
		}

		$this->load->view('user/templates/header');
        $this->load->view('user/templates/sidebar');
        $this->load->view('user/laporan',$data);
        $this->load->view('user/templates/footder');
	}

}
?>