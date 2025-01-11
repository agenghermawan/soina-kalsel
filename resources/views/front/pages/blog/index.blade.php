@extends('front.layout.layout')

@push('styles')
    <style>
        .blog-header {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .blog-header .h1 {
            position: relative;
            display: inline-block;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .blog-header .h1::after {
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
    {{--  Banner --}}
    <div class="">
        <img src="{{ asset('images/blog.png') }}" class="d-block w-100" height="500px" style="object-fit: cover" alt="...">
    </div>

    {{--  Content --}}
    <div class="bg-gray">
        <div class="container">
            <div class="header pt-5 blog-header">
                <div class="h1 text-center">Blog</div>
                <div class="text-center">
                    <p class="text-18 leading-30 ubuntu-light">
                        Explore insightful articles, tips, and stories to inspire your journey.
                    </p>
                </div>
            </div>
            <div class="row mx-auto p-5">
                <div class="col-md-6 col-sm-12 mx-auto">
                    <div class="card">
                        <img src="https://themewagon.github.io/megakit-2/images/blog/1.jpg" class="img-fluid"
                            alt="">
                        <div class="card-body p-5">
                            <i class="fa-solid fa-pencil"></i> Community &nbsp;&nbsp;
                            <i class="fa-regular fa-clock"></i> 2 days ago
                            <h5 class="mt-3">Improve design with typography?</h5>
                            <p class="text-left ubuntu-light text-sm">
                                Non illo quas blanditiis repellendus laboriosam minima animi. Consectetur accusantium
                                pariatur repudiandae!
                            </p>
                            <a href="#" class="btn btn-danger">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 mx-auto">
                    <div class="card">
                        <img src="https://themewagon.github.io/megakit-2/images/blog/2.jpg" class="img-fluid"
                            alt="">
                        <div class="card-body p-5">
                            <i class="fa-solid fa-pencil"></i> Community &nbsp;&nbsp;
                            <i class="fa-regular fa-clock"></i> 2 days ago
                            <h5 class="mt-3">Improve design with typography?</h5>
                            <p class="text-left ubuntu-light text-sm">
                                Non illo quas blanditiis repellendus laboriosam minima animi. Consectetur accusantium
                                pariatur repudiandae!
                            </p>
                            <a href="#" class="btn btn-danger">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
