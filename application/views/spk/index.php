<!-- Begin Page Content -->
<div class="container-fluid mt-5">

  <!-- Page Heading -->
  <div class="row">
    <div class="" data-aos="zoom-in" data-aos-duration="2000">
      <div class="col-lg-6">
        <h1> <span class="badge badge-primary shadow"><?= $title; ?></span></h1>
      </div>
    </div>
  </div>

  <div class=" row">
    <!-- Collapsable Card Example -->
    <div class="card shadow mb-4" data-aos="zoom-in" data-aos-duration="2000">
      <!-- Card Header - Accordion -->
      <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
        <?php foreach ($countupload as $row) ?>
        <?php $upload = $row->upload; ?>
        <?php foreach ($isalt as $row) ?>
        <?php $alt = $row->alt ?>
        <?php foreach ($uploadbelumalt as $row) ?>
        <?php $not = $row->uploadbelumalt ?>
        <h6 class="m-0 font-weight-bold text-primary">Notifikasi
          <i class="fas fa-bell fa-fw"></i>
          <!-- Counter - Alerts -->
          <span class="badge badge-danger badge-counter"><?= $upload; ?></span>
          <i class="fas fa-comments fa-fw"></i>
          <!-- Counter - Alerts -->
          <span class="badge badge-danger badge-counter"><?= $alt; ?></span>
          <i class="fas fa-pen fa-fw"></i>
          <!-- Counter - Alerts -->
          <span class="badge badge-danger badge-counter"><?= $not; ?></span>
        </h6>
      </a>
      <!-- Card Content - Collapse -->
      <div class="collapse" id="collapseCardExample">
        <div class="card-body">
          <i class="fas fa-bell fa-fw"></i>Terdapat <?= $upload; ?> supplier baru yang belum upload berkas, silahkan diarahkan agar upload berkas. <strong class="text-white"><a href="<?= base_url('spk/supplierBaru'); ?>">-> go to data supplier</a></strong><br>
          <i class="fas fa-comments fa-fw"></i>Terdapat <?= $alt; ?> supplier yang belum menjadi alternatif. <strong class="text-white"><a href="<?= base_url('spk/supplierBaru'); ?>">-> go to data supplier</a></strong><br>
          <i class="fas fa-pen fa-fw"></i>Terdapat <?= $not; ?> suplier yang sudah upload berkas dan belum menjadi alternatif. <strong class="text-white"><a href="<?= base_url('spk/supplierBaru'); ?>">-> go to data supplier</a></strong>
        </div>
      </div>
    </div>
  </div>

  <div class="row">

    <div class="col-xl-2 col-lg-2" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
      <img src="<?= base_url('assets/img/img4.png'); ?>" class="img bg-none" width="200px" height="250px" alt="...">
    </div>
    <!-- Area Chart -->
    <div class="col-xl-5 col-lg-6" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="2000">
      <div class="card bg-dark text-white mb-3">
        <img src="<?= base_url('assets/img/logistic.jpg'); ?>" class="card-img rounded shadow blur" alt="...">
        <div class="card-img-overlay">
          <?php $hariIni = new DateTime(); ?>
          <h5 class="card-title"><?= $hariIni->format('l F Y, H:i'); ?></h5>
          <p class="card-text">Thank you for using the weighted product method decision support system application to determine the best supplier at PT. Matahari Nusantara Logistik, hopefully it can help your work!.</p>
        </div>
      </div>
    </div>

    <!-- Pie Chart -->
    <div class="col-xl-5 col-lg-6">
      <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
          <div class="card border-left-primary bg-warning text-white shadow h-100 py-2" data-aos="zoom-in-up" data-aos-duration="2000">
            <div class="card-body shadow">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Jumlah Bobot</div>
                  <?php foreach ($countbobot as $row) ?>
                  <div class="h5 mb-0 font-weight-bold text-white-800"><?= $row->bobot; ?></div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
          <div class="card border-left-success bg-primary shadow h-100 py-2" data-aos="zoom-in-down" data-aos-duration="2000">
            <div class="card-body shadow">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Jumlah Kriteria</div>
                  <?php foreach ($countkriteria as $row) ?>
                  <div class="h5 mb-0 font-weight-bold text-white"><?= $row->kriteria; ?></div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
          <div class="card bg-danger border-left-info shadow h-100 py-2" data-aos="zoom-in-left" data-aos-duration="2000">
            <div class="card-body shadow">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Total Bobot Kriteria</div>
                  <div class="row no-gutters align-items-center">
                    <div class="col-auto">
                      <?php foreach ($counttotal as $row) ?>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-white"><?= $row->total; ?></div>
                    </div>
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Pending Requests Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
          <div class="card bg-success border-left-warning shadow h-100 py-2" data-aos="zoom-in-right" data-aos-duration="2000">
            <div class="card-body shadow">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Jumlah Alternatif</div>
                  <?php foreach ($countalt as $row) ?>
                  <div class="h5 mb-0 font-weight-bold text-white"><?= $row->alternatif; ?></div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-comments fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Content Row -->

  <div class="row">

    <div class="col-xl-2" data-aos="fade-up" data-aos-duration="4000">
      <img src="<?= base_url('assets/img/left-img.png'); ?>" class="img bg-none" width="200px" height="250px" alt="...">
    </div>
    <!-- Area Chart -->
    <div class="col-xl-5 col-lg-6" data-aos="zoom-out-down" data-aos-duration="1000">
      <div class="card  shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Bobot</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body shadow">
          <table class="table " id="dataTable1">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Kode Bobot</th>
                <th scope="col">Keterangan Bobot</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($bobot as $b) : ?>
                <tr>
                  <th scope="row"><?= $i; ?></th>
                  <td><?= $b['kode_bobot']; ?></td>
                  <td><?= $b['keterangan_bobot']; ?></td>
                </tr>
                <?php $i++; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Pie Chart -->
    <div class="col-xl-5 col-lg-6" data-aos="zoom-out-down" data-aos-duration="1000">
      <div class="card  shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Kriteria</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body shadow">
          <table class="table " id="dataTable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Kode Kriteria</th>
                <th scope="col">Keterangan Kriteria</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($kriteria as $kt) : ?>
                <tr>
                  <th scope="row"><?= $i; ?></th>
                  <td><?= $kt['kode_kriteria']; ?></td>
                  <td><?= $kt['keterangan_kriteria']; ?></td>
                </tr>
                <?php $i++; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>

  <!-- Content Row -->
  <div class="row">
    <!-- Content Column -->

    <div class="col-lg-2" data-aos="fade-up" data-aos-duration="5000">
      <img src="<?= base_url('assets/img/img1.png'); ?>" class="img bg-none" width="200px" height="250px" alt="...">
    </div>

    <div class="col-lg-6 mb-4" data-aos="zoom-out-up" data-aos-duration="1000">
      <!-- Project Card Example -->
      <div class="card  shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Bobot Kriteria</h6>
        </div>
        <div class="card-body shadow">
          <table class="table table-responsive" id="dataTable2">
            <thead>
              <tr>
                <?php foreach ($counttotal as $row) ?>
                <th scope="col">#</th>
                <th scope="col">Kode Kriteria</th>
                <th scope="col">Keterangan Kriteria</th>
                <th>Kode Bobot</th>
                <th>Keterangan Bobot</th>
                <th>Hasil Normalisasi</th>
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
                </tr>
                <?php $i++; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="col-lg-4 mb-4" data-aos="zoom-out-up" data-aos-duration="1000">
      <!-- Illustrations -->
      <div class="card  shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Penilaian Sub Kriteria</h6>
        </div>
        <div class="card-body shadow">
          <table class="table" id="dataTable3">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Penilaian</th>
                <th scope="col">Keterangan</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($penilaian as $p) : ?>
                <tr>
                  <th scope="row"><?= $i; ?></th>
                  <td><?= $p['penilaian']; ?></td>
                  <td><?= $p['keterangan']; ?></td>
                </tr>
                <?php $i++; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-2" data-aos="fade-up" data-aos-duration="6000">
      <img src="<?= base_url('assets/img/img2.png'); ?>" class="img bg-none" width="200px" height="250px" alt="...">
    </div>
    <!-- Content Column -->
    <div class="col-lg-5 mb-4" data-aos="zoom-out-left" data-aos-duration="1000">
      <!-- Project Card Example -->
      <div class="card  shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Alternatif</h6>
        </div>
        <div class="card-body shadow">
          <table class="table table-responsive" id="dataTable4">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Kode Alternatif</th>
                <th scope="col">Keterangan Alternatif</th>
                <th>Nama Supplier</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($alternatifuser as $alt) : ?>
                <tr>
                  <th scope="row"><?= $i; ?></th>
                  <td><?= $alt['kode_alternatif']; ?></td>
                  <td><?= $alt['keterangan_alternatif']; ?></td>
                  <td><?= $alt['name']; ?></td>
                </tr>
                <?php $i++; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="col-lg-5 mb-4" data-aos="zoom-out-right" data-aos-duration="1000">
      <!-- Illustrations -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Nilai Alternatif Kriteria</h6>
        </div>
        <div class="card-body shadow">
          <table class="table table-responsive" id="dataTable5">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th>Kode ALternatif</th>
                <th scope="col">Alternatif</th>
                <th>C 1</th>
                <th>C 2</th>
                <th>C 3</th>
                <th>C 4</th>
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
                </tr>
                <?php $i++; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>

  <div class="row">

    <div class="col-lg-2" data-aos="fade-up" data-aos-duration="7000">
      <img src="<?= base_url('assets/img/img3.png'); ?>" class="img bg-none" width="200px" height="450px" alt="...">
    </div>
    <!-- Content Column -->
    <div class="col-lg-5 mb-4" data-aos="zoom-in-down" data-aos-duration="1000">
      <!-- Project Card Example -->
      <div class="card  shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Vektor S</h6>
          <?php foreach ($bi1 as $row) ?>
          <?php if (!empty($row->kode_bobot)) {
            $bi1 = $row->kode_bobot;
          } else {
            $bi1 = 0;
          }
          ?>

          <?php foreach ($bi2 as $row) ?>
          <?php if (!empty($row->kode_bobot)) {
            $bi2 = $row->kode_bobot;
          } else {
            $bi2 = 0;
          }
          ?>

          <?php foreach ($bi3 as $row) ?>
          <?php if (!empty($row->kode_bobot)) {
            $bi3 = $row->kode_bobot;
          } else {
            $bi3 = 0;
          }
          ?>

          <?php foreach ($bi4 as $row) ?>
          <?php if (!empty($row->kode_bobot)) {
            $bi4 = $row->kode_bobot;
          } else {
            $bi4 = 0;
          }
          ?>

          <?php foreach ($total as $row) ?>
          <?php if (!empty($row->total)) {
            $total = $row->total;
          } else {
            $total = 1;
          }
          ?>
          <?php $hn1 = $bi1 / $total ?>
          <?php $hn2 = $bi2 / $total ?>
          <?php $hn3 = $bi3 / $total ?>
          <?php $hn4 = $bi4 / $total ?>

          <?php $totalNormalisasi = $hn1 + $hn2 + $hn3 + $hn4 ?>

        </div>
        <div class="card-body shadow">
          <table class="table table-responsive" id="dataTable6">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Kode Alternatif</th>
                <th scope="col">Keterangan Alternatif</th>
                <th scope="col">Detail Alternatif</th>
                <th>Vektor S</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($inputjoinalt as $alt) : ?>
                <tr>
                  <th scope="row"><?= $i; ?></th>
                  <td><?= $alt['kode_alternatif']; ?></td>
                  <td><?= $alt['keterangan_alternatif']; ?></td>
                  <td><?= $alt['name']; ?></td>
                  <?php $vektorS = (pow($alt['c1'], $hn1) * pow($alt['c2'], $hn2) * pow($alt['c3'], $hn3) * pow($alt['c4'], $hn4)) ?>
                  <?php $arraytotalVektorS[] = $vektorS ?>
                  <?php $totalVektorS = array_sum($arraytotalVektorS) ?>
                  <td><?= $vektorS; ?></td>
                </tr>
                <?php $i++; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
          <strong>Total Vektor S =
            <?php
            if (!empty($totalVektorS)) {
              echo $totalVektorS;
            } else {
              echo $totalVektorS = 0;
            }
            ?>
          </strong>
        </div>
      </div>
    </div>

    <div class="col-lg-5 mb-4" data-aos="zoom-in-down" data-aos-duration="1000">
      <!-- Illustrations -->
      <div class="card  shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Vektor V - <a href="<?= base_url('spk/vektorV'); ?>" target="_blank" class="btn btn-primary">View Report</a></h6>
        </div>
        <div class="card-body shadow">
          <table class="table table-responsive" id="dataTable7">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Kode Alternatif</th>
                <th scope="col">Keterangan Alternatif</th>
                <th scope="col">Detail Alternatif</th>
                <!-- <th>Vektor S</th> -->
                <th>Vektor V</th>
              </tr>
            </thead>
            <!-- <?php $totalvs = $totalVektorS ?> -->
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($inputjoinalt as $alt) : ?>
                <tr>
                  <th scope="row"><?= $i; ?></th>
                  <td><?= $alt['kode_alternatif']; ?></td>
                  <td><?= $alt['keterangan_alternatif']; ?></td>
                  <td><?= $alt['name']; ?></td>
                  <?php $vektorS = (pow($alt['c1'], $hn1) * pow($alt['c2'], $hn2) * pow($alt['c3'], $hn3) * pow($alt['c4'], $hn4)) ?>
                  <?php $arraytotalVektorS[] = $vektorS ?>
                  <?php $totalVektorS = array_sum($arraytotalVektorS) ?>
                  <!-- <td><?= $vektorS; ?></td> -->
                  <?php $vektorV = $vektorS / $totalvs ?>
                  <td><?= $vektorV; ?></td>
                  <?php $arrayvektorV[] = $vektorV ?>
                  <!-- <td><?= $arrayvektorV; ?></td> -->
                  <?php $arraytotalVektorV[] = $vektorV ?>
                  <?php $totalVektorV = array_sum($arraytotalVektorV) ?>
                </tr>
                <?php $i++; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
          <strong>Total Vektor V =
            <?php if (!empty($totalVektorV)) {
              echo $totalVektorV;
            } else {
              echo $totalVektorV = 0;
            }
            ?></strong>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->