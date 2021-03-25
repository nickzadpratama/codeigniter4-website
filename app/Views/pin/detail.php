<?php
$pecah = explode('-', $pin['tanggalLahir']);
$tanggalLahir = $pecah[2] . '-' . $pecah[1] . '-' . $pecah[0];

$pecah1 = explode('-', $pin['created_at']);
$created = $pecah1[2] . '-' . $pecah1[1] . '-' . $pecah1[0];
?>

<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- modal -->
<div class="modal fade" id="ubahData" tabindex="-1" aria-labelledby="formatUbah" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formatUbah">Change Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/pin/update/<?= $pin['id']; ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Name</label>
                        <input type="text" class="form-control" id="nama" name="nama" required value="<?= (old('nama')) ? old('nama') : $pin['nama']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="panggilan" class="form-label">Nick Name</label>
                        <input type="text" class="form-control" id="panggilan" name="panggilan" required value="<?= (old('panggilan')) ? old('panggilan') : $pin['panggilan']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="tanggalLahir" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir" required value="<?= (old('tanggalLahir')) ? old('tanggalLahir') : $pin['tanggalLahir']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Address</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required value="<?= (old('alamat')) ? old('alamat') : $pin['alamat']; ?>">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Changes Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php if (session()->getFlashdata('pesan2')) : ?>
    <div class="alert alert-success text-center mt-2" role="alert">
        <?= session()->getFlashdata('pesan2'); ?>
    </div>
<?php endif; ?>

<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="card position-absolute top-50 start-50 translate-middle mt-4 detail">
                <img src="https://picsum.photos/600/300" class="card-img-top" alt="...">
                <div class="card-header">
                    <?= $pin['nama']; ?>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-primary"><?= $pin['panggilan']; ?></h5>
                    <p class="card-text"><?= $tanggalLahir; ?></p>
                    <p class="card-text"><?= $pin['alamat']; ?></p>
                    <div>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#ubahData" class="btn btn-warning">EDIT</button>

                        <!-- spoofing -->
                        <form action="/pin/delete/<?= $pin['id']; ?>" method="post" class="d-inline">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete data?')">DELETE</button>
                        </form>

                    </div>
                    <div class="mt-2">
                        <a href="/pin" class="kembali">Kembali ke daftar pin</a>
                    </div>
                    <p class="card-text float-end"><small class="text-muted">Created at <?= $created; ?></small></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>