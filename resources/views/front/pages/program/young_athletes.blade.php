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
            YOUNG ATHLETES
        </h3>
        <div class="row">
            <div class="col-md-12">
                <p class="text-black ubuntu-regular text-md color-primary text-center">
                    Program Young Athletes, langkah awal menuju prestasi dan inklusi
                </p>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <iframe width="100%" height="719" src="https://www.youtube.com/embed/j65ik8WFucU?list=TLGGrrEbEZTrW-EwODAxMjAyNQ" title="Special Olympics YA Lets Play Together" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>

    <div class="container my-5">
        <div class="container my-5">
            <h5 class="ubuntu-bold text-black text-left">
                Apa itu Program Young Athletes?
            </h5>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-black ubuntu-regular text-md">
                        Special Olympics Young Athletes adalah program bermain bagi anak usia dini, yang dirancang untuk anak-anak dengan atau tanpa disabilitas intelektual, berusia 2 hingga 7 tahun. Program ini memperkenalkan keterampilan dasar olahraga, seperti berlari, menendang, dan melempar, dengan cara yang menyenangkan. Young Athletes juga memberikan kesempatan bagi keluarga, guru, pengasuh, serta anggota komunitas untuk bersama-sama merasakan kegembiraan bermain dan berolahraga dengan semua anak.
                    </p>
                    <p class="text-black ubuntu-regular text-md">
                        Young Athletes memberikan kesempatan yang setara bagi anak-anak dengan berbagai kemampuan untuk mencapai fase penting perkembangan. Melalui program ini, anak-anak belajar berinteraksi dengan orang lain serta mengembangkan keterampilan dasar yang mendukung proses belajar. Mereka juga diajarkan berbagi, bergiliran, dan mengikuti arahan, keterampilan yang bermanfaat dalam aktivitas sehari-hari di lingkungan keluarga, masyarakat, dan sekolah.                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="container my-5">

            <div class="row">
                <div class="col-md-12">
                    <p class="text-black ubuntu-regular text-md">
                        Young Athletes membuka pintu bagi anak-anak dan keluarga untuk menjadi bagian dari lingkungan Special Olympics:
                    </p>
                    <ol class="ubuntu-light">
                        <li>
                            Keterampilan motorik. Anak-anak penyandang disabilitas intelektual yang ikut serta dalam Atlet Muda mengembangkan keterampilan motorik dua kali lebih cepat dibandingkan mereka yang tidak ikut serta.
                        </li>
                        <li>
                            Keterampilan sosial, emosional dan belajar. Orang tua dan guru dari anak-anak yang ikut serta dalam kurikulum Young Athletes mengatakan bahwa anak-anak tersebut mempelajari keterampilan yang akan mereka gunakan di sekolah pra-sekolah dasar.
                        </li>
                        <li>
                            Harapan. Anggota keluarga mengatakan bahwa Atlet Muda meningkatkan harapan mereka untuk masa depan anak mereka.
                        </li>
                        <li>
                            Kesiapan olahraga. Atlet Muda membantu anak-anak bersiap-siap untuk ikut serta dalam olahraga ketika mereka lebih besar.                        </li>
                        <li>
                            Penerimaan. Permainan inklusif membantu anak-anak tanpa disabilitas untuk lebih memahami dan menerima orang lain.                        </li>
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
                                Bergabunglah dengan Special Olympics dan jadilah bagian dari perubahan! Kami mengundang Anda untuk berpartisipasi dalam program olahraga yang menginspirasi, mendukung atlet penyandang disabilitas intelektual, dan merayakan semangat inklusi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
