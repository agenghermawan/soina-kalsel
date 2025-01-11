@extends('front.layout.layout')

@section('content')
    {{--  Banner --}}
    <div class="">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://soina.org/sitepad-data/uploads/2024/09/6-21-23-Awards-Gymnastics-WorldGames2023-59.jpg" class="d-block w-100" height="500px" style="object-fit: cover" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://soina.org/sitepad-data/uploads/2024/10/IMG_93055.jpg" class="d-block w-100" height="500px" style="object-fit: cover" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://soina.org/sitepad-data/uploads/2024/09/DSC_6645.jpg" class="d-block w-100" height="500px" style="object-fit: cover" alt="...">
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
        <h1 class="ubuntu-bold text-black text-center text-36">Our Global Reach</h1>
        <p class="text-center ubuntu-light w-40 m-auto">
            Every day, Special Olympics events are taking place around the globe transforming the lives of millions of individuals with intellectual disabilities both on and off the playing field.
        </p>
        <div class="row mt-3">
            <div class="col-md-3">
                <img src="https://dotorg.brightspotcdn.com/dims4/default/05a34d6/2147483647/strip/true/crop/640x640+170+0/resize/500x500!/quality/90/?url=http%3A%2F%2Fsoi-brightspot.s3.amazonaws.com%2Fdotorg%2F69%2Fe5%2F33e3095644dda540c5296c41c509%2Fvolunteer-3.jpg" class="img-fluid" alt="">
                <h3 class="ubuntu-medium text-center mt-2 text-md">
                    Sport
                </h3>
                <p class="text-center ubuntu-light text-sm">
                    Special Olympics supports over 5 million athletes, unified partners, coaches and volunteers with 32 Olympic-type sports.
                </p>
            </div>
            <div class="col-md-3">
                <img src="https://dotorg.brightspotcdn.com/dims4/default/c262c85/2147483647/strip/true/crop/630x630+630+0/resize/500x500!/quality/90/?url=http%3A%2F%2Fsoi-brightspot.s3.amazonaws.com%2Fdotorg%2Fc3%2F26%2Fbc91b9094134b66bd34f44748f56%2F1890x630-special-olympics-inclusive-health.jpg" class="img-fluid" alt="">
                <h3 class="ubuntu-medium text-center mt-2 text-md">
                    Inclusive Healt
                </h3>
                <p class="text-center ubuntu-light text-sm">
                    Improving the health and well-being of people with intellectual disabilities.
                </p>
            </div>
            <div class="col-md-3">
                <img src="https://dotorg.brightspotcdn.com/dims4/default/d5b26ae/2147483647/strip/true/crop/570x570+115+0/resize/500x500!/quality/90/?url=http%3A%2F%2Fsoi-brightspot.s3.amazonaws.com%2Fdotorg%2F6e%2Fad%2Fc974986b46c1a7f73f7b3ebfa3fa%2F800x570-four-athletes.jpg" class="img-fluid" alt="">
                <h3 class="ubuntu-medium text-center mt-2 text-md">
                    Youth and Schools
                </h3>
                <p class="text-center ubuntu-light text-sm">
                    Empowering Youth Leaders, educators, coaches, and families to build inclusive schools and communities for all.                </p>
            </div>
            <div class="col-md-3">
                <img src="https://dotorg.brightspotcdn.com/dims4/default/06be099/2147483647/strip/true/crop/600x600+128+0/resize/500x500!/quality/90/?url=http%3A%2F%2Fsoi-brightspot.s3.amazonaws.com%2Fdotorg%2F2e%2Ff9%2Ffc810d11426b84bfac12fb8b674b%2F800x600-leading-photo-dustin-plunkett.jpg" class="img-fluid" alt="">
                <h3 class="ubuntu-medium text-center mt-2 text-md">
                    Leadership
                </h3>
                <p class="text-center ubuntu-light text-sm">
                    Unleashing leadership potential in people of all abilities.
                </p>
            </div>
        </div>
    </div>

    <div class="my-5">
        <section class="hero-section">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Text Section -->
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <h1 class="hero-title">Tentang Special Olympics Indonesia</h1>
                        <p class="text-left ubuntu-light text-black">
                            Special Olympics Indonesia (SOIna) adalah organisasi nirlaba yang diakui Pemerintah dan telah mendapat akreditasi dari <em>Special Olympics International</em> (SOI) untuk menyelenggarakan pelatihan dan kompetisi olahraga, serta inisiatif/program non-olahraga lainnya bagi Penyandang Disabilitas Intelektual (<em>Persons with Intellectual Disabilities</em>) atau Orang Bertalenta Khusus (OBK) di Indonesia.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="container-fluid my-5">
        <h1 class="ubuntu-bold text-black text-center">Our Global Reach</h1>
        <p class="text-center ubuntu-light">
            With 5 competitions per hour across the globe, our movement represents over 5.3 million athletes, unified partners, coaches, and volunteers.
        </p>
        <div class="row">
            <div class="col-md-6">
                <img src="https://dotorg.brightspotcdn.com/dims4/default/675f80a/2147483647/strip/true/crop/2160x1233+0+0/resize/649x370!/quality/90/?url=http%3A%2F%2Fsoi-brightspot.s3.amazonaws.com%2Fdotorg%2Fa7%2Ffc%2Fb1d0c8344d99ab4f31db2fd8ed95%2Fframe-122.png" alt="">
            </div>
            <div class="col-md-6">
                <div class="row mt-5">
                    <div class="col-md-6 p-5" style="border-right: 1px solid #ff0000; border-bottom: 1px solid #ff0000">
                        <div class="d-flex flex-column text-center">
                            <h5 class="ubuntu-bold color-primary">
                                1024
                            </h5>
                            <p class="text-center ubuntu-medium">
                                Athletes and Unified Partners
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 p-5" style="border-bottom: 1px solid #ff0000">
                        <div class="d-flex flex-column text-center">
                            <h5 class="ubuntu-bold color-primary">
                                1024
                            </h5>
                            <p class="text-center ubuntu-medium">
                                Athletes and Unified Partners
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 p-5" style="border-right: 1px solid #ff0000;">
                        <div class="d-flex flex-column text-center">
                            <h5 class="ubuntu-bold color-primary">
                                1024
                            </h5>
                            <p class="text-center ubuntu-medium">
                                Athletes and Unified Partners
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 p-5">
                        <div class="d-flex flex-column text-center">
                            <h5 class="ubuntu-bold color-primary">
                                1024
                            </h5>
                            <p class="text-center ubuntu-medium">
                                Athletes and Unified Partners
                            </p>
                        </div>
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

    <section class="news-section py-5 secondary-background">
        <div class="container">
            <h1 class="ubuntu-bold text-black text-center mb-4">
                News
            </h1>

            <div class="row g-4">
                <!-- News Item 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow-sm">
                        <img src="https://soina.org/sitepad-data/uploads/2024/04/SOIna-Dhaka.jpeg" class="w-100" height="260px" alt="News Image">
                        <div class="card-body">
                            <h5 class="card-title text-danger fw-bold">SOIna Raih Medali Perunggu Dalam Kompetisi Sepak Bola</h5>
                            <p class="card-text"><strong>Jakarta</strong> - Delegasi SO Indonesia berhasil membawa pulang medali perunggu dalam kompetisi internasional...</p>
                            <a href="#" class="btn btn-outline-danger">Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <!-- News Item 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow-sm">
                        <img src="https://soina.org/sitepad-data/uploads/2024/03/DSC00322.jpg" class="w-100" height="260px" alt="News Image">
                        <div class="card-body">
                            <h5 class="card-title text-danger fw-bold">Rakernas SOIna: Kembangkan 200 Klub di Seluruh Indonesia</h5>
                            <p class="card-text">Dalam memperkuat organisasi serta meningkatkan jumlah partisipan di seluruh Indonesia, SO Indonesia akan...</p>
                            <a href="#" class="btn btn-outline-danger">Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <!-- News Item 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow-sm">
                        <img src="https://soina.org/sitepad-data/uploads/2023/11/Floorball-competition-at-the-Special-Olympics-Invitational-Games-jpeg.jpg" class="w-100" height="260px" alt="News Image">
                        <div class="card-body">
                            <h5 class="card-title text-danger fw-bold">Tim Unified SOIna Raih Posisi Ketiga di Floorball Asia Pacific</h5>
                            <p class="card-text">Tim floorball SOIna Riau berhasil meraih perunggu pada kompetisi internasional Special Olympics East Asia...</p>
                            <a href="#" class="btn btn-outline-danger">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid my-5">
        <h1 class="ubuntu-bold text-black text-center mb-4">
            Featured Partners
        </h1>
        <div id="carouselExampleTwo" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Carousel Item 1 -->
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-md-6">
                            <div class="card shadow-sm text-center border-0 px-3 py-4">
                                <img src="https://dotorg.brightspotcdn.com/dims4/default/919f72f/2147483647/strip/true/crop/1600x539+0+0/resize/340x115!/quality/90/?url=http%3A%2F%2Fsoi-brightspot.s3.amazonaws.com%2Fdotorg%2Fb1%2Fd2%2F77dcbf65471caa1eae259b5a5c24%2Flogo-coca-cola.PNG.png" class="img-fluid mx-auto d-block" style="max-width: 170px;" alt="Coca Cola Logo">
                                <div style="height: 5px; width: 30px; background: red; margin: 15px auto;"></div>
                                <div class="card-body">
                                    <p class="card-text">
                                        Supporting Play Unified through an annual consumer fundraising campaign
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card shadow-sm text-center border-0 px-3 py-4">
                                <img src="https://dotorg.brightspotcdn.com/dims4/default/801460d/2147483647/strip/true/crop/340x134+0+0/resize/340x134!/quality/90/?url=http%3A%2F%2Fsoi-brightspot.s3.amazonaws.com%2Fdotorg%2Fd2%2F6e%2F787078c9414989d399ebf5d2eb5f%2Fespn.jpg" class="img-fluid mx-auto d-block" style="max-width: 170px;" alt="Coca Cola Logo">
                                <div style="height: 5px; width: 30px; background: red; margin: 15px auto;"></div>
                                <div class="card-body">
                                    <p class="card-text">
                                        Supporting Play Unified through an annual consumer fundraising campaign
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card shadow-sm text-center border-0 px-3 py-4">
                                <img src="https://dotorg.brightspotcdn.com/dims4/default/f041196/2147483647/strip/true/crop/340x134+0+0/resize/340x134!/quality/90/?url=http%3A%2F%2Fsoi-brightspot.s3.amazonaws.com%2Fdotorg%2F1a%2F64%2F564a060c4dac8f396a3da1a765e2%2Ftoyota.jpg" class="img-fluid mx-auto d-block" style="max-width: 170px;" alt="Coca Cola Logo">
                                <div style="height: 5px; width: 30px; background: red; margin: 15px auto;"></div>
                                <div class="card-body">
                                    <p class="card-text">
                                        Supporting Play Unified through an annual consumer fundraising campaign
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Carousel Item 2 -->
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-md-6">
                            <div class="card shadow-sm text-center border-0 px-3 py-4">
                                <img src="https://dotorg.brightspotcdn.com/dims4/default/919f72f/2147483647/strip/true/crop/1600x539+0+0/resize/340x115!/quality/90/?url=http%3A%2F%2Fsoi-brightspot.s3.amazonaws.com%2Fdotorg%2Fb1%2Fd2%2F77dcbf65471caa1eae259b5a5c24%2Flogo-coca-cola.PNG.png" class="img-fluid mx-auto d-block" style="max-width: 170px;" alt="Coca Cola Logo">
                                <div style="height: 5px; width: 30px; background: red; margin: 15px auto;"></div>
                                <div class="card-body">
                                    <p class="card-text">
                                        Supporting Play Unified through an annual consumer fundraising campaign
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card shadow-sm text-center border-0 px-3 py-4">
                                <img src="https://dotorg.brightspotcdn.com/dims4/default/801460d/2147483647/strip/true/crop/340x134+0+0/resize/340x134!/quality/90/?url=http%3A%2F%2Fsoi-brightspot.s3.amazonaws.com%2Fdotorg%2Fd2%2F6e%2F787078c9414989d399ebf5d2eb5f%2Fespn.jpg" class="img-fluid mx-auto d-block" style="max-width: 170px;" alt="Coca Cola Logo">
                                <div style="height: 5px; width: 30px; background: red; margin: 15px auto;"></div>
                                <div class="card-body">
                                    <p class="card-text">
                                        Supporting Play Unified through an annual consumer fundraising campaign
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card shadow-sm text-center border-0 px-3 py-4">
                                <img src="https://dotorg.brightspotcdn.com/dims4/default/f041196/2147483647/strip/true/crop/340x134+0+0/resize/340x134!/quality/90/?url=http%3A%2F%2Fsoi-brightspot.s3.amazonaws.com%2Fdotorg%2F1a%2F64%2F564a060c4dac8f396a3da1a765e2%2Ftoyota.jpg" class="img-fluid mx-auto d-block" style="max-width: 170px;" alt="Coca Cola Logo">
                                <div style="height: 5px; width: 30px; background: red; margin: 15px auto;"></div>
                                <div class="card-body">
                                    <p class="card-text">
                                        Supporting Play Unified through an annual consumer fundraising campaign
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleTwo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleTwo" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>



@endsection
