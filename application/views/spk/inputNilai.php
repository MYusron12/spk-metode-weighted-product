<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
  <div class="row">
    <div class="col-lg-6">
      <?= $this->session->flashdata('message'); ?>
      <a href="<?= base_url('spk/tambahInputNilai'); ?>" class="btn btn-primary mb-3">Tambah Input Nilai ALternatif</a>
      <table class="table table-hover" id="dataTable">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th>Kode ALternatif</th>
            <th scope="col">Alternatif</th>
            <th>C 1</th>
            <th>C 2</th>
            <th>C 3</th>
            <th>C 4</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($inputjoinalt as $inalt) : ?>
            <tr>
              <th scope="row"><?= $i; ?></th>
              <td><?= $inalt['kode_alternatif']; ?></td>
              <td><?= $inalt['keterangan_alternatif']; ?></td>
              <td><?= $inalt['c1']; ?></td>
              <td><?= $inalt['c2']; ?></td>
              <td><?= $inalt['c3']; ?></td>
              <td><?= $inalt['c4']; ?></td>
              <td>
                <a href="<?= base_url('spk/editInputNilai/') . $inalt['id']; ?>" class="badge badge-success">edit</a>
                <a href="<?= base_url('spk/hapusInputNilai/') . $inalt['id']; ?>" class="badge badge-danger" onclick="return confirm('Apakah akan dihapus?')">delete</a>
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