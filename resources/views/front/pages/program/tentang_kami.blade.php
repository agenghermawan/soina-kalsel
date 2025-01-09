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
            SEJARAH SPECIAL OLYMPICS
        </h3>
        <div class="row">
            <div class="col-md-12">
                <p class="text-black ubuntu-regular text-md color-primary text-center">
                    Dari kegiatan sederhana di Halaman Belakang tahun 1968 menuju gerakan global
                </p>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="container my-5">
            <h5 class="ubuntu-bold text-black text-left">
                Camp Shriver; Awal Mula Gerakan Special Olympics
            </h5>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-black ubuntu-regular text-md">
                        Awal mula Special Olympics dimulai dari Camp Shriver, yang didirikan oleh Eunice Kennedy Shriver pada awal 1960-an di halaman belakang rumahnya di Maryland. Ia mengundang anak-anak berkebutuhan khusus dan merekrut siswa sebagai pendamping. Dengan 34 anak dan 26 pendamping, acara ini sukses, dengan anak-anak bermain berbagai olahraga. Pendamping yang awalnya ragu mulai menyadari bahwa anak-anak ini bukan "sulit" atau "tidak bisa diajari"; mereka hanya ingin bersenang-senang. Camp Shriver berlangsung selama empat tahun dan menjadi langkah awal penting sebelum lahirnya Special Olympics yang lebih besar.                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="container my-5">
            <h5 class="ubuntu-bold text-black text-left">
                Sejarah Special Olympics Indonesia
            </h5>
            <div class="d-flex justify-content-center">
                <div class="col-md-8">
                    <img src="https://soina.org/sitepad-data/uploads/2024/10/Colorful-Modern-Business-Timeline-Infographic-Graph-2.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>


@endsection
