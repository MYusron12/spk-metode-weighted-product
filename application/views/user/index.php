<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <div class="card mb-3 col-lg-8">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Nama : <?= $user['name']; ?></h5>
                    <p class="card-text">Email : <?= $user['email']; ?></p>
                    <p class="card-text">Aktif Sejak : <small class="text-muted">Member since <?= date('d F Y', $user['date_created']); ?></small></p>
                </div>
            </div>
            <br>
            <h4>Hai supplier <?= $user['name']; ?>, </h4>
            <?php if ($user['is_upload'] == 0) : ?>
                <h4> silahkan upload berkas anda! </h4>
                <h4><a href="<?= base_url('user/edit'); ?>">== klik untuk upload ==</a></h4>
            <?php else : ?>
                <h4>Anda Sudah Upload Data!</h4>
            <?php endif; ?>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->