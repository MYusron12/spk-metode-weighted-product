<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-lg-7">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Lupa password</h1>
                </div>

                <?= $this->session->flashdata('message'); ?>

                <?php foreach ($dataemail as $row) : ?>
                  <form class="user" method="post" action="<?= base_url('auth/ubahPassword/' . $row->id); ?>">
                    <div class="form-group">
                      <input type="hidden" name="id" value="<?= $row->id; ?>">
                      <input type="hidden" value="<?= $row->email; ?>">
                      <input type="text" class="form-control form-control-user" id="password" name="password" placeholder="Masukkan password baru">
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Ubah
                    </button>
                  </form>
                <?php endforeach; ?>
                <hr>
                <div class="text-center">
                  <a class="small" href="<?= base_url('auth'); ?>">Back to login</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>