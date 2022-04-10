<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  <div class="row">
    <div class="col-lg-8">
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
  </div>
</div>
<!-- /.container-fluid -->
</div>