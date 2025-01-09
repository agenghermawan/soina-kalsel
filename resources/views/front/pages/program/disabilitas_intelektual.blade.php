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
            border-radius: 12px;
            height: 350px;
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

    <div class="container my-5">
        <h3 class="ubuntu-bold text-black text-center color-primary text-center">
            DISABILITAS INTELEKTUAL
        </h3>
        <div class="row">
            <div class="col-md-12">
                <p class="text-black ubuntu-regular text-md color-primary text-center">
                    Penyandang disabilitas intelektual menginspirasi kita. Namun, apa itu disabilitas intelektual?
                </p>
            </div>
        </div>
    </div>


    <div class="container my-5">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card position-relative">
                    <img src="https://soina.org/sitepad-data/uploads/2024/09/DSC_6645.jpg" class="card-img-top"
                        alt="Kemitraan 1">
                    <div class="overlay">Kemitraan 1</div>

                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card position-relative">
                    <img src="https://soina.org/sitepad-data/uploads/2024/09/DSC_6645.jpg" class="card-img-top"
                        alt="Kemitraan 2">
                    <div class="overlay">Kemitraan 2</div>

                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card position-relative">
                    <img src="https://soina.org/sitepad-data/uploads/2024/09/DSC_6645.jpg" class="card-img-top"
                        alt="Kemitraan 3">
                    <div class="overlay">Kemitraan 3</div>

                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="container my-5">
            <h5 class="ubuntu-bold text-black text-left">
                Apa itu Disabilitas Intelektual?
            </h5>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-black ubuntu-regular text-md">
                        Disabilitas intelektual (atau ID) adalah istilah yang digunakan ketika seseorang memiliki
                        keterbatasan tertentu dalam fungsi dan keterampilan kognitif, termasuk keterampilan konseptual,
                        sosial, dan praktis, seperti keterampilan bahasa, sosial, dan perawatan diri. Keterbatasan ini dapat
                        menyebabkan seseorang berkembang dan belajar lebih lambat atau berbeda dari orang yang biasanya
                        berkembang. Disabilitas intelektual dapat terjadi kapan saja sebelum seseorang berusia 22 tahun,
                        bahkan sebelum lahir.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="container my-5">
            <h5 class="ubuntu-bold text-black text-left">
                Bagaimana Disabilitas Intelektual Terjadi?
            </h5>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-black ubuntu-regular text-md">
                        Disabilitas intelektual - yang sebelumnya dikenal sebagai keterbelakangan mental - dapat disebabkan
                        oleh cedera, penyakit, atau masalah pada otak. Bagi banyak anak, penyebab disabilitas intelektual
                        mereka tidak diketahui. Beberapa penyebab disabilitas intelektual dapat terjadi sebelum kelahiran.
                        Beberapa terjadi saat bayi dilahirkan atau segera setelah lahir. Penyebab lain dari disabilitas
                        intelektual tidak terjadi sampai anak berusia lebih tua; ini mungkin termasuk cedera kepala yang
                        parah, infeksi, atau stroke.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="container my-5">
            <h5 class="ubuntu-bold text-black text-left">
                Apa Penyebab Paling Umum?
            </h5>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-black ubuntu-regular text-md">
                        Penyebab paling umum dari disabilitas intelektual adalah:
                    </p>
                    <ol class="ubuntu-light">
                        <li>
                            Kondisi genetik. Kadang-kadang disabilitas intelektual disebabkan oleh gen abnormal yang
                            diwarisi dari orang tua, kesalahan saat gen bergabung, atau alasan lain. Contoh kondisi genetik
                            adalah Down Syndrome, Fragile X Syndrome, dan fenilketonuria (PKU).
                        </li>
                        <li>
                            Komplikasi selama kehamilan. Disabilitas intelektual dapat terjadi ketika bayi tidak berkembang
                            di dalam ibu dengan baik. Misalnya, mungkin ada masalah dengan cara sel-sel bayi membelah.
                            Seorang wanita yang minum alkohol atau terkena infeksi seperti rubella selama kehamilan juga
                            dapat memiliki bayi dengan kecacatan intelektual.
                        </li>
                        <li>
                            Masalah selama kelahiran. Jika terjadi komplikasi selama persalinan dan kelahiran, seperti bayi
                            tidak mendapatkan oksigen yang cukup, ia mungkin mengalami kecacatan intelektual.
                        </li>
                        <li>
                            Penyakit atau paparan racun. Penyakit seperti batuk rejan, campak, atau meningitis dapat
                            menyebabkan cacat intelektual. Mereka juga dapat disebabkan oleh kekurangan gizi yang parah,
                            tidak mendapatkan perawatan medis yang tepat, atau karena terpapar racun seperti timbal atau
                            merkuri.
                        </li>
                        <li>
                            Kita tahu bahwa disabilitas intelektual tidak menular: Anda tidak dapat tertular disabilitas
                            intelektual dari orang lain. Kita juga tahu bahwa ini bukan jenis penyakit mental, seperti
                            depresi. Tidak ada obat untuk disabilitas intelektual. Namun, anak-anak dengan disabilitas
                            intelektual dapat belajar melakukan banyak hal. Mereka mungkin hanya perlu lebih banyak waktu
                            atau belajar dengan cara yang berbeda dari anak-anak lain.
                        </li>
                    </ol>
                </div>
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
