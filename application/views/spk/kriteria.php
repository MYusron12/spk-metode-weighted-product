<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  <a href="<?= base_url('spk/tambahKriteria'); ?>" class="btn btn-primary mt-3 shadow mb-3">Tambah Kriteria</a>
  <table class="table table-hover table-responsive" id="dataTable">
    <thead class="table-primary">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Kode Kriteria</th>
        <th scope="col">Keterangan Kriteria</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
      <?php foreach ($kriteria as $kt) : ?>
        <tr>
          <th scope="row"><?= $i; ?></th>
          <td><?= $kt['kode_kriteria']; ?></td>
          <td><?= $kt['keterangan_kriteria']; ?></td>
          <td>
            <a href="<?= base_url('spk/editkriteria/') . $kt['id']; ?>" class="badge badge-success">edit</a>
            <a href="<?= base_url('spk/hapuskriteria/') . $kt['id']; ?>" class="badge badge-danger tombol-hapus">delete</a>
          </td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
<!-- /.container-fluid -->
</div>