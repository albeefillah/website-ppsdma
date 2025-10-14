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
                        <li>Profile</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="timeline-area ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="what-top line">
                    <div class="section-title">
                        <h1>Sejarah PPSDM Aparatur</h1>
                        <div class="what-icon">
                            <i class="fa fa-line-chart" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="timeline-wraper fix">
            <div class="sin-timeline col-lg-6 col-md-6 p-0 text-center">
               <span class="timeline-date">2001</span>
                <div class="timeline-content">
                    <a class="timeline-img" href="#"><img src="{{ asset('frontend/img/sejarah/pusdiklat-geologi.jpeg') }}" alt=""></a>
                    <div class="timeline-text">
                        <h3><a href="#">Sejarah Awal</a></h3>
                        <p>Pada tahun 2001, berdiri lembaga pelatihan di bawah Kementerian Energi dan Sumber Daya Mineral dengan nama Pusat Pendidikan dan Pelatihan Geologi (Pusdiklat Geologi). Lembaga ini menjadi wadah strategis dalam pengembangan sumber daya manusia di bidang geologi, geoteknik, dan sumber daya bumi, guna mendukung pelaksanaan tugas teknis Kementerian ESDM.</p>
                    </div>
                </div>
            </div>
            <div class="sin-timeline col-lg-6 col-md-6 p-0 text-center res-sin">
               <span class="timeline-date">2001-2016</span>
                <div class="timeline-content">
                    <a class="timeline-img" href="#"><img src="{{ asset('frontend/img/sejarah/pusdiklat2.jpeg') }}" alt=""></a>
                    <div class="timeline-text">
                        <h3><a href="#">Pusdiklat Geologi</a></h3>
                        <p>Selama lebih dari satu dekade, berdasarkan Peraturan Menteri ESDM Nomor 150 Tahun 2001 tentang Organisasi dan Tata Kerja ESDM, Pusdiklat Geologi memiliki tugas melaksanakan pendidikan dan pelatihan di bidang geologi, geofisika, geoteknik, serta bidang lain yang mendukung kegiatan eksplorasi dan konservasi sumber daya energi dan mineral.</p>
                    </div>
                </div>
            </div>
            <div class="sin-timeline col-lg-6 col-md-6 p-0 text-center">
               <span class="timeline-date">2017 <br> - <br> Sekarang</span>
                <div class="timeline-content">
                    <a class="timeline-img" href="#"><img src="{{ asset('frontend/img/sejarah/ppsdma.png') }}" alt=""></a>
                    <div class="timeline-text">
                        <h3><a href="#">PPSDM Aparatur KESDM</a></h3>
                        <p>Pada tahun 2017, berdasarkan Peraturan Pemerintah Nomor 13 Tahun 2016 mengenai Organisasi dan Tata Kerja Kementerian Energi dan Sumber Daya Mineral, Pusat Pengembangan Sumber Daya Manusia Aparatur (PPSDM Aparatur) resmi dibentuk sebagai hasil reorganisasi dari Pusdiklat Geologi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection