<div class="container">
	<?php echo $this->session->flashdata('pesan') ?>
	<h3>Tambah Data Penduduk</h3>
	<form method="POST" action="<?php echo base_url('penduduk/tambahPendudukAksi') ?>" enctype="multipart/form-data">
	<div class="input-group mb-3">
  <input type="hidden" name="no_kk" class="form-control" minlength="16" maxlength="16" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $no_kk ?>">
  <?php echo form_error('no_kk', '<div class="text-small text-danger"></div>') ?>
</div>
	<div class="input-group mb-3">
  <input type="hidden" name="nik" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $nik ?>">
  <?php echo form_error('nik', '<div class="text-small text-danger"></div>') ?>
</div>
	<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Nama</span>
  <input type="text" name="nama" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  <?php echo form_error('nama', '<div class="text-small text-danger"></div>') ?>
</div>
	<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Alamat/Dusun</span>
  <input type="text" name="alamat_dusun" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  <?php echo form_error('alamat_dusun', '<div class="text-small text-danger"></div>') ?>
</div>
	<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Jenis Kelamin</span>
  <input type="text" name="jk" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  <?php echo form_error('jk', '<div class="text-small text-danger"></div>') ?>
</div>
	<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Tempat Lahir</span>
  <input type="text" name="tempat_lahir" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  <?php echo form_error('tempat_lahir', '<div class="text-small text-danger"></div>') ?>
</div>
	<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Tanggal Lahir</span>
  <input type="text" name="tgl_lahir" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  <?php echo form_error('tgl_lahir', '<div class="text-small text-danger"></div>') ?>
</div>
	<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Agama</span>
  <input type="text" name="agama" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  <?php echo form_error('agama', '<div class="text-small text-danger"></div>') ?>
</div>
	<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Pendidikan</span>
  <input type="text" name="pendidikan" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  <?php echo form_error('pendidikan', '<div class="text-small text-danger"></div>') ?>
</div>
	<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Pekerjaan</span>
  <input type="text" name="pekerjaan" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  <?php echo form_error('pekerjaan', '<div class="text-small text-danger"></div>') ?>
</div>
	<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Status Perkawinan</span>
  <input type="text" name="status_perkawinan" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  <?php echo form_error('status_perkawinan', '<div class="text-small text-danger"></div>') ?>
</div>
	<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Penghasilan</span>
  <input type="text" name="penghasilan" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  <?php echo form_error('penghasilan', '<div class="text-small text-danger"></div>') ?>
</div>
<button type="sumbit" class="btn btn-primary">Simpan</button>
</form>
</div>