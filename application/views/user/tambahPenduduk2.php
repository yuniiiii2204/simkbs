<div class="container">
	<?php echo $this->session->flashdata('pesan') ?>
	<h3>Tambah Data Penduduk</h3>
	<form method="POST" action="<?php echo base_url('penduduk/tambahPenduduk') ?>" enctype="multipart/form-data">
	<div class="input-group mb-3">
  <input type="hidden" name="no_kk" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $no_kk ?>">
  <?php echo form_error('no_kk', '<div class="text-small text-danger"></div>') ?>
</div>
	<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Nik</span>
  <input type="text" name="nik" class="form-control" minlength="16" maxlength="16">
  <?php echo form_error('nik', '<div class="text-small text-danger"></div>') ?>
</div>
<button type="sumbit" class="btn btn-primary">Simpan</button>
</form>
</div>