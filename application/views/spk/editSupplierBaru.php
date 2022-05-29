<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  <div class="row">
    <div class="col-lg-8">
      <form action="" method="post">
        <div class="form-group row">
          <input type="hidden" id="id" name="id" value="<?= $getuser['id']; ?>">
          <input type="hidden" id="image" name="image" value="<?= $getuser['image']; ?>">
          <input type="hidden" id="password" name="password" value="<?= $getuser['password']; ?>">
          <input type="hidden" id="role_id" name="role_id" value="<?= $getuser['role_id']; ?>">
          <input type="hidden" id="is_active" name="is_active" value="<?= $getuser['is_active']; ?>">
          <input type="hidden" id="date_created" name="date_created" value="<?= $getuser['date_created']; ?>">
          <input type="hidden" id="is_upload" name="is_upload" value="<?= $getuser['is_upload']; ?>">
          <input type="hidden" id="is_input" name="is_input" value="<?= $getuser['is_input']; ?>">
          <input type="hidden" id="is_alternatif" name="is_alternatif" value="<?= $getuser['is_alternatif']; ?>">
          <label for="" class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-6">
            <input type="text" id="name" name="name" value="<?= $getuser['name']; ?>" class="form-control">
            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <div class="form-group row">
          <label for="name" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-6">
            <input type="text" id="email" name="email" value="<?= $getuser['email']; ?>" class="form-control">
            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <div class="form-group row justify-content-end">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Edit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
</div>