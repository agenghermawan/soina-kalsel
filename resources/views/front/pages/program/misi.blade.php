@extends('front.layout.layout')
@push('styles')
    <style>
        .text-vision {
            display: flex;
          
        }

        .text-vision .h1 {
            position: relative;
            display: inline-block;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .text-vision .h1::after {
            content: '';
            display: block;
            width: 50px;
            /* Panjang garis */
            height: 3px;
            /* Ketebalan garis */
            background-color: red;
            /* Warna garis */
            margin: 10px auto 0;
            /* Jarak antara teks dan garis */
            position: relative;
        }
    </style>
@endpush
@section('content')
    <div>
        <img src="https://cdn.rri.co.id/berita/Makassar/o/1725032796430-female-athlete-competing-paralympic-games_23-2151586519/acdazpgut70ojwi.jpeg"
            style="object-fit: cover; object-position: top; width: 100%; height: 400px;" alt="...">
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <div class="header text-vision">
                    <h1 class="h1 text-left color-primary">Visi</h1>
                </div>
                <p class="text-black ubuntu-light text-md">
                    Melalui gerakan Special Olympics, memberikan kesempatan kepada Penyandang Disabilitas
                    Intelektual atau Orang Bertalenta Khusus (OBK) untuk menjadi warga negara yang berguna,
                    produktif, diterima, dihargai, dan diakui kesetaraannya sebagai bagian dari masyarakat
                </p>
                <div class="header text-vision">
                    <h1 class="h1 text-left color-primary">Misi</h1>
                </div>
                <p class="text-black ubuntu-light text-md">
                    Menyelenggarakan pelatiahan dan kompetisi olahraga olimpiade sepanjang tahun bagi Orang
                    Bertalenta Khusus dan serta memberikan kesempatan yang berkesinambungan untuk membentuk fisik
                    yang sehat, bugar, menunjukkan keberanian, merasakan kebahagiaan, serta dapat menunjukan
                    kemampuan, keahlian, dan persahabatan, baik dengan keluarga, atlet Special Olympics lainnya,
                    maupun masyarakat.
                </p>
            </div>
        </div>
    </div>


    <div class="container my-5">
        <!-- Kutipan dengan garis merah -->
        <div class="row mb-5">
            <div class="col-md-6">
                <img src="https://soina.org/sitepad-data/uploads/2024/09/Bapak-Sardjono-sbg-negara-anggota-SOI.jpeg"
                    class="img-fluid" alt="">
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
    </div>
@endsection
