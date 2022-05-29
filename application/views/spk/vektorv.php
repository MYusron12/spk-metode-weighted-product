<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->


  <div class="row">
    <!-- Content Column -->
    <!-- <div class="col-lg-6 mb-4"> -->

    <!-- <div class="card  shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Vektor S</h6> -->
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

    <!-- </div>
        <div class="card-body">
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
            <tbody> -->
    <?php $i = 1; ?>
    <?php foreach ($inputjoinalt as $alt) : ?>
      <tr>
        <th scope="row"><?php $i; ?></th>
        <td><?php $alt['kode_alternatif']; ?></td>
        <td><?php $alt['keterangan_alternatif']; ?></td>
        <td><?php $alt['name']; ?></td>
        <?php $vektorS = (pow($alt['c1'], $hn1) * pow($alt['c2'], $hn2) * pow($alt['c3'], $hn3) * pow($alt['c4'], $hn4)) ?>
        <?php $arraytotalVektorS[] = $vektorS ?>
        <?php $totalVektorS = array_sum($arraytotalVektorS) ?>
        <td><?php $vektorS; ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
    <!-- </tbody>
          </table> -->
    <!-- <strong>Total Vektor S = <?= $totalVektorS; ?></strong> -->
    <!--</div>
  </div>
</div> -->

    <div class="col-lg-12 mb-4">
      <!-- Illustrations -->
      <div class="card  shadow mb-4">
        <div class="card-header py-3">
        </div>
        <div class="card-body">
          <table class="table table-responsive" id="example1">
            <thead>
              <h1 class="h3 mb-4 text-gray-800"><?= $title; ?> <br></h1>
              <h3 class="h5 mb-4 text-gray-800">Nama Petugas : <?= $user['name']; ?></h3>
              <h3 class="h5 mb-4 text-gray-800">Tanggal Penghitungan : <?= date('l, d-m-Y'); ?></h3>
              <h6><small class="text-muted">Tekan ctrl + p untuk cetak report</small></h6>
              <h6><small class="text-muted">Tekan header Vektor V untuk melakukan sorting nilai terbesar</small></h6>
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
          <!-- <strong>Total Vektor V = <?= $totalVektorV ?></strong> -->
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->