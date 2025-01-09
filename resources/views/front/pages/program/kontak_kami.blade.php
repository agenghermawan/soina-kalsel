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
        <h3 class="ubuntu-bold text-black text-center color-primary">
            KONTAK
        </h3>
        <div class="row my-5">
            <div class="col-md-3 text-center">
                <div class="d-flex flex-column align-items-center">
                    <i class="fa-solid fa-map" style="color: red; font-size: 36px"></i>
                    <p class="card-text mt-3"><strong>Alamat</strong></p>
                    <p>
                        Gedung DNIKS Lantai 3, Jl. Tanah Abang Timur No. 15 Jakarta Pusat 10110, Indonesia.
                    </p>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="d-flex flex-column align-items-center">
                    <i class="fa-solid fa-phone" style="color: red; font-size: 36px"></i>
                    <p class="card-text mt-3"><strong>Telepon</strong></p>
                    <p>
                        +6221 3800 501 <br/>
                        Handphone: +62 877 6352 9911
                    </p>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="d-flex flex-column align-items-center">
                    <i class="fa-solid fa-envelope" style="color: red; font-size: 36px"></i>
                    <p class="card-text mt-3"><strong>Email</strong></p>
                    <p>
                        so.indonesia1989@gmail.com
                    </p>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="d-flex flex-column align-items-center">
                    <i class="fa-solid fa-house-user" style="color: red; font-size: 36px"></i>
                    <p class="card-text mt-3"><strong>Jam Operational</strong></p>
                    <p>
                        Senin-Jumat: 09.00-16.00 <br/>
                        Sabtu-Minggu: TUTUP
                    </p>
                </div>
            </div>
        </div>
    </div>


@endsection
