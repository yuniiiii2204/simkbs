<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->load->view('login');
		}else{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$cek = $this->SistemModel->cek_login($username, $password);
			if($cek == FALSE){
				$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
				<strong>Username atau Password salah!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>');
				redirect('welcome');

			}else{
				$this->session->set_userdata('hak_akses',$cek->hak_akses);
				$this->session->set_userdata('username',$cek->username);
				$this->session->set_userdata('id',$cek->id);

				switch ($cek->hak_akses) {
					case 'admin' : redirect('dashboard');						
						break;

					case 'user' : redirect('masyarakat');						
						break;
				}
			}
		}
	}
	public function Masyarakat(){
		
		
			$this->_rulesMasyarakat();

			if($this->form_validation->run() == FALSE){
				$this->load->view('masyarakat');
			}else{

				$nik = $this->input->post('nik');

				$cek = $this->db->query("SELECT * FROM data_penduduk WHERE nik = '$nik'")->result();
				if(empty($cek)){
					$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
					<strong>nik anda tidak terdaftar!</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>');
					redirect('welcome/masyarakat');

				}else{
					redirect('masyarakat/dashboard');
				}
			}
	}
	public function _rules(){
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');
	}
	public function _rulesMasyarakat(){
		$this->form_validation->set_rules('nik','nik','required');
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('welcome');
	}
}
