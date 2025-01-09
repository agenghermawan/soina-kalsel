@extends('front.layout.layout')

@section('content')
    <div class="">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://soina.org/sitepad-data/uploads/2024/09/6-21-23-Awards-Gymnastics-WorldGames2023-59.jpg"
                         class="d-block w-100" height="500px" style="object-fit: cover" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://soina.org/sitepad-data/uploads/2024/10/IMG_93055.jpg" class="d-block w-100"
                         height="500px" style="object-fit: cover" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://soina.org/sitepad-data/uploads/2024/09/DSC_6645.jpg" class="d-block w-100"
                         height="500px" style="object-fit: cover" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container my-5">
        <!-- Kutipan dengan garis merah -->
        <div class="row mb-5">
            <div class="col-md-6">
                <img src="https://soina.org/sitepad-data/uploads/2024/09/Bapak-Sardjono-sbg-negara-anggota-SOI.jpeg" class="img-fluid" alt="">
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div class="ps-3" style="border-right: 6px solid red;">
                    <blockquote class="blockquote text-center">
                        <p class="mb-3">Let me win. But if I cannot win, let me be brave in the attempt</p>
                        <p>Biarkan kami menang, tapi apabila kami tidak menang, berilah kami kesempatan untuk mencobanya</p>
                        <footer class="blockquote-footer">
                            Janji Atlet Special Olympics
                        </footer>
                    </blockquote>
                </div>
            </div>
        </div>

        <hr>

        <!-- Bagian Vission -->
        <div class="row mt-5">
            <div class="col-md-6">
                <h3 class="ubuntu-bold text-black text-center color-primary">Vission</h3>
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-black ubuntu-regular text-md color-primary text-center">
                            Melalui gerakan Special Olympics, memberikan kesempatan kepada Penyandang Disabilitas Intelektual atau Orang Bertalenta Khusus (OBK) untuk menjadi warga negara yang berguna, produktif, diterima, dihargai, dan diakui kesetaraannya sebagai bagian dari masyarakat
                        </p>
                    </div>
                </div>
            </div>

            <!-- Bagian Mission -->
            <div class="col-md-6">
                <h3 class="ubuntu-bold text-black text-center color-primary">Mission</h3>
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-black ubuntu-regular text-md color-primary text-center">
                            Menyelenggarakan pelatiahan dan kompetisi olahraga olimpiade sepanjang tahun bagi Orang Bertalenta Khusus dan serta memberikan kesempatan yang berkesinambungan untuk membentuk fisik yang sehat, bugar, menunjukkan keberanian, merasakan kebahagiaan, serta dapat menunjukan kemampuan, keahlian, dan persahabatan, baik dengan keluarga, atlet Special Olympics lainnya, maupun masyarakat.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="">
        <section class="donation-section">
            <div class="row align-items-center">
                <!-- Text Section -->
                <div class="col-lg-12 mb-4 mb-lg-0 text-center">
                    <h1 class="hero-title text-light">AYO BERKONTRIBUSI</h1>
                    <p class="ubuntu-medium text-light">
                        Dukung para atlet  untuk mendorong masyarakat yang inklusif!
                    </p>
                </div>
            </div>
        </section>
    </div>
@endsection
