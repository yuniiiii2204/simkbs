<?php

class Atribut extends CI_Controller{
	public function index(){
		$data['t_atribut'] = $this->db->query("SELECT * FROM data_atribut")->result();

		$this->load->view('user/templates/header');
        $this->load->view('user/templates/sidebar');
        $this->load->view('user/atribut',$data);
        $this->load->view('user/templates/footder');
	}
	public function tambahAtribut(){

		$this->load->view('user/templates/header');
        $this->load->view('user/templates/sidebar');
        $this->load->view('user/tambahAtribut');
        $this->load->view('user/templates/footder');
	}
	public function tambahAtributAksi(){
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->tambahatribut();
		}else {
		$kode_atribut 			= $this->input->post('kode_atribut');
		$cek 					= $this->db->query("SELECT * FROM data_atribut WHERE kode_atribut = '$kode_atribut'")->result();
		if (!empty($cek)){
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> Atribut Sudah Ada Sebelumnya! <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');

		redirect('atribut/tambahAtribut');
		}else {
			$nama_atribut 							= $this->input->post('nama_atribut');
			$nama_nilai_atribut 					= $this->input->post('nama_nilai_atribut');


			$data = array(
			'kode_atribut' 						=> $kode_atribut,
			'nama_atribut' 						=> $nama_atribut,
			'nama_nilai_atribut' 				=> $nama_nilai_atribut,
		);


		$this->SistemModel->insert_data($data,'data_atribut');
		$this->session->set_flashdata('pesan','<div class="alert alert-primary alert-dismissible fade show" role="alert"> Data Atribut Berhasil di Tambahkan! <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
		
		redirect('atribut');
		}
	}
	}
	public function editAtribut($id_atribut){

		$data['e_atribut'] = $this->db->query("SELECT * FROM data_atribut WHERE id_atribut = '$id_atribut'")->result();

		$this->load->view('user/templates/header');
        $this->load->view('user/templates/sidebar');
        $this->load->view('user/editAtribut',$data);
        $this->load->view('user/templates/footder');
	}
	public function editAtributAksi(){
		$this->_rules();
		$id_atribut 					= $this->input->post('id_atribut');


		if($this->form_validation->run() == FALSE){
			$this->editatribut();
		}else {
			$kode_atribut 						= $this->input->post('kode_atribut');
			$nama_atribut						= $this->input->post('nama_atribut');
			$nama_nilai_atribut					= $this->input->post('nama_nilai_atribut');


			$data = array(
			'kode_atribut' 						=> $kode_atribut,
			'nama_atribut' 						=> $nama_atribut,
			'nama_nilai_atribut' 				=> $nama_nilai_atribut,
			
		);

			$where 	= array(
				'id_atribut'		=> $id_atribut,
			);


		$this->SistemModel->update_data('data_atribut',$data,$where);
		$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert"> Data Atribut berhasil di Update! <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
		
		redirect('atribut');
		}
	}
	public function deleteAtribut($id_atribut){
		$where = array(
			'id_atribut'  => $id_atribut,
		);
		$this->SistemModel->delete_data($where,'data_atribut');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> Data Atribut berhasil di Hapus! <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
		
		redirect('atribut');
	}
	public function _rules(){
		$this->form_validation->set_rules('kode_atribut','Kode Atribut','required');
		$this->form_validation->set_rules('nama_atribut','Nama Atribut','required');
		$this->form_validation->set_rules('nama_nilai_atribut','Nama Nilai Atribut','required');
	}
}

 ?>