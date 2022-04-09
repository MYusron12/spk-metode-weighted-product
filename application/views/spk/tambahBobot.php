<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  <div class="row">
    <div class="col-lg-8">
      <form action="" method="post">
        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Kode Bobot</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" id="kode_bobot" name="kode_bobot" autofocus>
            <?= form_error('kode_bobot', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <div class="form-group row">
          <label for="name" class="col-sm-2 col-form-label">Keterangan Bobot</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" id="keterangan_bobot" name="keterangan_bobot">
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