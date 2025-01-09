@extends('front.layout.layout')

@push('styles')
    <style>
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card-img-top {
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            background: #f8f9fa;
            border-bottom-left-radius: 12px;
            border-bottom-right-radius: 12px;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
            color: #343a40;
        }

        .card-text {
            font-size: 0.95rem;
            color: #6c757d;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.2s ease;
            border-radius: 12px;
        }

        .card:hover .overlay {
            opacity: 1;
        }
    </style>
@endpush

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

    {{-- Section Kemitraan --}}
    <div class="container my-5">
        <h3 class="ubuntu-bold text-black text-center color-primary">
            Kemitraan
        </h3>
        <div class="row my-5">
            <div class="col-md-12 text-center">
                <div class="d-flex flex-column align-items-center">
                    <p>
                    <p class="text-black ubuntu-regular text-md">
                        Klub SOIna merupakan organisasi yang dibentuk untuk menjalankan visi dan misi SOIna dengan secara
                        langsung melibatkan secara teknis atlet, pelatih/guru, keluarga, relawan, masyarakat, institusi
                        pemerintah dan non-pemerintah serta semua pihak yang berkepentingan, serta berupaya memberikan ruang
                        yang seluas-luasnya bagi orang bertalenta khusus (OBK) untuk dapat menumbuhkembangkan potensi yang
                        terdapat pada dirinya dengan memberdayakan unsur pendukung seperti pemerintah, swasta, keluarga,
                        relawan dan semua pihak yang berkepentingan dan berminat.
                    </p>
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card position-relative">
                    <img src="https://soina.org/sitepad-data/uploads/2024/09/DSC_6645.jpg" class="card-img-top"
                        alt="Kemitraan 1">
                    <div class="overlay">Kemitraan 1</div>
                    <div class="card-body">
                        <h5 class="card-title">Kemitraan 1</h5>
                        <p class="card-text">Deskripsi singkat tentang kemitraan 1 yang menjelaskan kolaborasi dengan SOIna.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card position-relative">
                    <img src="https://soina.org/sitepad-data/uploads/2024/09/DSC_6645.jpg" class="card-img-top"
                        alt="Kemitraan 2">
                    <div class="overlay">Kemitraan 2</div>
                    <div class="card-body">
                        <h5 class="card-title">Kemitraan 2</h5>
                        <p class="card-text">Deskripsi singkat tentang kemitraan 2 yang mendukung visi SOIna.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card position-relative">
                    <img src="https://soina.org/sitepad-data/uploads/2024/09/DSC_6645.jpg" class="card-img-top"
                        alt="Kemitraan 3">
                    <div class="overlay">Kemitraan 3</div>
                    <div class="card-body">
                        <h5 class="card-title">Kemitraan 3</h5>
                        <p class="card-text">Deskripsi singkat tentang kemitraan 3 yang membantu pengembangan atlet SOIna.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
