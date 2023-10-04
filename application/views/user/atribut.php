<div class="container">
  <?php echo $this->session->flashdata('pesan') ?>
<h3>Data Atribut</h3>
<h6><a href="<?php echo base_url('atribut/tambahAtribut') ?>" type="button" class="btn btn-primary">Tambah Atribut</a></h6>
<table class="table table-bordered border-dark" style="width: 100%;">
  <thead class="table-info">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode Atribut</th>
      <th scope="col">Nama Atribut</th>
       <th scope="col">Nama Nilai Atribut</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $no=1; foreach($t_atribut as $t) : ?>
    <tr>
      <th scope="row"><?php echo $no++ ?></th>
      <td><?php echo $t->kode_atribut ?></td>
      <td><?php echo $t->nama_atribut ?></td>
      <td><?php echo $t->nama_nilai_atribut ?></td>
      <td>
        <a href="<?php echo base_url('atribut/editAtribut/'.$t->id_atribut) ?>" type="button" class="btn btn-info">Edit</a>
        <a onclick="return confirm('Yakin Hapus?')" href="<?php echo base_url('atribut/deleteAtribut/'.$t->id_atribut) ?>" type="button" class="btn btn-danger">Hapus</a>
    </td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
</div>