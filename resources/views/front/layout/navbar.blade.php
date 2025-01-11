<nav class="navbar navbar-expand-lg">
    <div class="container d-flex align-items-center justify-content-between">
        <!-- Logo di kiri -->
        <a class="navbar-brand" href="/">
            <img src="https://soina.org/sitepad-data/uploads/2024/10/logo-soina-new-60.jpg" width="300" 
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
                <!-- Dropdown Program -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="programDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Program
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="programDropdown">
                        <li><a class="dropdown-item" href="{{ route('young-athletes') }}">Young Athletes</a></li>
                        <li><a class="dropdown-item" href="{{ route('soina-club') }}">Soina Club</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{  route('blog') }}">Blog</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="programDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Tentang Kami
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="programDropdown">
                        <li><a class="dropdown-item" href="{{ route('tentang-kami') }}">Sejarah</a></li>
                        <li><a class="dropdown-item" href="{{ route('misi') }}">Misi</a></li>
                        <li><a class="dropdown-item" href="{{ route('kontak-kami') }}">Kontak Kami</a></li>
                        <li><a class="dropdown-item" href="{{ route('disabilitas-intelektual') }}">Disabilitas Intelektual</a></li>
                        <li><a class="dropdown-item" href="{{ route('kalendar-kegiatan') }}">Kelendar Kegiatan</a></li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kemitraan') }}">Kemitraan</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
