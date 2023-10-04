<?php

class Penduduk extends CI_Controller{
	public function index(){
		$data['t_penduduk'] = $this->db->query("SELECT * FROM data_penduduk")->result();

		$this->load->view('user/templates/header');
        $this->load->view('user/templates/sidebar');
        $this->load->view('user/penduduk',$data);
        $this->load->view('user/templates/footder');
	}
	public function tambahPenduduk(){

		$no_kk		= $this->input->post('no_kk');
		$nik		= $this->input->post('nik');
		if (empty($no_kk)) {
			$this->load->view('user/templates/header');
			$this->load->view('user/templates/sidebar');
			$this->load->view('user/tambahPenduduk');
			$this->load->view('user/templates/footder');
		} else {
			$cek_data_penduduk = $this->db->query("SELECT * FROM data_penduduk WHERE no_kk = '$no_kk'")->result();
			if (!empty($cek_data_penduduk)) {
					$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> No KK Sudah Ada Sebelumnya! <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>');
			
					redirect('penduduk/tambahPenduduk');
			} else {
				if (empty($nik)){
					$data['no_kk'] = $no_kk;
					$this->load->view('user/templates/header');
					$this->load->view('user/templates/sidebar');
					$this->load->view('user/tambahPenduduk2',$data);
					$this->load->view('user/templates/footder');
				} else {
					$cek_nik 		= $this->db->query("SELECT * FROM data_penduduk WHERE nik = '$nik'")->result();
					if (!empty($cek_nik)) {
						$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> NIK Sudah Ada Sebelumnya! <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>');
			
						redirect('penduduk/tambahPenduduk');
					} else {
						$data['no_kk'] 	= $no_kk;
						$data['nik'] 	= $nik;
						$this->load->view('user/templates/header');
						$this->load->view('user/templates/sidebar');
						$this->load->view('user/tambahPenduduk3',$data);
						$this->load->view('user/templates/footder');
					}
				}
			}
		}
		
	}
	public function tambahPendudukAksi(){
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->tambahpenduduk();
		}else {
		$nik 			= $this->input->post('nik');
		$cek 			= $this->db->query("SELECT * FROM data_penduduk WHERE nik = '$nik'")->result();
		if (!empty($cek)){
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> Nik Sudah Ada Sebelumnya! <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');

		redirect('penduduk/tambahPenduduk');
		}else {
			$no_kk 					= $this->input->post('no_kk');
			$nama 					= $this->input->post('nama');
			$alamat_dusun			= $this->input->post('alamat_dusun');
			$jk 					= $this->input->post('jk');
			$tempat_lahir 			= $this->input->post('tempat_lahir');
			$tgl_lahir 				= $this->input->post('tgl_lahir');
			$agama 					= $this->input->post('agama');
			$pendidikan 			= $this->input->post('pendidikan');
			$pekerjaan 				= $this->input->post('pekerjaan');
			$status_perkawinan		= $this->input->post('status_perkawinan');
			$penghasilan 			= $this->input->post('penghasilan');




			$data = array(
			'no_kk' 				=> $no_kk,
			'nik' 					=> $nik,
			'nama' 					=> $nama,
			'alamat_dusun' 			=> $alamat_dusun,
			'jk' 					=> $jk,
			'tempat_lahir' 			=> $tempat_lahir,
			'tgl_lahir' 			=> $tgl_lahir,
			'agama' 				=> $agama,
			'pendidikan' 			=> $pendidikan,
			'pekerjaan' 			=> $pekerjaan,
			'status_perkawinan' 	=> $status_perkawinan,
			'penghasilan' 			=> $penghasilan,
			
		);


		$this->SistemModel->insert_data($data,'data_penduduk');
		$this->session->set_flashdata('pesan','<div class="alert alert-primary alert-dismissible fade show" role="alert"> Data Penduduk Berhasil di Tambahkan! <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
		
		redirect('penduduk');
		}
	}
	}
	public function editPenduduk($id_penduduk){

		$data['e_penduduk'] = $this->db->query("SELECT * FROM data_penduduk WHERE id_penduduk = '$id_penduduk'")->result();

		$this->load->view('user/templates/header');
        $this->load->view('user/templates/sidebar');
        $this->load->view('user/editPenduduk',$data);
        $this->load->view('user/templates/footder');
	}
	public function editPendudukAksi(){
		$this->_rules();
		$id_penduduk 					= $this->input->post('id_penduduk');


		if($this->form_validation->run() == FALSE){
			$this->editpenduduk();
		}else {
			$no_kk 					= $this->input->post('no_kk');
			$nik					= $this->input->post('nik');
			$nama 					= $this->input->post('nama');
			$alamat_dusun			= $this->input->post('alamat_dusun');
			$jk 					= $this->input->post('jk');
			$tempat_lahir 			= $this->input->post('tempat_lahir');
			$tgl_lahir 				= $this->input->post('tgl_lahir');
			$agama 					= $this->input->post('agama');
			$pendidikan 			= $this->input->post('pendidikan');
			$pekerjaan 				= $this->input->post('pekerjaan');
			$status_perkawinan		= $this->input->post('status_perkawinan');
			$penghasilan 			= $this->input->post('penghasilan');




			$data = array(
			'no_kk' 				=> $no_kk,
			'nik' 					=> $nik,
			'nama' 					=> $nama,
			'alamat_dusun' 			=> $alamat_dusun,
			'jk' 					=> $jk,
			'tempat_lahir' 			=> $tempat_lahir,
			'tgl_lahir' 			=> $tgl_lahir,
			'agama' 				=> $agama,
			'pendidikan' 			=> $pendidikan,
			'pekerjaan' 			=> $pekerjaan,
			'status_perkawinan' 	=> $status_perkawinan,
			'penghasilan' 			=> $penghasilan,
			
		);

			$where 	= array(
				'id_penduduk'		=> $id_penduduk,
			);


		$this->SistemModel->update_data('data_penduduk',$data,$where);
		$this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert"> Data Penduduk berhasil di Update! <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
		
		redirect('penduduk');
		}
	}
	public function deletePenduduk($id_penduduk){
		$where = array(
			'id_penduduk'  => $id_penduduk,
		);
		$this->SistemModel->delete_data($where,'data_penduduk');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert"> Data Penduduk berhasil di Hapus! <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>');
		
		redirect('penduduk');
	}
	public function cetakPenduduk(){
		$dusun = $this->input->post('dusun');
		$data['t_penduduk'] = $this->db->query("SELECT * FROM data_penduduk WHERE alamat_dusun = '$dusun' && keterangan = 'Layak'")->result();

		$this->load->view('user/cetakPenduduk',$data);
	}
	public function _rules(){
		$this->form_validation->set_rules('no_kk','No KK','required');
		$this->form_validation->set_rules('nik','Nik','required|max_length[16]');
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('alamat_dusun','Alamat/Dusun','required');
		$this->form_validation->set_rules('jk','Jenis Kelamin','required');
		$this->form_validation->set_rules('tempat_lahir','Tempat Lahir','required');
		$this->form_validation->set_rules('tgl_lahir','Tanggal Lahir','required');
		$this->form_validation->set_rules('agama','Agama','required');
		$this->form_validation->set_rules('pendidikan','Pendidikan','required');
		$this->form_validation->set_rules('pekerjaan','Pekerjaaan','required');
		$this->form_validation->set_rules('status_perkawinan','Status Perkawiana','required');
		$this->form_validation->set_rules('penghasilan','Penghasilan','required');
	}

}

 ?>