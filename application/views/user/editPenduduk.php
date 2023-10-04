<div class="container">
	<?php echo $this->session->flashdata('pesan') ?>
	<h3>Edit Data Penduduk</h3>
	<form method="POST" action="<?php echo base_url('penduduk/editPendudukAksi') ?>" enctype="multipart/form-data">
    <?php foreach($e_penduduk as $e) : ?>
	<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">No KK</span>
  <input type="hidden" name="id_penduduk" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $e->id_penduduk ?>">
  <input type="text" name="no_kk" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $e->no_kk ?>">
  <?php echo form_error('no_kk', '<div class="text-small text-danger"></div>') ?>
</div>
	<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Nik</span>
  <input type="text" name="nik" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $e->nik ?>">
  <?php echo form_error('nik', '<div class="text-small text-danger"></div>') ?>
</div>
	<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Nama</span>
  <input type="text" name="nama" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $e->nama ?>">
  <?php echo form_error('nama', '<div class="text-small text-danger"></div>') ?>
</div>
	<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Alamat/Dusun</span>
  <input type="text" name="alamat_dusun" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $e->alamat_dusun ?>">
  <?php echo form_error('alamat_dusun', '<div class="text-small text-danger"></div>') ?>
</div>
	<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Jenis Kelamin</span>
  <input type="text" name="jk" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $e->jk ?>">
  <?php echo form_error('jk', '<div class="text-small text-danger"></div>') ?>
</div>
	<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Tempat Lahir</span>
  <input type="text" name="tempat_lahir" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $e->tempat_lahir ?>">
  <?php echo form_error('tempat_lahir', '<div class="text-small text-danger"></div>') ?>
</div>
	<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Tanggal Lahir</span>
  <input type="text" name="tgl_lahir" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $e->tgl_lahir ?>">
  <?php echo form_error('tgl_lahir', '<div class="text-small text-danger"></div>') ?>
</div>
	<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Agama</span>
  <input type="text" name="agama" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $e->agama ?>">
  <?php echo form_error('agama', '<div class="text-small text-danger"></div>') ?>
</div>
	<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Pendidikan</span>
  <input type="text" name="pendidikan" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $e->pendidikan ?>">
  <?php echo form_error('pendidikan', '<div class="text-small text-danger"></div>') ?>
</div>
	<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Pekerjaan</span>
  <input type="text" name="pekerjaan" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $e->pekerjaan ?>">
  <?php echo form_error('pekerjaan', '<div class="text-small text-danger"></div>') ?>
</div>
	<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Status Perkawinan</span>
  <input type="text" name="status_perkawinan" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $e->status_perkawinan ?>">
  <?php echo form_error('status_perkawinan', '<div class="text-small text-danger"></div>') ?>
</div>
	<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Penghasilan</span>
  <input type="text" name="penghasilan" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $e->penghasilan ?>">
  <?php echo form_error('penghasilan', '<div class="text-small text-danger"></div>') ?>
</div>
<?php endforeach; ?>
<button type="sumbit" class="btn btn-primary">Simpan</button>
</form>
</div>