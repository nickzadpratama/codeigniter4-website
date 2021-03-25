<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h3 class="mb-3">Work Experience</h3>
            <div class="card mb-3 bg-transparent text-white">
                <div class="bg-gradient">
                    <div class="card-body">
                        <div class="mx-3">
                            <h4>Freelance</h4>
                            <div><strong>January 2021 - February 2021</strong></div>
                            Math and English tutors for elementary junior high school
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 bg-transparent text-white">
                <div class="bg-gradient">
                    <div class="card-body">
                        <div class="mx-3">
                            <h4>Genius Bimble</h4>
                            <div><strong>July 2017 - November 2019</strong></div>
                            Private math tutors for junior high school and senior high school
                        </div>
                    </div>
                </div>
            </div>
            <div class="card bg-transparent text-white">
                <div class="bg-gradient">
                    <div class="card-body">
                        <div class="mx-3">
                            <h4>PT Mitra Adiperkasa</h4>
                            <div><strong>October 2014 - July 2015</strong></div>
                            Sales promotion at Mark & Spencer store
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <h3 class="mb-3">Skills</h3>
            <div class="card bg-transparent text-white mb-3">
                <div class="bg-gradient">
                    <div class="card-body">
                        <div class="mx-3">
                            <h4>Web Programming</h4>
                            <ul>
                                <li>CSS</li>
                                <li>PHP</li>
                                <li>JS</li>
                                <li>MySQL</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card bg-transparent text-white mb-3">
                <div class="bg-gradient">
                    <div class="card-body">
                        <div class="mx-3">
                            <h4>Design Graphic</h4>
                            <ul>
                                <li>Adobe Illustrator</li>
                                <li>Corel Draw</li>
                                <li>Phtoshop</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5 mb-3">
    <h3>Creation</h3>
    <div class="row">
        <div class="col-lg-3 bg-transparent text-dark">
            <div class="card">
                <img src="https://picsum.photos/400/200" alt="Game Sederhana" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Pin About You</h5>
                    <p class="card-text">Hobby, Interest, etc</p>
                    <a href="/pin">
                        <div class="btn btn-primary">View Website</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 bg-transparent text-dark">
            <div class="card">
                <img src="https://picsum.photos/300/150" alt="Game Sederhana" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Game Sederhana</h5>
                    <p class="card-text">Suit Jawa, Tebak Angka</p>
                    <a href="/game">
                        <div class="btn btn-primary">View Website</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 bg-transparent text-dark">
            <div class="card">
                <img src="https://picsum.photos/500/250" alt="Game Sederhana" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">My Design</h5>
                    <p class="card-text">Phtoshop, Adobe Illustrator</p>
                    <a href="/gallery">
                        <div class="btn btn-primary">View Website</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>