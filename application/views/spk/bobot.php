<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  <div class="row">
    <div class="col-lg-6">
      <?= $this->session->flashdata('message'); ?>
      <a href="<?= base_url('spk/tambahBobot'); ?>" class="btn btn-primary mb-3">Tambah Bobot</a>
      <table class="table table-hover" id="dataTable">
        <thead>
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
                <a href="<?= base_url('spk/hapusBobot/') . $b['id']; ?>" class="badge badge-danger" onclick="return confirm('Apakah akan dihapus?')">delete</a>
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