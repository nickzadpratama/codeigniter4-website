<?php if (isset($navbar)) : ?>
    <div class="container my-5">
        <h1>Nickzad Pratama</h1>
        <a type="button" class="btn btn-outline-primary" href="mailto:pratamanickzad7@gmail.com">
            pratamanickzad7@gmail.com
        </a>
        <p class="lead mt-1">
            Enjoys Web Development and Design Graphic | Good analytical.
        </p>
    </div>

    <div class="container">
        <nav>
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a href="/" class="nav-link <?= $currentPage == '/' ? 'active' : ''; ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a href="/about" class="nav-link <?= $currentPage == '/about' ? 'active' : ''; ?>">About Me</a>
                </li>
                <li class="nav-item">
                    <a href="/portfolio" class="nav-link <?= $currentPage == '/portfolio' ? 'active' : ''; ?>">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a href="/contact" class="nav-link <?= $currentPage == '/contact' ? 'active' : ''; ?>">Contact Me</a>
                </li>
            </ul>
        </nav>
    </div>
<?php endif; ?>

<?php if (isset($navbar1)) : ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="/" class="btn btn-primary float-end  mt-5">Home</a>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if (isset($navbar2)) : ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="/game" class="btn btn-danger float-end mt-5">EXIT</a>
            </div>
        </div>
    </div>
<?php endif; ?>