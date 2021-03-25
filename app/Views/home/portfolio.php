<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col">
            <div class="card mb-3 bg-transparent text-white">
                <div class="bg-gradient">
                    <div class="card-body">
                        <div class="mx-3">
                            <h4>My Design</h4>
                            <div><strong>Art</strong></div>
                            <p>Graphic designs created using Adobe Illustrator and Photoshop</p>
                            <a href="/gallery">
                                <div class="btn btn-primary">View Website</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-3 bg-transparent text-white">
                <div class="bg-gradient">
                    <div class="card-body">
                        <div class="mx-3">
                            <h4>Game Sederhana</h4>
                            <div><strong>Fun</strong></div>
                            <p>Games created using the PHP programming language</p>
                            <a href="/game">
                                <div class="btn btn-primary">View Website</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-3 bg-transparent text-white">
                <div class="bg-gradient">
                    <div class="card-body">
                        <div class="mx-3">
                            <h4>Pin About You</h4>
                            <div><strong>Data</strong></div>
                            <p>CURD which populates it using the faker library</p>
                            <a href="/pin">
                                <div class="btn btn-primary">View Website</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>