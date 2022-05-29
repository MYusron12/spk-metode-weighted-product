<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  <?php foreach ($counttotal as $row) ?>
  <div class="row">
    <div class="col-lg-8">
      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
      <a href="<?= base_url('spk/tambahBobotKriteria'); ?>" class="btn btn-primary mb-3">Tambah Bobot Kriteria</a>
      <table class="table table-hover" id="dataTable">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Kode Kriteria</th>
            <th scope="col">Keterangan Kriteria</th>
            <th>Kode Bobot</th>
            <th>Keterangan Bobot</th>
            <th>Hasil Normalisasi</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($bobotkriteria as $bk) : ?>
            <tr>
              <th scope="row"><?= $i; ?></th>
              <td><?= $bk['kode_kriteria']; ?></td>
              <td><?= $bk['keterangan_kriteria']; ?></td>
              <td><?= $bk['kode_bobot']; ?></td>
              <td><?= $bk['keterangan_bobot']; ?></td>
              <?php $hasil = $bk['kode_bobot'] / $row->total ?>
              <td><?= $hasil; ?></td>
              <?php
              $array[] = $hasil;
              $total = array_sum($array);
              ?>
              <td>
                <a href="<?= base_url('spk/editBobotKriteria/') . $bk['id']; ?>" class="badge badge-success">edit</a>
                <a href="<?= base_url('spk/hapusBobotKriteria/') . $bk['id']; ?>" class="badge badge-danger tombol-hapus">delete</a>
              </td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <div class="col-lg-4">

      <!-- Default Card Example -->
      <div class="card mb-4">
        <div class="card-header">Total Bobot
        </div>
        <div class="card-body">
          <?= $row->total; ?>
        </div>
      </div>

      <!-- Default Card Example -->
      <div class="card mb-4">
        <div class="card-header">Total Hasil Normalisasi
        </div>
        <div class="card-body">
          <?php
          if (!empty($total)) {
            echo $total;
          } else {
            echo $total = 0;
          }
          ?>
        </div>
      </div>

      <!-- Basic Card Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Formula Normalisasi</h6>
        </div>
        <div class="card-body">
          Jumlah Bobot Setiap Kriteria di bagi total jumlah Bobot.
        </div>
      </div>

    </div>
  </div>
  <div class="row">

  </div>
</div>
<!-- /.container-fluid -->
</div>