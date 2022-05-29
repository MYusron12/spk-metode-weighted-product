<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  <div class="row">
    <div class="col-lg-6">
      <form action="" method="post">
        <div class="form-group row">
          <input type="hidden" name="id" id="id" value="<?= $inputid['id']; ?>">
          <label for="" class="col-sm-2 col-form-label">Alternatif</label>
          <div class="col-sm-6">
            <select name="alternatif_id" id="alternatif_id" class="form-control">
              <option value="">Pilih Alternatif</option>
              <?php foreach ($alternatif as $kt) : ?>
                <?php if ($inputid['alternatif_id'] == $kt['id']) : ?>
                  <option value="<?= $kt['id']; ?>" selected><?= $kt['kode_alternatif']; ?> | <?= $kt['keterangan_alternatif']; ?></option>
                <?php else : ?>
                  <option value="<?= $kt['id']; ?>"><?= $kt['kode_alternatif']; ?> | <?= $kt['keterangan_alternatif']; ?></option>
                <?php endif; ?>
              <?php endforeach; ?>
            </select>
            <?= form_error('alternatif_id', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <div class="form-group row">
          <label for="name" class="col-sm-2 col-form-label">Kriteria C1</label>
          <div class="col-sm-6">
            <input type="text" name="c1" id="c1" class="form-control" value="<?= $inputid['c1']; ?>">
            <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <div class="form-group row">
          <label for="name" class="col-sm-2 col-form-label">Kriteria C2</label>
          <div class="col-sm-6">
            <input type="text" name="c2" id="c2" class="form-control" value="<?= $inputid['c2']; ?>">
            <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <div class="form-group row">
          <label for="name" class="col-sm-2 col-form-label">Kriteria C3</label>
          <div class="col-sm-6">
            <input type="text" name="c3" id="c3" class="form-control" value="<?= $inputid['c3']; ?>">
            <?= form_error('c3', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <div class="form-group row">
          <label for="name" class="col-sm-2 col-form-label">Kriteria C4</label>
          <div class="col-sm-6">
            <input type="text" name="c4" id="c4" class="form-control" value="<?= $inputid['c4']; ?>">
            <?= form_error('c4', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <div class="form-group row justify-content-end">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-lg 4">
      <!-- Collapsable Card Example -->
      <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
          <h6 class="m-0 font-weight-bold text-primary">Penilaian Sub Kriteria</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="collapseCardExample">
          <div class="card-body">
            # Kriteria Kualitas Produk dinilai dari Durability dan Design Produk
            <br> # Kriteria Kecepatan Kirim dinilai dari Delivery on time
            <br> # Kriteria Acceptable Price dinilai dari Relevan dengan kualitas dan Durability
            <br> # kriteria Pembayaran Fleksibel dinilai dari TOP following company
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-3">
      <!-- Collapsable Card Example -->
      <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
          <h6 class="m-0 font-weight-bold text-primary">Kriteria C1 Kualitas Produk</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="collapseCardExample">
          <div class="card-body">
            # Tidak baik = 1 <br>
            # Cukup baik = 2 <br>
            # Baik = 3 <br>
            # Sangat baik = 4
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <!-- Collapsable Card Example -->
      <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
          <h6 class="m-0 font-weight-bold text-primary">Kriteria C2 Kecepatan Kirim</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="collapseCardExample">
          <div class="card-body">
            # Telat up to 3 kali = 1 <br>
            # Telat 3 kali = 2 <br>
            # Telat 2 kali = 3 <br>
            # Telat 1 kali = 4 <br>
            # Tidak pernah telat = 5 <br>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <!-- Collapsable Card Example -->
      <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
          <h6 class="m-0 font-weight-bold text-primary">Kriteria C3 Acceptable price</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="collapseCardExample">
          <div class="card-body">
            # Sangat mahal = 1 <br>
            # Mahal = 2 <br>
            # Murah = 3 <br>
            # Cukup murah = 4 <br>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <!-- Collapsable Card Example -->
      <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
          <h6 class="m-0 font-weight-bold text-primary">Kriteria C4 Pembayaran fleksibel</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="collapseCardExample">
          <div class="card-body">
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