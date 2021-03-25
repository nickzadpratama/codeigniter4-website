<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- modal -->
<div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="formatTambah" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formatTambah">Add Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/pin/save" method="post">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Name</label>
                        <input type="text" class="form-control" id="nama" name="nama" required autofocus placeholder="Enter your name..">
                    </div>
                    <div class="mb-3">
                        <label for="panggilan" class="form-label">Nick Name</label>
                        <input type="text" class="form-control" id="panggilan" name="panggilan" required placeholder="Enter your nick name..">
                    </div>
                    <div class="mb-3">
                        <label for="tanggalLahir" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Address</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Enter your address.." required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container mb-3">
    <div class="row">
        <h1 class="judulPin mb-5 mt-2">Pin About You</h1>
        <div class="col-6">
            <form action="" method="post">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" placeholder="Enter a search keyword" name="keyword">
                    <button class="btn btn-outline-secondary" type="submit" name="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col">

            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success text-center" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('pesan1')) : ?>
                <div class="alert alert-success text-center" role="alert">
                    <?= session()->getFlashdata('pesan1'); ?>
                </div>
            <?php endif; ?>

            <div class="card">
                <div class="card-header bg-secondary text-white">
                    Pin About You!
                </div>
                <div class="card-body bg-light">
                    <table class="table table-success table-striped">
                        <tr class="border-bottom-0">
                            <th>No.</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                        <?php $i = 1 + (6 * ($currentPage - 1)); ?>
                        <?php foreach ($pin as $p) : ?>
                            <tr>
                                <td><?= $i . '.'; ?></td>
                                <td><?= $p['nama']; ?></td>
                                <td><?= $p['alamat']; ?></td>
                                <td>
                                    <a href="/pin/<?= $p['id']; ?>" class="btn btn-success">DETAIL</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </table>

                    <?= $pager->links('pin', 'pin_pagination'); ?>

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahData">
                        ADD DATA
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>