<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  <div class="row">
    <div class="col-lg-8">
      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
      <!-- <a href="<?= base_url('spk/tambahBobot'); ?>" class="btn btn-primary mb-3">Tambah Bobot</a> -->
      <table class="table table-hover" id="dataTable">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Supplier</th>
            <th scope="col">Email Supplier</th>
            <th>Status Upload Berkas</th>
            <th>Status Alternatif</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($usersupplier as $b) : ?>
            <?php $warna = 'primary'; ?>
            <?php if ($b['is_upload'] == 0) {
              $warna = 'danger';
            } else if ($b['is_alternatif'] == 1) {
              $warna = 'info';
            }
            ?>
            <tr class="bg-<?= $warna ?> text-white">
              <th scope="row"><?= $i; ?></th>
              <td><?= $b['name']; ?></td>
              <td><?= $b['email']; ?></td>
              <?php if ($b['is_upload'] == 0) : ?>
                <td>
                  <p class="badge badge-danger">Belum Upload</p>
                </td>
              <?php else : ?>
                <td>
                  <p class="badge badge-primary">Sudah Upload</p>
                </td>
              <?php endif; ?>
              <td>
                <?php if ($b['is_alternatif'] == 0) : ?>
                  <a href="<?= base_url('spk/tambahAlternatif/') . $b['id']; ?>" class="badge badge-warning">get alternatif</a>
                <?php else : ?>
                  <p class="badge badge-primary">sudah menjadi alternatif</p>
                <?php endif; ?>
              </td>
              <td>
                <a href="<?= base_url('spk/editSupplierBaru/') . $b['id']; ?>" class="badge badge-warning">edit</a>
                <a href="<?= base_url('spk/hapusSupplierBaru/') . $b['id']; ?>" class="badge badge-danger tombol-hapus">hapus</a>
              </td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <div class="col-lg-4">
      <div class="card" style="width: 18rem;">
        <div class="card-header">
          Keterangan Gambar Pada Tabel
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">biru sudah upload berkas tetapi belum menjadi alternatif</li>
          <li class="list-group-item">abu-abu sudah upload berkas dan sudah menjadi alternatif</li>
          <li class="list-group-item">merah belum upload berkas dan belum menjadi alternatif</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
</div>