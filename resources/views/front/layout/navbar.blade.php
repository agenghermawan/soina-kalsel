<nav class="navbar navbar-expand-lg">
    <div class="container d-flex align-items-center justify-content-between">
        <!-- Logo di kiri -->
        <a class="navbar-brand" href="/">
            <img src="https://soina.org/sitepad-data/uploads/2024/10/logo-soina-new-60.jpg" width="400" height="100"
                alt="Soina Kalsel">
        </a>

        <!-- Tombol untuk menu saat layar kecil -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu di kanan -->
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('soina-club') }}">Program</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kemitraan</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
