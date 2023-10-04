<?php $this->load->view('user/templates/header'); ?>
<?php $this->load->view('user/templates/sidebar'); ?>

<div class="container">
  <h3>Data Perhitungan</h3>
  <h5>Perhitungan Entropy</h5>
  <table class="table table-bordered border-dark" style="width: 100%;">
    <thead>
      <tr>
        <th scope="col">Iterasi 1</th>
        <th scope="col"></th>
        <th scope="col">Jumlah</th>
        <th scope="col">Layak</th>
        <th scope="col">Tidak Layak</th>
        <th scope="col">Entropy</th>
        <!-- <th scope="col">Information Gain</th>
        <th scope="col">Split Info</th>
        <th scope="col">Gain Rasio</th> -->
      </tr>
    </thead>
    <tbody>

      <tr>
        <td class="table-active">Pendidikan</td>
        <td></td>
        <td><?= $jumlahData['total']; ?></td>
        <td><?= $jumlahData['layak']; ?></td>
        <td><?= $jumlahData['tidak_layak']; ?></td>
        <td><?= $jumlahData['entropy']; ?></td>
      </tr>
      <?php $hasil = 0;
      $informationGainPendidikan = 0;
      $informationGainPekerjaan = 0;
      $informationGainStatus = 0;
      $informationGainPenghasilan = 0;
      $splitInfoPendidikan = 0;
      $splitInfoPekerjaan = 0;
      $splitInfoStatus = 0;
      $splitInfoPenghasilan = 0;
      foreach ($kriteriaPendidikan['total'] as $pendidikan => $total) : ?>
        <tr>
          <td></td>
          <td class="table-active"><?= $pendidikan; ?></td>
          <td><?= $total; ?></td>
          <td><?= isset($kriteriaPendidikan['layak'][$pendidikan]) ? $kriteriaPendidikan['layak'][$pendidikan] : 0; ?></td>
          <td><?= isset($kriteriaPendidikan['tidak_layak'][$pendidikan]) ? $kriteriaPendidikan['tidak_layak'][$pendidikan] : 0; ?></td>
          <td><?= isset($kriteriaPendidikan['entropy'][$pendidikan]) ? $kriteriaPendidikan['entropy'][$pendidikan] : 0; ?></td>
          <!-- Ubah disini -->
          <!-- <td><?= $total ?></td>?
          <td><?= $jumlahData['total'] ?></td> -->
          <!-- <td><?= $kriteriaPendidikan['entropy'][$pendidikan] ?></td> -->
          <?php $hasil = ($total / $jumlahData['total']) * $kriteriaPendidikan['entropy'][$pendidikan];
          $informationGainPendidikan += $hasil; ?>
          <!-- <td><?= $hasil; ?></td> -->
          <!-- <td><?= number_format(isset($kriteriaPendidikan['split_info'][$pendidikan]) ? $kriteriaPendidikan['split_info'][$pendidikan] : 0, 5); ?></td> -->
          <?php $sInfo = $kriteriaPendidikan['split_info'][$pendidikan];
          $splitInfoPendidikan += $sInfo;
          ?>
        </tr>
      <?php endforeach; ?>
      <tr>
        <td class="table-active">Pekerjaan</td>
      </tr>
      <?php foreach ($kriteriaPekerjaan['total'] as $pekerjaan => $total) : ?>
        <tr>
          <td></td>
          <td class="table-active"><?= $pekerjaan; ?></td>
          <td><?= $total; ?></td>
          <td><?= isset($kriteriaPekerjaan['layak'][$pekerjaan]) ? $kriteriaPekerjaan['layak'][$pekerjaan] : 0; ?></td>
          <td><?= isset($kriteriaPekerjaan['tidak_layak'][$pekerjaan]) ? $kriteriaPekerjaan['tidak_layak'][$pekerjaan] : 0; ?></td>
          <td><?= isset($kriteriaPekerjaan['entropy'][$pekerjaan]) ? $kriteriaPekerjaan['entropy'][$pekerjaan] : 0; ?></td>
          <!-- Ubah disini -->
          <!-- <td><?= $total ?></td>?
          <td><?= $jumlahData['total'] ?></td> -->
          <!-- <td><?= $kriteriaPekerjaan['entropy'][$pekerjaan] ?></td> -->
          <?php $hasil = ($total / $jumlahData['total']) * $kriteriaPekerjaan['entropy'][$pekerjaan];
          $informationGainPekerjaan += $hasil; ?>
          <!-- <td><?= $hasil; ?></td> -->
          <?php $sInfo = $kriteriaPekerjaan['split_info'][$pekerjaan];
          $splitInfoPekerjaan += $sInfo;
          ?>
        </tr>
      <?php endforeach; ?>
      <tr>
        <td class="table-active">Status Perkawinan</td>
      </tr>
      <?php foreach ($kriteriaStatus['total'] as $status_perkawinan => $total) : ?>
        <tr>
          <td></td>
          <td class="table-active"><?= $status_perkawinan; ?></td>
          <td><?= $total; ?></td>
          <td><?= isset($kriteriaStatus['layak'][$status_perkawinan]) ? $kriteriaStatus['layak'][$status_perkawinan] : 0; ?></td>
          <td><?= isset($kriteriaStatus['tidak_layak'][$status_perkawinan]) ? $kriteriaStatus['tidak_layak'][$status_perkawinan] : 0; ?></td>
          <td><?= isset($kriteriaStatus['entropy'][$status_perkawinan]) ? $kriteriaStatus['entropy'][$status_perkawinan] : 0; ?></td>
          <!-- Ubah disini -->
          <!-- <td><?= $total ?></td>?
          <td><?= $jumlahData['total'] ?></td> -->
          <!-- <td><?= $kriteriaStatus['entropy'][$status_perkawinan] ?></td> -->
          <?php $hasil = ($total / $jumlahData['total']) * $kriteriaStatus['entropy'][$status_perkawinan];
          $informationGainStatus += $hasil; ?>
          <!-- <td><?= $hasil; ?></td> -->
          <?php $sInfo = $kriteriaStatus['split_info'][$status_perkawinan];
          $splitInfoStatus += $sInfo;
          ?>
        </tr>
      <?php endforeach; ?>
      <tr>
        <td class="table-active">Penghasilan</td>
      </tr>
      <?php foreach ($kriteriaPenghasilan['total'] as $penghasilan => $total) : ?>
        <tr>
          <td></td>
          <td class="table-active"><?= $penghasilan; ?></td>
          <td><?= $total; ?></td>
          <td><?= isset($kriteriaPenghasilan['layak'][$penghasilan]) ? $kriteriaPenghasilan['layak'][$penghasilan] : 0; ?></td>
          <td><?= isset($kriteriaPenghasilan['tidak_layak'][$penghasilan]) ? $kriteriaPenghasilan['tidak_layak'][$penghasilan] : 0; ?></td>
          <td><?= isset($kriteriaPenghasilan['entropy'][$penghasilan]) ? $kriteriaPenghasilan['entropy'][$penghasilan] : 0; ?></td>

          <?php $hasil = ($total / $jumlahData['total']) * $kriteriaPenghasilan['entropy'][$penghasilan];
          $informationGainPenghasilan += $hasil; ?>
          <!-- <td><?= $hasil; ?></td> -->
          <?php $sInfo = $kriteriaPenghasilan['split_info'][$penghasilan];
          $splitInfoPenghasilan += $sInfo;
          ?>
        </tr>
      <?php endforeach; ?>

    </tbody>

  </table>

  <h5>Perhitungan Information Gain, Split Info, dan Gain</h5>
  <table class="table table-bordered border-dark" style="width: 100%;">
    <thead>
      <tr>
        <th>Atribut</th>
        <th>Information Gain</th>
        <th>Split Info</th>
        <th>Gain</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th class="table-active">Pendidikan</th>
        <td><?= number_format($iGain = $jumlahData['entropy'] - $informationGainPendidikan, 5) ?></td>
        <td><?= number_format($splitInfoPendidikan, 5) ?></td>
        <td><?= number_format($iGain / $splitInfoPendidikan, 5) ?></td>
      </tr>
      <tr>
        <th class="table-active">Pekerjaan</th>
        <td><?= number_format($iGain = $jumlahData['entropy'] - $informationGainPekerjaan, 5) ?></td>
        <td><?= number_format($splitInfoPekerjaan, 5) ?></td>
        <td><?= number_format($iGain / $splitInfoPekerjaan, 5) ?></td>
        </td>
      </tr>
      <tr>
        <th class="table-active">Status Perkawinan</th>
        <td>
          <?= number_format($iGain = $jumlahData['entropy'] - $informationGainStatus, 5) ?>
        <td><?= number_format($splitInfoStatus, 5) ?></td>
        <td><?= number_format($iGain / $splitInfoStatus, 5) ?></td>
        </td>
      </tr>
      <tr>
        <th class="table-active">Penghasilan</th>
        <td>
          <?= number_format($iGain = $jumlahData['entropy'] - $informationGainPenghasilan, 5) ?>
        <td><?= number_format($splitInfoPenghasilan, 5) ?></td>
        <td><?= number_format($iGain / $splitInfoPenghasilan, 5) ?></td>
        </td>
      </tr>
    </tbody>
  </table>

</div>
<?php $this->load->view('user/templates/footer'); ?>