<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  <div class="row">
    <div class="col-lg-8">
      <form action="" method="post">
        <?php $j = $c + 1; ?>
        <input type="hidden" name="urutan_id" value="<?= $j; ?>">
        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Kriteria</label>
          <div class="col-sm-6">
            <select name="kriteria_id" id="kriteria_id" class="form-control">
              <option value="">Pilih Kriteria</option>
              <?php foreach ($kriteria as $kt) : ?>
                <option value="<?= $kt['id']; ?>"><?= $kt['kode_kriteria']; ?> | <?= $kt['keterangan_kriteria']; ?></option>
              <?php endforeach; ?>
            </select>
            <?= form_error('kode_bobot', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <div class="form-group row">
          <label for="name" class="col-sm-2 col-form-label">Bobot</label>
          <div class="col-sm-6">
            <select name="bobot_id" id="bobot_id" class="form-control">
              <option value="">Pilih Bobot</option>
              <?php foreach ($bobot as $bt) : ?>
                <option value="<?= $bt['id']; ?>"><?= $bt['kode_bobot']; ?> | <?= $bt['keterangan_bobot']; ?></option>
              <?php endforeach; ?>
            </select>
            <?= form_error('keterangan_bobot', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <div class="form-group row justify-content-end">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
</div>