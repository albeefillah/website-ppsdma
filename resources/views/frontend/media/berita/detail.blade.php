@extends('main')
@section('content')
<section class="breadcrumbs-area ptb-140 breadcumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="breadcrumbs pt-6">
                    <h2 class="page-title">Berita</h2>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="{{ route('berita') }}">Berita</a></li>
                        <li>Detail Berita</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-two-details-area ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="blog-container-inner">
                    <div class="post-for2">
                        <img src="{{ asset('frontend/img/berita/berita4.jpg') }}" alt="">
                    </div>
                    <div class="visual-inner">
                        <h3 class="blog-title">
                            Prof. Dr. Samid Suliman Bahas Komunikasi Antarbudaya dan Krisis Global di PPSDM Aparatur
                        </h3>
                        <div class="blog-meta">
                            <span class="published3">
                                <i class="fa fa-calendar" aria-hidden="true"></i> 11 May, 2016 
                            </span>
                            <span class="published4"><i class="fa fa-comments-o" aria-hidden="true"></i> 01 Comment </span>
                        </div>
                        <div class="blog-content"> 
                            <p>Pusat Pengembangan Sumber Daya Manusia Aparatur (PPSDM Aparatur), Badan Pengembangan Sumber Daya Manusia (BPSDM) Kementerian Energi dan Sumber Daya Mineral (ESDM) menyelenggarakan webinar bertajuk “Intercultural Communication, Global Crises and Regional Future” pada Selasa, 8 Oktober 2025. Kegiatan ini menghadirkan narasumber internasional, Prof. Dr. Samid Suliman, Director International (Arts, Education and Law) Griffith University, Australia.</p>
                            <p class="blog-paragraph">Webinar yang berlangsung secara hybrid, di Aula PPSDM Aparatur Bandung dan melalui platform Zoom Webinar serta kanal YouTube PPSDM Aparatur, mengangkat isu penting seputar komunikasi lintas budaya di tengah krisis global dan tantangan masa depan regional. Kegiatan ini terbuka untuk umum dan diikuti oleh para peserta dari berbagai instansi pemerintahan serta akademisi, dengan fasilitas E-sertifikat gratis.</p> 
                            <p class="blog-paragraph"> Dalam paparannya, Prof. Samid menjelaskan bahwa komunikasi bukan sekadar proses penyampaian pesan, melainkan bagian mendasar dari kondisi manusia yang membentuk cara pandang terhadap dunia. Ia menekankan bahwa di era global yang semakin termiliterisasi, termobilisasi, dan terdigitalisasi, manusia kini hidup dalam konteks yang intrinsik bersifat intercultural — di mana keberagaman budaya dan sistem nilai saling berinteraksi secara kompleks.</p> 
                            <p class="blog-paragraph">“Permasalahan komunikasi hari ini bukan hanya teknis, tetapi epistemologis. Kita perlu keluar dari cara berpikir yang terkotak-kotak dan menyadari bahwa realitas sosial dibentuk dari relasi dan konteks material yang menyertainya,” ujar Prof. Samid.</p> 
                            <p class="blog-paragraph">  Ia juga menyoroti fenomena global crises yang tidak hanya berasal dari kegagalan sistem politik dan ekonomi, tetapi juga akibat kegagalan komunikasi lintas budaya dan kurangnya imajinasi sosial dalam memahami kompleksitas dunia modern.</p> 
                            <p class="blog-paragraph"> Sebagai contoh nyata, Prof. Samid mengulas kasus kehancuran situs suci suku Aborigin Juukan Gorge di Australia oleh perusahaan tambang Rio Tinto pada tahun 2020. Ia menilai peristiwa tersebut sebagai bentuk kegagalan komunikasi antarbudaya dalam tata kelola industri sumber daya alam, yang menunjukkan lemahnya pemahaman terhadap nilai-nilai sosial dan spiritual masyarakat adat.</p> 
                            <p class="blog-paragraph">Dalam konteks pemerintahan, Prof. Samid juga memaparkan hasil riset Make Us Count: Understanding Aboriginal Women’s Experiences in Victorian Public Sector Workplaces (2023) yang menunjukkan masih adanya diskriminasi, ketimpangan kesempatan, dan kurangnya dukungan terhadap perempuan Aborigin di sektor publik Australia. Studi ini menegaskan pentingnya membangun lingkungan kerja yang inklusif, adil, dan komunikatif antarbudaya.</p> 
                            <p class="blog-paragraph">Moderator kegiatan, Nur Arinta Dara Pramadyani, S.T., M.Sc., Analis Perencanaan, Evaluasi dan Pelaporan PPSDM Aparatur, menegaskan bahwa topik ini relevan dengan misi PPSDM Aparatur dalam mengembangkan aparatur negara yang berwawasan global dan berkarakter berAKHLAK.</p> 
                            <p class="blog-paragraph">“Dalam konteks pelayanan publik Indonesia, kemampuan komunikasi antarbudaya menjadi kunci untuk mewujudkan birokrasi yang adaptif dan inklusif, terlebih di era globalisasi dan kolaborasi lintas negara,” ujarnya.</p> 
                            <p class="blog-paragraph">Webinar ini diharapkan dapat memperluas wawasan para peserta mengenai hubungan antara komunikasi, keberagaman, dan masa depan regional, serta mendorong ASN untuk terus mengembangkan kemampuan berpikir lintas budaya dalam menjalankan tugas pelayanan publik.</p> 
                        </div>
                    </div>
                    <div class="blog-tag">
                        <p><i class="fa fa-tags" aria-hidden="true"></i><span class="tag">Tag:</span> Komunikasi, <span class="vidos2">Budaya</span>, Krisis Global, Epistemologis</p>
                    </div>
                    <div class="blog-share">
                        <p><i class="fa fa-share-alt" aria-hidden="true"></i><span class="tag">Bagikan:</span></p>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-youtube" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="blog-comment">
                        <p><i class="fa fa-comments" aria-hidden="true"></i>Tuliskan Komentar:</p>
                        <div class="blog-reply-all">
                            <div class="blog-top">
                                <img src="{{ asset('frontend/img/user2.png') }}" alt="">
                                <div class="blog-img-details">
                                    <div class="blog-title">
                                        <h3>Alex</h3>
                                        <a href="#">Reply</a>
                                    </div>
                                    <span>15 Oktober 2016, 10:30</span>
                                    <p class="p-border">Luar biasaaa</p>
                                </div>
                            </div>
                            <div class="blog-top blog-top-mrg">
                                <img src="{{ asset('frontend/img/user2.png') }}" alt="">
                                <div class="blog-img-details">
                                    <div class="blog-title">
                                        <h3>James</h3>
                                        <a href="#">Reply</a>
                                    </div>
                                    <span>15 Oktober 2016, 11:30 </span>
                                    <p>Bagus</p>
                                </div>
                            </div>
                        </div>
                        <div class="blog-reply-all2">
                            <div class="blog-top">
                                <img src="{{ asset('frontend/img/user2.png') }}" alt="">
                                <div class="blog-img-details">
                                    <div class="blog-title">
                                        <h3>Rizky</h3>
                                        <a href="#">Reply</a>
                                    </div>
                                    <span>15 Oktober 2016, 10:30</span>
                                    <p>Seminar yang baguss!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-input">
                        <p><i class="fa fa-reply" aria-hidden="true"></i>Tinggalkan Komentar:</p>
                        <form action="#">
                            <div class="blog-from">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input class="form-control bmrg" required="" type="text" placeholder="Nama*">
                                    </div>
                                    <div class="col-lg-6">
                                        <input class="form-control" required="" type="email" placeholder="Email*">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea class="form-control" required="" placeholder="Komentar"></textarea>
                                        <button class="submit" type="submit">
                                            Post Komentar
                                            <i class="fa fa-commenting-o" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="issues-details-bottom">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="issues-details-title">
                                    <h3>Kategori Terkait</h3>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="issues-bottom">
                                    <a href="#"><img alt="" src="{{ asset('frontend/img/berita/berita1.jpg') }}" ></a>
                                    <h3><a href="#">World economy towards</a></h3>
                                    <div class="blog-meta tnm">
                                        <span class="published3">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                            14 May, 2016
                                        </span>
                                        <span class="published4">
                                            <i class="fa fa-comments-o" aria-hidden="true"></i>
                                            02 Comment
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="issues-bottom two-mrg mrg-none-sm">
                                    <a href="#"><img alt="" src="{{ asset('frontend/img/berita/berita3.jpg') }}" ></a>
                                    <h3><a href="#">Video start your career</a></h3>
                                    <div class="blog-meta tnm">
                                        <span class="published3">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                            14 May, 2016
                                        </span>
                                        <span class="published4">
                                            <i class="fa fa-comments-o" aria-hidden="true"></i>
                                            02 Comment
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="issues-bottom">
                                    <a href="#"><img alt="" src="{{ asset('frontend/img/berita/berita2.jpg') }}" ></a>
                                    <h3><a href="#">Defense Spending Proposals</a></h3>
                                    <div class="blog-meta tnm">
                                        <span class="published3">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                            14 May, 2016
                                        </span>
                                        <span class="published4">
                                            <i class="fa fa-comments-o" aria-hidden="true"></i>
                                            02 Comment
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                <a href="#"><img src="{{ asset('frontend/img/berita/berita2.jpg') }}" alt=""></a>
                            </div>
                            <div class="post-details">
                                <p>Major components of FY2015 budget </p>
                            </div>
                        </div>
                        <div class="categori-list-one">
                            <div class="categori-list-img">
                                <a href="#"><img src="{{ asset('frontend/img/berita/berita3.jpg') }}" alt=""></a>
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