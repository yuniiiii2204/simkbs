<div class="container">
	<?php echo $this->session->flashdata('pesan') ?>
	<h3>Tambah Data Penduduk</h3>
	<form method="POST" action="<?php echo base_url('penduduk/tambahPenduduk') ?>" enctype="multipart/form-data">
	<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">No KK</span>
  <input type="text" name="no_kk" class="form-control"  minlength="16" maxlength="16">
  <?php echo form_error('no_kk', '<div class="text-small text-danger"></div>') ?>
</div>
<button type="sumbit" class="btn btn-primary">Simpan</button>
</form>
</div>