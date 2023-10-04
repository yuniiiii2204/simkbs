<?php

class Perhitungan extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('PerhitunganModel');
	}
	
	public function index(){

		$data['kriteriaPendidikan'] = $this->PerhitunganModel->hitungKriteriaPendidikan();
		$data['kriteriaPekerjaan'] = $this->PerhitunganModel->hitungKriteriaPekerjaan();
		$data['kriteriaStatus'] = $this->PerhitunganModel->hitungKriteriaStatus();
		$data['kriteriaPenghasilan'] = $this->PerhitunganModel->hitungKriteriaPenghasilan();
		$data['jumlahData'] = $this->PerhitunganModel->hitungJumlahData();
		
		$atribut = ['pendidikan', 'pekerjaan', 'status_perkawinan', 'penghasilan']; // Atribut yang ingin dihitung
		$data['kriteria'] = $this->PerhitunganModel->hitungKriteria($atribut);


		$this->load->view('user/perhitungan',$data);
	}
	public function hasil()
	{
		$$data = [
			// 'page' => "Perhitungan",
			// 'kriteria' => $this->Perhitungan_model->get_kriteria(),
			// 'alternatif' => $this->Perhitungan_model->get_alternatif(),
			// 'hasil' => $this->Perhitungan_model->hasil(),
			// 'atribut_rata_rata' => array(),
			// 'bobot_kriteria' => $this->Perhitungan_model->get_bobot_kriteria(),
			// 'total_bobot_kriteria' => $this->Perhitungan_model->get_total_bobot_kriteria()
			
		];


	}
	
}

?>