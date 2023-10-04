<div class="container">
  <?php echo $this->session->flashdata('pesan') ?>
<h3>Data Penduduk</h3>
<div>
<h6><a href="<?php echo base_url('penduduk/tambahPenduduk') ?>" type="button" class="btn btn-primary">Tambah Data</a>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Cetak
</button></h6>
</div>


<!-- Modal -->
<form method="POST" action="<?php echo base_url('penduduk/cetakPenduduk') ?>">
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <select name="dusun">
          <option value="Mattiro Baji">Mattiro Baji</option>
          <option value="Lajayya">Lajayya</option>
          <option value="Lantang">Lantang</option>
          <option value="Bt.Masunggu">Bt.Masunggu</option>
          <option value="Tombolo kota">Tombolo kota</option>
          <option value="Tombolo selatan">Tombolo selatan</option>
        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Cetak</button>
      </div>
    </div>
  </div>
</div>
</form>
<table class="table table-bordered border-dark" style="width: 200%;">
  <thead class="table-info">
    <tr>
      <th scope="col">No</th>
      <th scope="col">No KK</th>
      <th scope="col">Nik</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat/Dusun</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Tempat Lahir</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Agama</th>
      <th scope="col">Pendidikan</th>
      <th scope="col">Pekerjaan</th>
      <th scope="col">Status Perkawinan</th>
      <th scope="col">Penghasilan</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Jenis Bantuan</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $no=1; foreach($t_penduduk as $t) : ?>
    <tr>
      <th scope="row"><?php echo $no++ ?></th>
      <td><?php echo $t->no_kk ?></td>
      <td><?php echo $t->nik ?></td>
      <td><?php echo $t->nama ?></td>
      <td><?php echo $t->alamat_dusun ?></td>
      <td><?php echo $t->jk ?></td>
      <td><?php echo $t->tempat_lahir ?></td>
      <td><?php echo $t->tgl_lahir ?></td>
      <td><?php echo $t->agama ?></td>
      <td><?php echo $t->pendidikan ?></td>
      <td><?php echo $t->pekerjaan ?></td>
      <td><?php echo $t->status_perkawinan ?></td>
      <td>Rp.<?php echo $t->penghasilan ?></td>
      <td><?php if($t->penghasilan <= 1000000){
        echo 'Layak';
      } else {
        echo 'Tidak Layak';
      } ?></td>
      <td><?php 
      if ($t->penghasilan == 500000) {
        echo 'BLT';
      } elseif ($t->penghasilan == 1000000) {
        echo 'PKH';
      } else {
        echo '-';
      }

      ?></td>
      <td>
        <a href="<?php echo base_url('penduduk/editPenduduk/'.$t->id_penduduk) ?>" type="button" class="btn btn-info">Edit</a>
        <a onclick="return confirm('Yakin Hapus?')" href="<?php echo base_url('penduduk/deletePenduduk/'.$t->id_penduduk) ?>" type="button" class="btn btn-danger">Hapus</a>
    </td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
</div>