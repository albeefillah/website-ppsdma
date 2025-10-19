@extends('main')
@section('content')
<section class="breadcrumbs-area ptb-140 breadcumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="breadcrumbs pt-6">
                    <h2 class="page-title">Media</h2>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>Berita</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-two-area ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 fix">
                <div class="blog-container-inner">
                    <div class="post-thumb">
                        <a href="#"><img src="{{ asset('frontend/img/berita/berita4.jpg') }}" alt=""></a>
                        <a class="tb-publish" href=""><i class="fa fa-file-image-o" aria-hidden="true"></i></a>
                    </div>
                    <div class="visual-inner">
                        <h3 class="blog-title">
                            <a href="#">Prof. Dr. Samid Suliman Bahas Komunikasi Antarbudaya dan Krisis Global di PPSDM Aparatur</a>
                        </h3>
                        <div class="blog-meta">
                            <span class="published3">
                                <i class="fa fa-calendar" aria-hidden="true"></i> 08 Oktober, 2025 
                            </span>
                            <span class="published4"><i class="fa fa-comments-o" aria-hidden="true"></i> 01 Komentar </span>
                        </div>
                        <div class="blog-content"> 
                            <p>Pusat Pengembangan Sumber Daya Manusia Aparatur (PPSDM Aparatur), Badan Pengembangan Sumber Daya Manusia (BPSDM) Kementerian Energi dan Sumber Daya Mineral (ESDM) menyelenggarakan webinar bertajuk “Intercultural Communication, Global Crises and Regional Future” pada Selasa, 8 Oktober 2025. Kegiatan ini menghadirkan narasumber internasional, Prof. Dr. Samid Suliman, Director International (Arts, Education and Law) Griffith University, Australia.</p> 
                        </div>
                        <div class="readmore">
                            <a href="{{ route('detail-berita') }}">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="blog-container-inner blog-two-mrg">
                    <div class="post-thumb">
                        <a href="#"><img class="attachment-blog-list" src="{{ asset('frontend/img/berita/berita1.jpg') }}" alt=""></a>
                        <a class="tb-publish" href=""><i class="fa fa-file-image-o" aria-hidden="true"></i></a>
                    </div>
                    <div class="visual-inner">
                        <h3 class="blog-title">
                            <a href="#">Peringati HUT Pertambangan dan Energi ke-80, Kementerian ESDM Gelar Donor Darah
                            </a>
                        </h3>
                        <div class="blog-meta">
                            <span class="published3">
                                <i class="fa fa-calendar" aria-hidden="true"></i> 19 September, 2025
                            </span>
                            <span class="published4"><i class="fa fa-comments-o" aria-hidden="true"></i> 02 Komentar </span>
                        </div>
                        <div class="blog-content"> 
                            <p>Dalam rangka memperingati Hari Ulang Tahun Pertambangan dan Energi ke-80, Kementerian Energi dan Sumber Daya Mineral (ESDM) menyelenggarakan kegiatan donor darah sebagai wujud kepedulian sosial terhadap sesama. Acara tersebut dilaksanakan di Gedung SM Sair, Balai Besar Pengujian Mineral dan Batubara (BBPMB) TekMIRA, Jalan Jenderal Sudirman No. 623, Bandung, Jawa Barat.</p> 
                        </div>
                        <div class="readmore">
                            <a href="{{ route('detail-berita') }}">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="blog-container-inner">
                    <div class="post-thumb">
                        <a href="#"><img class="attachment-blog-list" src="{{ asset('frontend/img/berita/berita2.jpg') }}" alt=""></a>
                        <a class="tb-publish" href=""><i class="fa fa-file-image-o" aria-hidden="true"></i></a>
                    </div>
                    <div class="visual-inner">
                        <h3 class="blog-title">
                            <a href="#">Tiga Pegawai PPSDM Aparatur Naik Jabatan Fungsional</a>
                        </h3>
                        <div class="blog-meta">
                            <span class="published3">
                                <i class="fa fa-calendar" aria-hidden="true"></i> 17 September, 2025 
                            </span>
                            <span class="published4"><i class="fa fa-comments-o" aria-hidden="true"></i> 02 Comment </span>
                        </div>
                        <div class="blog-content"> 
                            <p>Kementerian Energi dan Sumber Daya Mineral (ESDM) resmi menetapkan kenaikan jabatan fungsional bagi sejumlah Pegawai Negeri Sipil melalui Keputusan Menteri ESDM yang ditandatangani oleh Menteri ESDM, Bahlil Lahadalia. Dari daftar yang diumumkan, terdapat tiga pegawai di lingkungan Pusat Pengembangan Sumber Daya Manusia (PPSDM) Aparatur yang turut mendapatkan kepercayaan untuk menduduki jabatan fungsional baru.</p> 
                        </div>
                        <div class="readmore">
                            <a href="{{ route('detail-berita') }}">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="pages">
                    <ul>
                        <li>pages :</li>
                        <li class="current">
                            <a href="#">1</a>
                        </li>
                        <li>
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li class="cut">
                            <a href="#">
                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="issues-categoris issues-top2">
                    <h3>Kategori Berita</h3>
                    <div class="cat-one">
                        <ul>
                            <li><a href="#">Kepemimpinan</a></li>
                            <li><a href="#">Energi</a></li>
                            <li><a href="#">Aparatur</a></li>
                            <li><a href="#">Pengembangan SDM</a></li>
                        </ul>
                    </div>
                </div>
                <div class="issues-categoris issues-top3">
                    <h3>Berita Terbaru</h3>
                    <div class="categori-list1">
                        <div class="categori-list-one">
                            <div class="categori-list-img">
                                <a href="#"><img src="{{ asset('frontend/img/berita/berita1.jpg') }}" alt=""></a>
                            </div>
                            <div class="post-details">
                                <p>Major components of FY2015 budget </p>
                            </div>
                        </div>
                        <div class="categori-list-one">
                            <div class="categori-list-img">
                                <a href="#"><img src="{{ asset('frontend/img/berita/berita1.jpg') }}" alt=""></a>
                            </div>
                            <div class="post-details">
                                <p>Major components of FY2015 budget </p>
                            </div>
                        </div>
                        <div class="categori-list-one">
                            <div class="categori-list-img">
                                <a href="#"><img src="{{ asset('frontend/img/berita/berita1.jpg') }}" alt=""></a>
                            </div>
                            <div class="post-details">
                                <p>Major components of FY2015 budget </p>
                            </div>
                        </div>
                        <div class="categori-list-one">
                            <div class="categori-list-img">
                                <a href="#"><img src="{{ asset('frontend/img/berita/berita1.jpg') }}" alt=""></a>
                            </div>
                            <div class="post-details">
                                <p>Major components of FY2015 budget </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="issues-categoris issues-top4">
                    <h3>Keyword</h3>
                    <div class="categori-list">
                        <ul>
                            <li><a href="#">Energi</a></li>
                            <li><a href="#">SDM</a></li>
                            <li><a href="#">Donor Darah</a></li>
                            <li><a href="#">Energi</a></li>
                            <li><a href="#">SDM</a></li>
                            <li><a href="#">Donor Darah</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection