<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="row">
    <div class="col">
        <div class="jumbotron text-center text-dark">
            <div class="contact">
                <a href="/" class="btn btn-primary">Home</a>
            </div>
            <img src="/img/nick.jpg" alt="Nickzad Pratama" width="200px" class="rounded-circle img-thumbnail">
            <h1 class="display-4">Nickzad Pratama</h1>
            <p class="lead">Enjoy Web Development & Design Graphic</p>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#ffffff" fill-opacity="1" d="M0,320L24,298.7C48,277,96,235,144,208C192,181,240,171,288,165.3C336,160,384,160,432,170.7C480,181,528,203,576,197.3C624,192,672,160,720,160C768,160,816,192,864,213.3C912,235,960,245,1008,234.7C1056,224,1104,192,1152,186.7C1200,181,1248,203,1296,181.3C1344,160,1392,96,1416,64L1440,32L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path>
            </svg>
        </div>
    </div>
</div>

<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success text-center mt-4" role="alert" id="pesan">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
<?php endif; ?>

<div class="container">
    <div class="row text-center mb-3">
        <div class="col">
            <h2>Contact Me</h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/Home/message" method="post">
                <div class="mb-3">
                    <label for="nama" class="form-label">Name</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="pesan" class="form-label">Message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="pesan"></textarea>
                </div>
                <button type="submit" class="btn btn-success float-end">Send</button>
            </form>
        </div>
    </div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#e2edff" fill-opacity="1" d="M0,192L30,192C60,192,120,192,180,186.7C240,181,300,171,360,154.7C420,139,480,117,540,112C600,107,660,117,720,144C780,171,840,213,900,229.3C960,245,1020,235,1080,234.7C1140,235,1200,245,1260,240C1320,235,1380,213,1410,202.7L1440,192L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
</svg>

<footer class="text-center pb-5">
    <div class="mb-2">
        <a data-bs-toggle="collapse" href="#whatsapp"><img src="https://img.icons8.com/fluent/30/000000/whatsapp.png" alt="@nickzadp" /></a>
        <a href="https://www.instagram.com/nickzadp/" target="_blank" class="ms-3"><img src="https://img.icons8.com/fluent/30/000000/instagram-new.png" alt="@nickzadp" /></a>
        <a href="https://twitter.com/nickzadp" target="_blank" class="mx-3"><img src="https://img.icons8.com/fluent/30/000000/twitter.png" alt="@nickzadp" /></a>
        <a href="https://id-id.facebook.com/nickzad.pratama" target="_blank"><img src="https://img.icons8.com/officel/30/000000/facebook-new.png" alt="Nickzad Pratama" /></a>
    </div>
    <div class="row">
        <div class="col-2 offset-md-5">
            <div class="collapse" id="whatsapp">
                <div class="card card-body">
                    0859106980511
                </div>
            </div>
        </div>
    </div>
    <p>Created with <i class="bi bi-heart-fill text-danger"></i> by <a href="https://www.instagram.com/nickzadp/">Nickzad Pratama</a></p>
</footer>

<?= $this->endSection(); ?>