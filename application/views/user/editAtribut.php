<div class="container">
	<?php echo $this->session->flashdata('pesan') ?>
	<h3>Edit Data Atribut</h3>
	<form method="POST" action="<?php echo base_url('atribut/editAtributkAksi') ?>" enctype="multipart/form-data">
	<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Kode Atribut</span>
  <input type="text" name="kode_atribut" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  <?php echo form_error('kode_atribut', '<div class="text-small text-danger"></div>') ?>
</div>
	<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Nama Atribut</span>
  <input type="text" name="nama_atribut" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  <?php echo form_error('nama_atribut', '<div class="text-small text-danger"></div>') ?>
</div>
  <div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Nama Nilai Atribut</span>
  <input type="text" name="nama_nilai_atribut" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
  <?php echo form_error('nama_nilai_atribut', '<div class="text-small text-danger"></div>') ?>
</div>
<button type="sumbit" class="btn btn-primary">Simpan</button>
</form>
</div>