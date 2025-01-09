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

    {{--  Content --}}
    <div class="container my-5">
        <h1 class="ubuntu-bold color-primary text-center mb-5">SPECIAL OLYMPICS INDONESIA (SOIna) KLUB</h1>
        <div class="row">
            <div class="col-md-4">
                <img src="https://soina.org/sitepad-data/uploads/2024/10/WhatsApp-Image-2024-10-01-at-3.04.35-PM-1.jpeg" class="img-fluid" alt="">
            </div>
            <div class="col-md-4">
                <img src="https://soina.org/sitepad-data/uploads/2024/10/WhatsApp-Image-2024-10-01-at-3.04.43-PM.jpeg" class="img-fluid" alt="">
            </div>
            <div class="col-md-4">
                <img src="https://soina.org/sitepad-data/uploads/2024/10/WhatsApp-Image-2024-10-01-at-3.04.35-PM-1.jpeg"
                     class="img-fluid" alt="">
            </div>
        </div>
    </div>
    <div class="container my-5">
        <h3 class="ubuntu-bold text-black text-center">
            Apa itu SOIna Klub?
        </h3>
        <div class="row">
            <div class="col-md-12">
                <p class="text-black ubuntu-regular text-md">
                    Klub SOIna merupakan organisasi yang dibentuk untuk menjalankan visi dan misi SOIna dengan secara langsung melibatkan secara teknis atlet, pelatih/guru, keluarga, relawan, masyarakat, institusi pemerintah dan non-pemerintah serta semua pihak yang berkepentingan, serta berupaya memberikan ruang yang seluas-luasnya bagi orang bertalenta khusus (OBK) untuk dapat menumbuhkembangkan potensi yang terdapat pada dirinya dengan memberdayakan unsur pendukung seperti pemerintah, swasta, keluarga, relawan dan semua pihak yang berkepentingan dan berminat.
                </p>
                <p class="text-black ubuntu-regular text-md">
                    Sekolah dan komunitas adalah inti dari gerakan Special Olympics di Indonesia. Di sinilah para atlet, partner (non-disabilitas intelektual), generasi muda, pelatih, pendidik, anggota keluarga, badan pemerintah daerah, dan sektor swasta dapat berinteraksi dan mengambil bagian dalam mengembangkan masyarakat inklusif.
                </p>
                <p class="text-black ubuntu-regular text-md">
                    Klub SOIna dimaksudkan untuk menjadi ruang yang aman dan menyenangkan bagi para atlet untuk berlatih sepanjang tahun dan terlibat dalam kegiatan non-olahraga (program inisiatif special olympics, seni dan budaya,) untuk tetap aktif bahkan setelah usia sekolah.                </p>
            </div>

        </div>
    </div>
    <div class="container my-5">
        <h3 class="ubuntu-bold text-black text-center">
            Tujuan SOIna Klub
        </h3>
        <div class="row">
            <div class="col-md-12">
                <div class="h5">
                    Umum
                </div>
                <ol class="ubuntu-light">
                    <li>Mendapatkan dan memiliki ruang yang lebih luas, terbuka bagi orang bertalenta khusus peluang, kesempatan, tumbuh kembang potensi dan keinginannya bersama para guru, pelatih, relawan, keluarga, masyarakat, pemerintah dan swasta</li>
                    <li>
                        Pelatihan sepanjang tahun dan kompetisi yang teratur bagi para OBK dan Partner-nya dalam berolahraga, non olahraga atau inisiatif program, seni-budaya, meningkatkan kapasitas dan komitmen para relawan yang bertugas sebagai:  mentor, guru, pelatih, juri dan wasit,<
                    </li>
                    <li>
                        Terbuka ruang bagi semua pihak untuk terlibat dalam upaya mengembangkan kuantitas dan kualitas atlet SOIna, mampu menjadi warga negara yang berguna dan produktif, diterima, dihargai dan diakui sebagai bagian integral dari masyarakat, serta mampu mengharumkan nama bangsa Indonesia di kancah dunia.
                    </li>
                </ol>
                <div class="h5">
                    Khusus
                </div>
                <ol class="ubuntu-light">
                    <li> Tersistimatisnya pendataan untuk sensus tahunan</li>
                    <li>
                        Mensosialisakan sistem pendataan secara berkala untuk atlet, partner, pelatih, relawan, pemuda - pemudi, atlet muda (YA) dan keluarga
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <h3 class="ubuntu-bold text-black text-left mb-2">
            Cakupan SOIna Klub
        </h3>
        <div class="row">
            <div class="col-md-12">
                <div class="h6">
                    Saat ini soina klub tersebar di 204 titik lokasi, silakan kunjungi berikut untuk informasi lebih lanjut. link
                </div>
            </div>
        </div>
    </div>
@endsection
