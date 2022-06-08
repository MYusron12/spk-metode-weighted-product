<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  <div class="row">
    <div class="col-lg-12 shadow">
      <a href="<?= base_url('spk/tambahBobot'); ?>" class="btn btn-primary mb-3 mt-3 shadow">Tambah Bobot</a>
      <table class="table table-hover table-bordered shadow" id="dataTable">
        <thead class="table-primary">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Kode Bobot</th>
            <th scope="col">Keterangan Bobot</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($bobot as $b) : ?>
            <tr>
              <th scope="row"><?= $i; ?></th>
              <td><?= $b['kode_bobot']; ?></td>
              <td><?= $b['keterangan_bobot']; ?></td>
              <td>
                <a href="<?= base_url('spk/editBobot/') . $b['id']; ?>" class="badge badge-success">edit</a>
                <a href="<?= base_url('spk/hapusBobot/') . $b['id']; ?>" class="badge badge-danger tombol-hapus">delete</a>
              </td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
</div>