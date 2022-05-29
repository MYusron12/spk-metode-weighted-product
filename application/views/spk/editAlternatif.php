<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  <div class="row">
    <div class="col-lg-8">
      <form action="" method="post">
        <div class="form-group row">
          <input type="hidden" name="id" id="id" value="<?= $alternatifid['id']; ?>">
          <label for="" class="col-sm-2 col-form-label">Kode Alternatif</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" id="kode_alternatif" name="kode_alternatif" autofocus value="<?= $alternatifid['kode_alternatif']; ?>">
            <?= form_error('kode_alternatif', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <div class="form-group row">
          <label for="name" class="col-sm-2 col-form-label">Keterangan Alternatif</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" id="keterangan_alternatif" name="keterangan_alternatif" value="<?= $alternatifid['keterangan_alternatif']; ?>">
            <?= form_error('keterangan_alternatif', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <div class="form-group row">
          <label for="name" class="col-sm-2 col-form-label">Supplier Baru</label>
          <div class="col-sm-6">
            <select class="form-control" name="user_id" id="user_id">
              <option value="">pilih supplier</option>
              <?php foreach ($userall as $r) : ?>
                <?php if ($r['id'] == $alternatifid['user_id']) : ?>
                  <option value="<?= $r['id']; ?>" selected><?= $r['name']; ?></option>
                <?php else : ?>
                  <option value="<?= $r['id']; ?>"><?= $r['name']; ?></option>
                <?php endif; ?>
              <?php endforeach; ?>
            </select>
            <?= form_error('keterangan_alternatif', '<small class="text-danger pl-3">', '</small>'); ?>
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