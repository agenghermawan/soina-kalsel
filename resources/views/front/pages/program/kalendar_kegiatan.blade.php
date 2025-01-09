@extends('front.layout.layout')

@section('content')
    {{--  Banner --}}
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
        <h3 class="ubuntu-bold text-black text-center color-primary text-center">
            KALENDAR KEGIATAN
        </h3>
        <div class="row">
            <div class="col-md-12">
                <p class="text-black ubuntu-regular text-md color-primary text-center">
                    Jadwal kegiatan Special Olympics Indonesia
                </p>
            </div>
        </div>
    </div>

    <div class="my-5">
        <section class="young-section">
            <div class="row align-items-center">
                <!-- Text Section -->
                <div class="col-lg-12 mb-4 mb-lg-0 text-center">
                    <h1 class="hero-title text-light">Ayo bergabung!</h1>
                    <div class="d-flex justify-content-center">
                        <div class="col-md-6">
                            <p class="ubuntu-medium text-light">
                                Bergabunglah dengan Special Olympics dan jadilah bagian dari perubahan! Kami mengundang Anda
                                untuk berpartisipasi dalam program olahraga yang menginspirasi, mendukung atlet penyandang
                                disabilitas intelektual, dan merayakan semangat inklusi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
