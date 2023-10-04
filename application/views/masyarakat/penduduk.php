<div class="container">
<h3>Data Penduduk</h3>

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
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
</div>