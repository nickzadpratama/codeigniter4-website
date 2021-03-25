<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-2 mb-3">
    <div class="row">
        <div class="col">
            <h1 class="judulSuit mb-5">SUIT JAWA</h1>
            <p class="font-monospace">Pilih salah satu di antara orang, semut, dan gajah untuk melawan komputer.</p>
        </div>
    </div>
</div>

<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success text-center mb-4" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
<?php endif; ?>

<?php if (session()->getFlashdata('pesan1')) : ?>
    <div class="alert alert-danger text-center mb-4" role="alert">
        <?= session()->getFlashdata('pesan1'); ?>
    </div>
<?php endif; ?>

<?php if (session()->getFlashdata('pesan2')) : ?>
    <div class="alert alert-secondary text-center mb-4" role="alert">
        <?= session()->getFlashdata('pesan2'); ?>
    </div>
<?php endif; ?>

<div class="container">
    <div class="row">
        <div class="position-relative">
            <div class="col float-end ulang position-absolute top-0 end-0">
                <a href="/game/suit" class="text-dark"><span>&#10226;</span></a>
                <h3>reset</h3>
            </div>
        </div>
    </div>
    <div class="row suitPilih">
        <div class="col orang">
            <a href="/game/hasilSuit/<?= 'orang'; ?>">
                <img src="/img/orang1.png" height="300px">
                <span>orang</span>
            </a>
        </div>
        <div class="col gajah">
            <a href="/game/hasilSuit/<?= 'gajah'; ?>">
                <img src="/img/gajah.png" height="300px">
                <span>gajah</span>
            </a>
        </div>
        <div class="col semut">
            <a href="/game/hasilSuit/<?= 'semut'; ?>">
                <img src="/img/semut.png" height="300px">
                <span>semut</span>
            </a>
        </div>
    </div>
</div>

<?= $this->endsection(); ?>