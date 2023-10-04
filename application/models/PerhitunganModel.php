<?php 

class PerhitunganModel extends CI_model{
	public function hitungKriteria($atribut)
	{
		$data = [
			'total' => [],
			'layak' => [],
			'tidak_layak' => [],
			'entropy' => []
		];

		foreach ($atribut as $attr) {
			$this->db->select($attr . ', COUNT(*) as jumlah');
			$this->db->group_by($attr);
			$query = $this->db->get('data_penduduk');

			foreach ($query->result() as $row) {
				$data['total'][$attr][$row->$attr] = $row->jumlah;
			}

			$this->db->select($attr . ', COUNT(*) as jumlah');
			$this->db->where('keterangan', 'Layak');
			$this->db->group_by($attr);
			$queryLayak = $this->db->get('data_penduduk');

			foreach ($queryLayak->result() as $row) {
				$data['layak'][$attr][$row->$attr] = $row->jumlah;
			}

			$this->db->select($attr . ', COUNT(*) as jumlah');
			$this->db->where('keterangan', 'Tidak Layak');
			$this->db->group_by($attr);
			$queryTidakLayak = $this->db->get('data_penduduk');

			foreach ($queryTidakLayak->result() as $row) {
				$data['tidak_layak'][$attr][$row->$attr] = $row->jumlah;
			}

			foreach ($data['total'][$attr] as $value => $jumlahTotal) {
				$pLayak = isset($data['layak'][$attr][$value]) ? $data['layak'][$attr][$value] / $jumlahTotal : 0;
				$pTidakLayak = isset($data['tidak_layak'][$attr][$value]) ? $data['tidak_layak'][$attr][$value] / $jumlahTotal : 0;

				$entropy = $this->calculateEntropy($pLayak, $pTidakLayak);
				$data['entropy'][$attr][$value] = $entropy;
			}
		}

		return $data;
	}


	public function calculateEntropyFromCounts($total, $layak, $tidakLayak)
	{
		$pLayak = $layak / $total;
		$pTidakLayak = $tidakLayak / $total;

		return $this->calculateEntropy($pLayak, $pTidakLayak);
	}
	public function hitungJumlahData()
	{
		$jumlahData = $this->db->count_all('data_penduduk');

		$this->db->where('keterangan', 'Layak');
		$jumlahLayak = $this->db->count_all_results('data_penduduk');

		$this->db->where('keterangan', 'Tidak Layak');
		$jumlahTidakLayak = $this->db->count_all_results('data_penduduk');

		$entropy = $this->calculateEntropyFromCounts($jumlahData,
			$jumlahLayak,
			$jumlahTidakLayak
		);
		$totalEntropy = $this->calculateEntropyFromCounts($jumlahData, $jumlahLayak, $jumlahTidakLayak);

		return [
			'total' => $jumlahData,
			'layak' => $jumlahLayak,
			'tidak_layak' => $jumlahTidakLayak,
			'entropy' => $entropy,
			'total_entropy' => $totalEntropy,
		];
		
	}
	public function hitungKriteriaPendidikan()
	{
		$data = [
			'total' => [],
			'layak' => [],
			'tidak_layak' => [],
			'entropy' => [],
			'information_gain' => [],
			// 'split_info' => [],
			// 'gain_ratio' => []
		];

		$this->db->select('pendidikan, COUNT(*) as jumlah');
		$this->db->group_by('pendidikan');
		$jumlahData = $this->db->get('data_penduduk');

		foreach ($jumlahData->result() as $row) {
			$data['total'][$row->pendidikan] = $row->jumlah;
		}

		$this->db->select('pendidikan, COUNT(*) as jumlah');
		$this->db->where('keterangan', 'Layak');
		$this->db->group_by('pendidikan');
		$jumlahLayak = $this->db->get('data_penduduk');

		foreach ($jumlahLayak->result() as $row) {
			$data['layak'][$row->pendidikan] = $row->jumlah;
		}

		$this->db->select('pendidikan, COUNT(*) as jumlah');
		$this->db->where('keterangan', 'Tidak Layak');
		$this->db->group_by('pendidikan');
		$jumlahTidakLayak = $this->db->get('data_penduduk');

		foreach ($jumlahTidakLayak->result() as $row) {
			$data['tidak_layak'][$row->pendidikan] = $row->jumlah;
		}
		// Hitung entropy
		foreach ($data['total'] as $pendidikan => $jumlahTotal) {
			$pLayak = isset($data['layak'][$pendidikan]) ? $data['layak'][$pendidikan] / $jumlahTotal : 0;
			$pTidakLayak = isset($data['tidak_layak'][$pendidikan]) ? $data['tidak_layak'][$pendidikan] / $jumlahTotal : 0;

			$entropy = $this->calculateEntropy($pLayak, $pTidakLayak);
			$data['entropy'][$pendidikan] = $entropy;
		}
		// Menghitung split info
		$total_data = array_sum($data['total']);
		foreach ($data['total'] as $pendidikan => $jumlahTotal) {
			$p_ratio = $jumlahTotal / $total_data;
			$split_info = -$p_ratio * log($p_ratio, 2);
			$data['split_info'][$pendidikan] = $split_info;
		}
		return $data;
	}

	private function calculateEntropy($pLayak, $pTidakLayak)
	{
		if ($pLayak == 0 || $pTidakLayak == 0) {
			return 0;
		}
		$entropy = -$pLayak * log($pLayak, 2) - $pTidakLayak * log($pTidakLayak, 2);
		return $entropy;
	}

	public function hitungKriteriaPekerjaan()
	{
		$data = [
			'total' => [],
			'layak' => [],
			'tidak_layak' => [],
			'entropy' => []
		];

		$this->db->select('pekerjaan, COUNT(*) as jumlah');
		$this->db->group_by('pekerjaan');
		$query = $this->db->get('data_penduduk');

		foreach ($query->result() as $row) {
			$data['total'][$row->pekerjaan] = $row->jumlah;
		}

		$this->db->select('pekerjaan, COUNT(*) as jumlah');
		$this->db->where('keterangan', 'Layak');
		$this->db->group_by('pekerjaan');
		$queryLayak = $this->db->get('data_penduduk');

		foreach ($queryLayak->result() as $row) {
			$data['layak'][$row->pekerjaan] = $row->jumlah;
		}

		$this->db->select('pekerjaan, COUNT(*) as jumlah');
		$this->db->where('keterangan', 'Tidak Layak');
		$this->db->group_by('pekerjaan');
		$queryTidakLayak = $this->db->get('data_penduduk');

		foreach ($queryTidakLayak->result() as $row) {
			$data['tidak_layak'][$row->pekerjaan] = $row->jumlah;
		}
		// Hitung entropy
		foreach ($data['total'] as $pekerjaan => $jumlahTotal) {
			$pLayak = isset($data['layak'][$pekerjaan]) ? $data['layak'][$pekerjaan] / $jumlahTotal : 0;
			$pTidakLayak = isset($data['tidak_layak'][$pekerjaan]) ? $data['tidak_layak'][$pekerjaan] / $jumlahTotal : 0;

			$entropy = $this->calculateEntropy($pLayak, $pTidakLayak);
			$data['entropy'][$pekerjaan] = $entropy;
		}
		// Menghitung split info
		$total_data = array_sum($data['total']);
		foreach ($data['total'] as $pekerjaan => $jumlahTotal) {
			$p_ratio = $jumlahTotal / $total_data;
			$split_info = -$p_ratio * log($p_ratio, 2);
			$data['split_info'][$pekerjaan] = $split_info;
		}

		return $data;
	}
	public function hitungKriteriaStatus()
	{
		$data = [
			'total' => [],
			'layak' => [],
			'tidak_layak' => [],
			'entropy' => []
		];

		$this->db->select('status_perkawinan, COUNT(*) as jumlah');
		$this->db->group_by('status_perkawinan');
		$query = $this->db->get('data_penduduk');

		foreach ($query->result() as $row) {
			$data['total'][$row->status_perkawinan] = $row->jumlah;
		}

		$this->db->select('status_perkawinan, COUNT(*) as jumlah');
		$this->db->where('keterangan', 'Layak');
		$this->db->group_by('status_perkawinan');
		$queryLayak = $this->db->get('data_penduduk');

		foreach ($queryLayak->result() as $row) {
			$data['layak'][$row->status_perkawinan] = $row->jumlah;
		}

		$this->db->select('status_perkawinan, COUNT(*) as jumlah');
		$this->db->where('keterangan', 'Tidak Layak');
		$this->db->group_by('status_perkawinan');
		$queryTidakLayak = $this->db->get('data_penduduk');

		foreach ($queryTidakLayak->result() as $row) {
			$data['tidak_layak'][$row->status_perkawinan] = $row->jumlah;
		}
		// Hitung entropy
		foreach ($data['total'] as $status_perkawinan => $jumlahTotal) {
			$pLayak = isset($data['layak'][$status_perkawinan]) ? $data['layak'][$status_perkawinan] / $jumlahTotal : 0;
			$pTidakLayak = isset($data['tidak_layak'][$status_perkawinan]) ? $data['tidak_layak'][$status_perkawinan] / $jumlahTotal : 0;

			$entropy = $this->calculateEntropy($pLayak, $pTidakLayak);
			$data['entropy'][$status_perkawinan] = $entropy;
		}
		// Menghitung split info
		$total_data = array_sum($data['total']);
		foreach ($data['total'] as $status_perkawinan => $jumlahTotal) {
			$p_ratio = $jumlahTotal / $total_data;
			$split_info = -$p_ratio * log($p_ratio, 2);
			$data['split_info'][$status_perkawinan] = $split_info;
		}

		return $data;
	}
	public function hitungKriteriaPenghasilan()
	{
		$data = [
			'total' => [],
			'layak' => [],
			'tidak_layak' => [],
			'entropy' => []
		];

		$this->db->select('penghasilan, COUNT(*) as jumlah');
		$this->db->group_by('penghasilan');
		$query = $this->db->get('data_penduduk');

		foreach ($query->result() as $row) {
			$data['total'][$row->penghasilan] = $row->jumlah;
		}

		$this->db->select('penghasilan, COUNT(*) as jumlah');
		$this->db->where('keterangan', 'Layak');
		$this->db->group_by('penghasilan');
		$queryLayak = $this->db->get('data_penduduk');

		foreach ($queryLayak->result() as $row) {
			$data['layak'][$row->penghasilan] = $row->jumlah;
		}

		$this->db->select('penghasilan, COUNT(*) as jumlah');
		$this->db->where('keterangan', 'Tidak Layak');
		$this->db->group_by('penghasilan');
		$queryTidakLayak = $this->db->get('data_penduduk');

		foreach ($queryTidakLayak->result() as $row) {
			$data['tidak_layak'][$row->penghasilan] = $row->jumlah;
		}
		// Hitung entropy
		foreach ($data['total'] as $penghasilan => $jumlahTotal) {
			$pLayak = isset($data['layak'][$penghasilan]) ? $data['layak'][$penghasilan] / $jumlahTotal : 0;
			$pTidakLayak = isset($data['tidak_layak'][$penghasilan]) ? $data['tidak_layak'][$penghasilan] / $jumlahTotal : 0;

			$entropy = $this->calculateEntropy($pLayak, $pTidakLayak);
			$data['entropy'][$penghasilan] = $entropy;
		}
		// Menghitung split info
		$total_data = array_sum($data['total']);
		foreach ($data['total'] as $penghasilan => $jumlahTotal) {
			$p_ratio = $jumlahTotal / $total_data;
			$split_info = -$p_ratio * log($p_ratio, 2);
			$data['split_info'][$penghasilan] = $split_info;
		}
		return $data;
	}
	
}
?>