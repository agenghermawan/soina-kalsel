@extends('front.layout.layout')

@section('content')
    {{--  Banner --}}
    <div class="">
        <div>
            <img src="    https://awsimages.detik.net.id/community/media/visual/2020/12/01/tekad-menuju-paralimpiade-tokyo-11_169.jpeg?w=1200
"
                style="object-fit: cover; object-position: top; width: 100%; height: 400px;" alt="...">
        </div>
    </div>
    <div class="container my-5">
        <div class="header text-header">
            <h1 class="h1 text-center color-primary">Kontak Kami</h1>
        </div>
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
                        +6221 3800 501 <br />
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
                        Senin-Jumat: 09.00-16.00 <br />
                        Sabtu-Minggu: TUTUP
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
