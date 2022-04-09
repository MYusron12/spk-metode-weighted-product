<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Bobot</div>
              <?php foreach ($countbobot as $row) ?>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $row->bobot; ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Kriteria</div>
              <?php foreach ($countkriteria as $row) ?>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $row->kriteria; ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Bobot Kriteria</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <?php foreach ($counttotal as $row) ?>
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $row->total; ?></div>
                </div>
                <div class="col">
                  <div class="progress progress-sm mr-2">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
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
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah Alternatif</div>
              <?php foreach ($countalt as $row) ?>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $row->alternatif; ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Content Row -->

  <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-6 col-lg-6">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Bobot</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <table class="table table-hover" id="dataTable1">
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
    <div class="col-xl-6 col-lg-6">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Kriteria</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <table class="table table-hover" id="dataTable">
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
    <div class="col-lg-6 mb-4">
      <!-- Project Card Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Bobot Kriteria</h6>
        </div>
        <div class="card-body">
          <table class="table table-hover" id="dataTable2">
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

    <div class="col-lg-6 mb-4">
      <!-- Illustrations -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Penilaian Sub Kriteria</h6>
        </div>
        <div class="card-body">
          <table class="table table-hover" id="dataTable3">
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
    <!-- Content Column -->
    <div class="col-lg-5 mb-4">
      <!-- Project Card Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">ALternatif</h6>
        </div>
        <div class="card-body">
          <table class="table table-hover" id="dataTable4">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Kode Alternatif</th>
                <th scope="col">Keterangan Alternatif</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($alternatif as $alt) : ?>
                <tr>
                  <th scope="row"><?= $i; ?></th>
                  <td><?= $alt['kode_alternatif']; ?></td>
                  <td><?= $alt['keterangan_alternatif']; ?></td>
                </tr>
                <?php $i++; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="col-lg-7 mb-4">
      <!-- Illustrations -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Penilaian Sub Kriteria</h6>
        </div>
        <div class="card-body">
          <table class="table table-hover" id="dataTable5">
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
    <!-- Content Column -->
    <div class="col-lg-4 mb-4">
      <!-- Project Card Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Vektor S</h6>
          <?php foreach ($bi1 as $row) ?>
          <?php $bi1 = $row->bobot_id ?>
          <?php foreach ($bi2 as $row) ?>
          <?php $bi2 = $row->bobot_id ?>
          <?php foreach ($bi3 as $row) ?>
          <?php $bi3 = $row->bobot_id ?>
          <?php foreach ($bi4 as $row) ?>
          <?php $bi4 = $row->bobot_id ?>

          <?php foreach ($total as $row) ?>
          <?php $total = $row->total ?>

          <?php $hn1 = $bi1 / $total ?>
          <?php $hn2 = $bi2 / $total ?>
          <?php $hn3 = $bi3 / $total ?>
          <?php $hn4 = $bi4 / $total ?>

          <?php $totalNormalisasi = $hn1 + $hn2 + $hn3 + $hn4 ?>

        </div>
        <div class="card-body">
          <table class="table table-hover" id="">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Kode Alternatif</th>
                <th scope="col">Keterangan Alternatif</th>
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
                  <?php $vektorS = (pow($alt['c1'], $hn1) * pow($alt['c2'], $hn2) * pow($alt['c3'], $hn3) * pow($alt['c4'], $hn4)) ?>
                  <?php $arraytotalVektorS[] = $vektorS ?>
                  <?php $totalVektorS = array_sum($arraytotalVektorS) ?>
                  <td><?= $vektorS; ?></td>
                </tr>
                <?php $i++; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
          <strong>Total Vektor S = <?= $totalVektorS; ?></strong>
        </div>
      </div>
    </div>

    <div class="col-lg-4 mb-4">
      <!-- Illustrations -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Vektor V</h6>
        </div>
        <div class="card-body">
          <table class="table table-hover" id="">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Kode Alternatif</th>
                <th scope="col">Keterangan Alternatif</th>
                <!-- <th>Vektor S</th> -->
                <th>Vektor V</th>
              </tr>
            </thead>
            <?php $totalvs = $totalVektorS ?>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($inputjoinalt as $alt) : ?>
                <tr>
                  <th scope="row"><?= $i; ?></th>
                  <td><?= $alt['kode_alternatif']; ?></td>
                  <td><?= $alt['keterangan_alternatif']; ?></td>
                  <?php $vektorS = (pow($alt['c1'], $hn1) * pow($alt['c2'], $hn2) * pow($alt['c3'], $hn3) * pow($alt['c4'], $hn4)) ?>
                  <?php $arraytotalVektorS[] = $vektorS ?>
                  <?php $totalVektorS = array_sum($arraytotalVektorS) ?>
                  <!-- <td><?= $vektorS; ?></td> -->
                  <?php $vektorV = $vektorS / $totalvs ?>
                  <td><?= $vektorV; ?></td>
                  <?php $arraytotalVektorV[] = $vektorV ?>
                  <?php $totalVektorV = array_sum($arraytotalVektorV) ?>
                </tr>
                <?php $i++; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
          <strong>Total Vektor V = <?= $totalVektorV ?></strong>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->