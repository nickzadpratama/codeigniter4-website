'<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="judulTebak mb-5 mt-2">TEBAK ANGKA</h1>
            <p class="font-monospace">Tebak angka yang dimaksud dari 1 sampai 10, Kamu memiliki 3 kesempatan.</p>
        </div>
    </div>
</div>

<div id="tampil">
    <?php if ($tahap == 3) : ?>
        <div class="container mt-5 tombol">
            <div class="row justify-content-center">
                <div class="col-2">
                    <a href="/game/hasilTebak/<?= '1'; ?>/<?= 2; ?>/<?= true; ?>" class="satu">
                        <img src="/img/satu.png" height="100px">
                    </a>
                </div>
                <div class="col-2">
                    <a href="/game/hasilTebak/<?= '2'; ?>/<?= 2; ?>/<?= true; ?>" class="dua">
                        <img src="/img/dua.png" height="100px">
                    </a>
                </div>
                <div class="col-2">
                    <a href="/game/hasilTebak/<?= '3'; ?>/<?= 2; ?>/<?= true; ?>" class="tiga">
                        <img src="/img/tiga.png" height="100px">
                    </a>
                </div>
            </div>
            <div class="row justify-content-center my-5">
                <div class="col-2">
                    <a href="/game/hasilTebak/<?= '4'; ?>/<?= 2; ?>/<?= true; ?>" class="empat">
                        <img src="/img/empat.png" height="100px">
                    </a>
                </div>
                <div class="col-2">
                    <a href="/game/hasilTebak/<?= '5'; ?>/<?= 2; ?>/<?= true; ?>" class="lima">
                        <img src="/img/lima.png" height="100px">
                    </a>
                </div>
                <div class="col-2">
                    <a href="/game/hasilTebak/<?= '6'; ?>/<?= 2; ?>/<?= true; ?>" class="enam">
                        <img src="/img/enam.png" height="100px">
                    </a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-2">
                    <a href="/game/hasilTebak/<?= '7'; ?>/<?= 2; ?>/<?= true; ?>" class="tujuh">
                        <img src="/img/tujuh.png" height="100px">
                    </a>
                </div>
                <div class="col-2">
                    <a href="/game/hasilTebak/<?= '8'; ?>/<?= 2; ?>/<?= true; ?>" class="delapan">
                        <img src="/img/delapan.png" height="100px">
                    </a>
                </div>
                <div class="col-2">
                    <a href="/game/hasilTebak/<?= '9'; ?>/<?= 2; ?>/<?= true; ?>" class="sembilan">
                        <img src="/img/sembilan.png" height="100px">
                    </a>
                </div>
            </div>
            <div class="row justify-content-center my-5">
                <div class="col-2">
                    <a href="/game/hasilTebak/<?= '10'; ?>/<?= 2; ?>/<?= true; ?>" class="sepuluh">
                        <img src="/img/sepuluh.png" height="100px">
                    </a>

                </div>
            </div>
        </div>

        <?php if ($awal == '') : ?>
            <?php if (session()->getFlashdata('pesan7')) : ?>
                <div class="kotak">
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <div class="card text-white bg-success mb-3" style="max-width: 20rem;" id="hasil">
                            <div class="card-body font-monospace p-4">
                                <?= session()->getFlashdata('pesan7'); ?>
                                <br>
                                <div class="float-end mt-3">
                                    <a href="/game/tebak/<?= '1'; ?>" class="btn btn-danger">Main Lagi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('pesan5')) : ?>
                <div class="position-absolute top-50 start-50 translate-middle">
                    <div class="card text-white bg-danger mb-3" style="max-width: 20rem;" id="hasil">
                        <div class="card-body font-monospace p-4">
                            <?= session()->getFlashdata('pesan5'); ?>
                            <br>
                            <div class="float-end mt-3">
                                <button type="button" class="btn btn-primary" id="close">Oke</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>

    <?php if ($tahap == 2) : ?>
        <div class="container mt-5 tombol">
            <div class="row justify-content-center">
                <div class="col-2">
                    <a href="/game/hasilTebak2/<?= '1'; ?>/<?= 1; ?>/<?= $comp; ?>" class="satu">
                        <img src="/img/satu.png" height="100px">
                    </a>
                </div>
                <div class="col-2">
                    <a href="/game/hasilTebak2/<?= '2'; ?>/<?= 1; ?>/<?= $comp; ?>" class="dua">
                        <img src="/img/dua.png" height="100px">
                    </a>
                </div>
                <div class="col-2">
                    <a href="/game/hasilTebak2/<?= '3'; ?>/<?= 1; ?>/<?= $comp; ?>" class="tiga">
                        <img src="/img/tiga.png" height="100px">
                    </a>
                </div>
            </div>
            <div class="row justify-content-center my-5">
                <div class="col-2">
                    <a href="/game/hasilTebak2/<?= '4'; ?>/<?= 1; ?>/<?= $comp; ?>" class="empat">
                        <img src="/img/empat.png" height="100px">
                    </a>
                </div>
                <div class="col-2">
                    <a href="/game/hasilTebak2/<?= '5'; ?>/<?= 1; ?>/<?= $comp; ?>" class="lima">
                        <img src="/img/lima.png" height="100px">
                    </a>
                </div>
                <div class="col-2">
                    <a href="/game/hasilTebak2/<?= '6'; ?>/<?= 1; ?>/<?= $comp; ?>" class="enam">
                        <img src="/img/enam.png" height="100px">
                    </a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-2">
                    <a href="/game/hasilTebak2/<?= '7'; ?>/<?= 1; ?>/<?= $comp; ?>" class="tujuh">
                        <img src="/img/tujuh.png" height="100px">
                    </a>
                </div>
                <div class="col-2">
                    <a href="/game/hasilTebak2/<?= '8'; ?>/<?= 1; ?>/<?= $comp; ?>" class="delapan">
                        <img src="/img/delapan.png" height="100px">
                    </a>
                </div>
                <div class="col-2">
                    <a href="/game/hasilTebak2/<?= '9'; ?>/<?= 1; ?>/<?= $comp; ?>" class="sembilan">
                        <img src="/img/sembilan.png" height="100px">
                    </a>
                </div>
            </div>
            <div class="row justify-content-center my-5">
                <div class="col-2">
                    <a href="/game/hasilTebak2/<?= '10'; ?>/<?= 1; ?>/<?= $comp; ?>" class="sepuluh">
                        <img src="/img/sepuluh.png" height="100px">
                    </a>
                </div>
            </div>
        </div>

        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="kotak">
                <div class="position-absolute top-50 start-50 translate-middle">
                    <div class="card text-white bg-success mb-3" style="max-width: 20rem;" id="hasil">
                        <div class="card-body font-monospace p-4">
                            <?= session()->getFlashdata('pesan'); ?>
                            <br>
                            <div class="float-end mt-3">
                                <a href="/game/tebak/<?= '1'; ?>" class="btn btn-danger">Main Lagi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('pesan1')) : ?>
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="card text-white bg-dark mb-3" style="max-width: 20rem;" id="hasil">
                    <div class="card-body font-monospace p-4">
                        <?= session()->getFlashdata('pesan1'); ?>
                        <br>
                        <div class="float-end mt-3">
                            <a href="#tampil" class="btn btn-light" id="close">Oke</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('pesan2')) : ?>
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="card text-white bg-dark mb-3" style="max-width: 20rem;" id="hasil">
                    <div class="card-body font-monospace p-4">
                        <?= session()->getFlashdata('pesan2'); ?>
                        <br>
                        <div class="float-end mt-3">
                            <a href="#tampil" class="btn btn-light" id="close">Oke</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <?php if ($tahap == 1) : ?>
        <div class="container mt-5 tombol">
            <div class="row justify-content-center">
                <div class="col-2">
                    <a href="/game/hasilTebak3/<?= '1'; ?>/<?= $comp; ?>" class="satu">
                        <img src="/img/satu.png" height="100px">
                    </a>
                </div>
                <div class="col-2">
                    <a href="/game/hasilTebak3/<?= '2'; ?>/<?= $comp; ?>" class="dua">
                        <img src="/img/dua.png" height="100px">
                    </a>
                </div>
                <div class="col-2">
                    <a href="/game/hasilTebak3/<?= '3'; ?>/<?= $comp; ?>" class="tiga">
                        <img src="/img/tiga.png" height="100px">
                    </a>
                </div>
            </div>
            <div class="row justify-content-center my-5">
                <div class="col-2">
                    <a href="/game/hasilTebak3/<?= '4'; ?>/<?= $comp; ?>" class="empat">
                        <img src="/img/empat.png" height="100px">
                    </a>
                </div>
                <div class="col-2">
                    <a href="/game/hasilTebak3/<?= '5'; ?>/<?= $comp; ?>" class="lima">
                        <img src="/img/lima.png" height="100px">
                    </a>
                </div>
                <div class="col-2">
                    <a href="/game/hasilTebak3/<?= '6'; ?>/<?= $comp; ?>" class="enam">
                        <img src="/img/enam.png" height="100px">
                    </a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-2">
                    <a href="/game/hasilTebak3/<?= '7'; ?>/<?= $comp; ?>" class="tujuh">
                        <img src="/img/tujuh.png" height="100px">
                    </a>
                </div>
                <div class="col-2">
                    <a href="/game/hasilTebak3/<?= '8'; ?>/<?= $comp; ?>" class="delapan">
                        <img src="/img/delapan.png" height="100px">
                    </a>
                </div>
                <div class="col-2">
                    <a href="/game/hasilTebak3/<?= '9'; ?>/<?= $comp; ?>" class="sembilan">
                        <img src="/img/sembilan.png" height="100px">
                    </a>
                </div>
            </div>
            <div class="row justify-content-center my-5">
                <div class="col-2">
                    <a href="/game/hasilTebak3/<?= '10'; ?>/<?= $comp; ?>" class="sepuluh">
                        <img src="/img/sepuluh.png" height="100px">
                    </a>
                </div>
            </div>
        </div>

        <?php if (session()->getFlashdata('pesan6')) : ?>
            <div class="kotak">
                <div class="position-absolute top-50 start-50 translate-middle">
                    <div class="card text-white bg-success mb-3" style="max-width: 20rem;" id="hasil">
                        <div class="card-body font-monospace p-4">
                            <?= session()->getFlashdata('pesan6'); ?>
                            <br>
                            <div class="float-end mt-3">
                                <a href="/game/tebak/<?= '1'; ?>" class="btn btn-danger">Main Lagi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('pesan3')) : ?>
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="card text-white bg-dark mb-3" style="max-width: 20rem;" id="hasil">
                    <div class="card-body font-monospace p-4">
                        <?= session()->getFlashdata('pesan3'); ?>
                        <br>
                        <div class="float-end mt-3">
                            <a href="#tampil" class="btn btn-light" id="close">Oke</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('pesan4')) : ?>
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="card text-white bg-dark mb-3" style="max-width: 20rem;" id="hasil">
                    <div class="card-body font-monospace p-4">
                        <?= session()->getFlashdata('pesan4'); ?>
                        <br>
                        <div class="float-end mt-3">
                            <a href="#tampil" class="btn btn-light" id="close">Oke</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endif; ?>
</div>

<?= $this->endsection(); ?>