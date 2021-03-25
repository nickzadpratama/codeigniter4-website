<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="judulGame mt-2 mb-5">Game Sederhana</h1>
            <p>Terdapat beberapa game sederhana yang dibuat menggunakan bahasa pemerograman PHP dan Javascript.</p>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-3 bg-transparent text-dark">
            <div class="card mb-3">
                <img src="https://picsum.photos/300/150" alt="Game Sederhana" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Suit Jawa</h5>
                    <p class="card-text">Pilih di antara orang, semut, dan gajah.</p>
                    <a href="/game/suit">
                        <div class="btn btn-primary">View Website</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 bg-transparent text-dark">
            <div class="card mb-3">
                <img src="https://picsum.photos/250/125" alt="Game Sederhana" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Tebak Angka</h5>
                    <p class="card-text">Tebak angka yang dimaksud di antara satu sampai sepuluh.</p>
                    <a href="/game/tebak">
                        <div class="btn btn-primary">View Website</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endsection(); ?>