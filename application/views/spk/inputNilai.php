<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  <div class="row">
    <div class="col-lg-6">
      <a href="<?= base_url('spk/tambahInputNilai'); ?>" class="btn btn-primary mb-3">Tambah Input Nilai ALternatif</a>
      <table class="table table-hover" id="dataTable">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th>Kode ALternatif</th>
            <th scope="col">Alternatif</th>
            <th>C 1</th>
            <th>C 2</th>
            <th>C 3</th>
            <th>C 4</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($inputjoinalt as $inalt) : ?>
            <tr>
              <th scope="row"><?= $i; ?></th>
              <td><?= $inalt['kode_alternatif']; ?></td>
              <td><?= $inalt['keterangan_alternatif']; ?></td>
              <td><?= $inalt['c1']; ?></td>
              <td><?= $inalt['c2']; ?></td>
              <td><?= $inalt['c3']; ?></td>
              <td><?= $inalt['c4']; ?></td>
              <td>
                <a href="<?= base_url('spk/editInputNilai/') . $inalt['id']; ?>" class="badge badge-success">edit</a>
                <a href="<?= base_url('spk/hapusInputNilai/') . $inalt['id']; ?>" class="badge badge-danger tombol-hapus">delete</a>
              </td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <div class="col-lg-6">
      <!-- Collapsable Card Example -->
      <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
          <h6 class="m-0 font-weight-bold text-primary">Keterangan Penilaian Alternatif Kriteria -> <small class="text-muted">klik untuk melihat</small></h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse" id="collapseCardExample">
          <div class="card-body">
            # Kriteria Kualitas Produk (C1) dinilai dari Durability dan Design Produk
            <br>
            # Tidak baik = 1 <br>
            # Cukup baik = 2 <br>
            # Baik = 3 <br>
            # Sangat baik = 4
            <hr># Kriteria Kecepatan Kirim (C2) dinilai dari Delivery on time <br>
            # Telat up to 3 kali = 1 <br>
            # Telat 3 kali = 2 <br>
            # Telat 2 kali = 3 <br>
            # Telat 1 kali = 4 <br>
            # Tidak pernah telat = 5
            <hr># Kriteria Acceptable Price (C3) dinilai dari Relevan dengan kualitas dan Durability <br>
            # Sangat mahal = 1 <br>
            # Mahal = 2 <br>
            # Murah = 3 <br>
            # Cukup murah = 4
            <hr># kriteria Pembayaran Fleksibel (C4) dinilai dari TOP following company <br>
            # top 1 bulan = 1 <br>
            # top 2 bulan = 2 <br>
            # top 3 bulan = 3 <br>
            # top up to 3 bulan = 4
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
</div>