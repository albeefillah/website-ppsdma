@extends('main')
@section('content')
<section class="breadcrumbs-area ptb-140 breadcumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="breadcrumbs pt-6">
                    <h2 class="page-title">Profile</h2>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>Sarana dan Prasarana</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="gallery-area pb-80 elements3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="what-top">
                    <div class="section-title">
                        <h1>Sarana dan Prasarana</h1>
                        <div class="what-icon">
                            <i class="fa fa-building" aria-hidden="true"></i>
                        </div>
                    </div>
                    <p class="up">Fasilitas pelatihan yang lengkap dan representatif disediakan untuk menciptakan lingkungan belajar yang nyaman dan produktif.</p>
                </div>
            </div>
        </div>
        <div class="row gallery-mrg">
            <div class="col-md-4">
                <div class="single-banner">
                    <div class="">
                        <img src="{{ asset('frontend/img/sarpras/auditorium.jpg') }}" alt="">
                    </div>
                    <div class="banner-text">
                        <h3>Auditorium Lt.1 Wisma</h3>
                        <a class="venobox" href="{{ asset('frontend/img/sarpras/auditorium.jpg') }}" data-gall="myGallery"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-banner res-3">
                    <div class="">
                        <img src="{{ asset('frontend/img/sarpras/cafetaria.jpg') }}" alt="">
                    </div>
                    <div class="banner-text">
                        <h3>Cafetaria</h3>
                        <a class="venobox" href="{{ asset('frontend/img/sarpras/cafetaria.jpg') }}" data-gall="myGallery"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-banner">
                    <div class="">
                        <img src="{{ asset('frontend/img/sarpras/aulalt4wisma.jpg') }}" alt="">
                    </div>
                    <div class="banner-text">
                        <h3>Aula Lt.4 Wisma</h3>
                        <a class="venobox" href="{{ asset('frontend/img/sarpras/aulalt4wisma.jpg') }}" data-gall="myGallery"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gallery-mrg">
            <div class="col-md-4">
                <div class="single-banner">
                    <div class="">
                        <img src="{{ asset('frontend/img/sarpras/gedungwisma.jpg') }}" alt="">
                    </div>
                    <div class="banner-text">
                        <h3>Gedung Wisma</h3>
                        <a class="venobox" href="{{ asset('frontend/img/sarpras/gedungwisma.jpg') }}" data-gall="myGallery"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-banner res-3">
                    <div class="">
                        <img src="{{ asset('frontend/img/sarpras/kamarstandar.jpg') }}" alt="">
                    </div>
                    <div class="banner-text">
                        <h3>kamar Standar</h3>
                        <a class="venobox" href="{{ asset('frontend/img/sarpras/kamarstandar.jpg') }}" data-gall="myGallery"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-banner">
                    <div class="">
                        <img src="{{ asset('frontend/img/sarpras/kamarvip.jpg') }}" alt="">
                    </div>
                    <div class="banner-text">
                        <h3>Kamar VIP</h3>
                        <a class="venobox" href="{{ asset('frontend/img/sarpras/kamarvip.jpg') }}" data-gall="myGallery"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gallery-mrg">
            <div class="col-md-4">
                <div class="single-banner">
                    <div class="">
                        <img src="{{ asset('frontend/img/sarpras/labkom.jpg') }}" alt="">
                    </div>
                    <div class="banner-text">
                        <h3>Lab Komputer</h3>
                        <a class="venobox" href="{{ asset('frontend/img/sarpras/labkom.jpg') }}" data-gall="myGallery"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-banner res-3">
                    <div class="">
                        <img src="{{ asset('frontend/img/sarpras/lapangan.jpg') }}" alt="">
                    </div>
                    <div class="banner-text">
                        <h3>Lapangan PPSDMA</h3>
                        <a class="venobox" href="{{ asset('frontend/img/sarpras/lapangan.jpg') }}" data-gall="myGallery"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-banner">
                    <div class="">
                        <img src="{{ asset('frontend/img/sarpras/parkiranbasement.jpg') }}" alt="">
                    </div>
                    <div class="banner-text">
                        <h3>Parkiran Basement</h3>
                        <a class="venobox" href="{{ asset('frontend/img/sarpras/parkiranbasement.jpg') }}" data-gall="myGallery"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gallery-mrg">
            <div class="col-md-4">
                <div class="single-banner">
                    <div class="">
                        <img src="{{ asset('frontend/img/sarpras/perpustakaan.jpg') }}" alt="">
                    </div>
                    <div class="banner-text">
                        <h3>Perpustakaan</h3>
                        <a class="venobox" href="{{ asset('frontend/img/sarpras/perpustakaan.jpg') }}" data-gall="myGallery"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-banner res-3">
                    <div class="">
                        <img src="{{ asset('frontend/img/sarpras/poliklinik.jpg') }}" alt="">
                    </div>
                    <div class="banner-text">
                        <h3>Poliklinik</h3>
                        <a class="venobox" href="{{ asset('frontend/img/sarpras/poliklinik.jpg') }}" data-gall="myGallery"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-banner">
                    <div class="">
                        <img src="{{ asset('frontend/img/sarpras/ruangfitness.jpg') }}" alt="">
                    </div>
                    <div class="banner-text">
                        <h3>Ruang Fitness</h3>
                        <a class="venobox" href="{{ asset('frontend/img/sarpras/ruangfitness.jpg') }}" data-gall="myGallery"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gallery-mrg">
            <div class="col-md-4">
                <div class="single-banner">
                    <div class="">
                        <img src="{{ asset('frontend/img/sarpras/ruangtunggu.jpg') }}" alt="">
                    </div>
                    <div class="banner-text">
                        <h3>Ruang Tunggu Tamu</h3>
                        <a class="venobox" href="{{ asset('frontend/img/sarpras/ruangtunggu.jpg') }}" data-gall="myGallery"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-banner res-3">
                    <div class="">
                        <img src="{{ asset('frontend/img/sarpras/ruangtungguvip.jpg') }}" alt="">
                    </div>
                    <div class="banner-text">
                        <h3>Ruang Tunggu VIP</h3>
                        <a class="venobox" href="{{ asset('frontend/img/sarpras/ruangtungguvip.jpg') }}" data-gall="myGallery"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-banner">
                    <div class="">
                        <img src="{{ asset('frontend/img/sarpras/saranahiburan.jpg') }}" alt="">
                    </div>
                    <div class="banner-text">
                        <h3>Gamelan-Angklung</h3>
                        <a class="venobox" href="{{ asset('frontend/img/sarpras/saranahiburan.jpg') }}" data-gall="myGallery"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gallery-mrg">
            <div class="col-md-4">
                <div class="single-banner">
                    <div class="">
                        <img src="{{ asset('frontend/img/sarpras/smartclass.jpg') }}" alt="">
                    </div>
                    <div class="banner-text">
                        <h3>Smart Class</h3>
                        <a class="venobox" href="{{ asset('frontend/img/sarpras/smartclass.jpg') }}" data-gall="myGallery"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-banner res-3">
                    <div class="">
                        <img src="{{ asset('frontend/img/sarpras/saranahiburan-band.jpg') }}" alt="">
                    </div>
                    <div class="banner-text">
                        <h3>Studio Musik</h3>
                        <a class="venobox" href="{{ asset('frontend/img/sarpras/saranahiburan-band.jpg') }}" data-gall="myGallery"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection