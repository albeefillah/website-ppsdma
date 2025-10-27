@extends('main')
@section('content')
      <!-- mobile-menu-area end -->
      <div class="header-space"></div>
      <section class="slider-main-area">
        <div class="main-slider an-si">
          <div class="bend niceties preview-2">
            <div id="ensign-nivoslider-2" class="slides">
              <img src="frontend/img/slider/1.png" alt="" title="#slider-direction-1" />
              <img src="frontend/img/slider/2.png" alt="" title="" />
              <img src="frontend/img/slider/3.png" alt="" title="" />
              <img src="frontend/img/slider/4.png" alt="" title="" />
            </div>
            <!-- direction 1 -->
            <div id="slider-direction-1" class="t-cn slider-direction Builder">
              <div class="container">
                <div class="slide-all">
                  <!-- layer 1 -->
                  <!-- <div class="layer-1">
                    <h3 class="title5">HEY! WE ARE miata</h3>
                  </div> -->
                  <!-- layer 2 -->
                  <!-- <div class="layer-2">
                    <h1 class="title6">HONESTY IDEOLOGY TO</h1>
                  </div> -->
                  <!-- layer 2 -->
                  <!-- <div class="layer-2">
                    <h1 class="title6">THE PEOPLE</h1>
                  </div> -->
                  <!-- layer 3 -->
                  <!-- <div class="layer-3">
                    <a class="min1" href="#">Read more</a>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Berita Terkini -->
      <section class="campaign-area pb-80">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="what-top meet campaign">
                <div class="section-title">
                  <h1>Berita Terbaru</h1>
                  <div class="what-icon">
                    <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                  </div>
                </div>
                <p class="up">Kumpulan berita terbaru seputar kegiatan, informasi, dan pengumuman resmi dari PPSDM Aparatur.</p>
              </div>
            </div>
          </div>
          <div class="campaign-bottom">
            <div class="row">
              <div class="col-lg-4 col-md-4">
                <div class="blog-container-inner">
                  <div class="post-thumb">
                    <a href="{{ route('detail-berita') }}"><img class="attachment-blog-list" src="frontend/img/berita/berita1.jpg" alt="" /></a>
                    <a class="tb-publish" href="{{ route('detail-berita') }}"><i class="fa fa-file-image-o" aria-hidden="true"></i></a>
                  </div>
                  <div class="visual-inner">
                    <h3 class="blog-title">
                      <a href="{{ route('detail-berita') }}"> Peringati HUT Pertambangan dan Energi ke-80, Kementerian ESDM Gelar Donor Darah</a>
                    </h3>
                    <div class="blog-meta">
                      <span class="published3"> <i class="fa fa-calendar" aria-hidden="true"></i> 19 September, 2025 </span>
                      <!-- <span class="published4"><i class="fa fa-comments-o" aria-hidden="true"></i> 02 Comment </span> -->
                    </div>
                    <div class="blog-content">
                      <p>
                        Dalam rangka memperingati Hari Ulang Tahun Pertambangan dan Energi ke-80, Kementerian Energi dan Sumber Daya Mineral (ESDM) menyelenggarakan kegiatan donor darah sebagai wujud kepedulian sosial terhadap sesama. Acara
                        tersebut dilaksanakan di Gedung SM Sair, Balai Besar Pengujian Mineral dan Batubara (BBPMB) TekMIRA, Jalan Jenderal Sudirman No. 623, Bandung, Jawa Barat.
                      </p>
                    </div>
                    <div class="readmore">
                      <a href="{{ route('detail-berita') }}">Baca Selengkapnya</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4">
                <div class="blog-container-inner res-1">
                  <div class="post-thumb">
                    <a href="{{ route('detail-berita') }}"><img class="attachment-blog-list" src="frontend/img/berita/berita2.jpg" alt="" /></a>
                    <a class="tb-publish" href=""><i class="fa fa-file-image-o" aria-hidden="true"></i></a>
                  </div>
                  <div class="visual-inner">
                    <h3 class="blog-title">
                      <a href="{{ route('detail-berita') }}">Tiga Pegawai PPSDM Aparatur Naik Jabatan Fungsional</a>
                    </h3>
                    <div class="blog-meta">
                      <span class="published3"> <i class="fa fa-calendar" aria-hidden="true"></i> 17 September, 2025 </span>
                      <!-- <span class="published4"><i class="fa fa-comments-o" aria-hidden="true"></i> 03 Comment </span> -->
                    </div>
                    <div class="blog-content">
                      <p>
                        Kementerian Energi dan Sumber Daya Mineral (ESDM) resmi menetapkan kenaikan jabatan fungsional bagi sejumlah Pegawai Negeri Sipil melalui Keputusan Menteri ESDM yang ditandatangani oleh Menteri ESDM, Bahlil
                        Lahadalia. Dari daftar yang diumumkan, terdapat tiga pegawai di lingkungan Pusat Pengembangan Sumber Daya Manusia (PPSDM) Aparatur yang turut mendapatkan kepercayaan untuk menduduki jabatan fungsional baru.
                      </p>
                    </div>
                    <div class="readmore">
                      <a href="{{ route('detail-berita') }}">Baca Selengkapnya</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4">
                <div class="blog-container-inner">
                  <div class="post-thumb">
                    <a href="{{ route('detail-berita') }}"><img class="attachment-blog-list" src="frontend/img/berita/berita3.jpg" alt="" /></a>
                    <a class="tb-publish" href=""><i class="fa fa-file-image-o" aria-hidden="true"></i></a>
                  </div>
                  <div class="visual-inner">
                    <h3 class="blog-title">
                      <a href="{{ route('detail-berita') }}">Pendampingan Akreditasi Pelatihan Barang dan Jasa Oleh Lembaga Kebijakan Pengadaan Barang/Jasa Pemerintah di Lingkungan PPSDMA</a>
                    </h3>
                    <div class="blog-meta">
                      <span class="published3"> <i class="fa fa-calendar" aria-hidden="true"></i> 14 September, 2025 </span>
                      <!-- <span class="published4"><i class="fa fa-comments-o" aria-hidden="true"></i> 03 Comment </span> -->
                    </div>
                    <div class="blog-content">
                      <p>
                        Dalam rangka meningkatkan kualitas dan standar mutu penyelenggaraan pelatihan, Pusat Pengembangan Sumber Daya Manusia Aparatur (PPSDMA) melaksanakan kegiatan pendampingan akreditasi pelatihan barang dan jasa yang
                        dihadiri oleh Narasumber dari Lembaga Kebijakan Pengadaan Barang/Jasa Pemerintah (LKPP).
                      </p>
                    </div>
                    <div class="readmore">
                      <a href="{{ route('detail-berita') }}">Baca Selengkapnya</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Event Terdekat -->
      <section class="campaign-area bg-gray ptb-50">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="what-top meet campaign">
                <div class="section-title">
                  <h1>Informasi</h1>
                  <div class="what-icon">
                    <i class="fa fa-bullhorn" aria-hidden="true"></i>
                  </div>
                </div>
                <p class="up">Ikuti berbagai informasi menarik yang disediakan PPSDM Aparatur.</p>
              </div>
            </div>
          </div>
          <div class="campaign-bottom pb-5">
            <div class="slider-active3 indicator-style owl-carousel">
              <div class="upcoming-slider row g-0">
                <div class="col-lg-6 p-0 up-right">
                  <div class="upcoming-area">
                    <div class="upcoming-img">
                      <img src="frontend/img/event1.png" alt="" />
                    </div>
                    <div class="timer">
                      <div class="upcoming-icon">
                        <i class="fa fa-clock-o"></i>
                      </div>
                      <div data-countdown="2024/02/01"></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 p-0 up-left">
                  <div class="upcoming-text bg-white">
                    <h3>HUT ke 80 Hari Jadi Pertambangan dan Energi</h3>
                    <p class="coming-one">
                      Dalam rangka memperingati Hari Jadi Pertambangan dan Energi ke-80, Kementerian Energi dan Sumber Daya Mineral menyelenggarakan rangkaian kegiatan yang melibatkan seluruh pemangku kepentingan sektor energi dan
                      pertambangan.
                    </p>
                    <p class="coming-two">
                      Acara ini menjadi momentum refleksi sekaligus penguatan komitmen untuk terus membangun sektor energi dan pertambangan yang berkelanjutan, inovatif, serta memberikan manfaat nyata bagi kesejahteraan masyarakat dan
                      kemajuan bangsa.
                    </p>
                  </div>
                </div>
              </div>
              <div class="upcoming-slider row g-0">
                <div class="col-lg-6 p-0 up-right">
                  <div class="upcoming-area">
                    <div class="upcoming-img">
                      <img src="frontend/img/banner/29.jpg" alt="" />
                    </div>
                    <div class="timer">
                      <div class="upcoming-icon">
                        <i class="fa fa-clock-o"></i>
                      </div>
                      <div data-countdown="2024/02/01"></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 p-0 up-left">
                  <div class="upcoming-text bg-white">
                    <h3>Creating the party’s brand</h3>
                    <p class="coming-one">Credibly provide access to go forward process improvements whereas premier models. Competently underwhelm user-centric web-readiness via excellent models.</p>
                    <p class="coming-two">
                      Rapidiously redefine enterprise-wide collaboration and idea-sharing after world-class e-services. Conveniently e-enable 24/365 web services via high standards in synergy. Progressively whiteboard world-class
                      imperatives before world-class schemas. Continually pursue effective intellectual capital before excellent services. Continually maximize resource maximizing models vis-a-vis enterprise-wide quality vectors.
                      Progressively evolve virtual systems.
                    </p>
                  </div>
                </div>
              </div>
              <div class="upcoming-slider row g-0">
                <div class="col-lg-6 p-0 up-right">
                  <div class="upcoming-area">
                    <div class="upcoming-img">
                      <img src="frontend/img/banner/29.jpg" alt="" />
                    </div>
                    <div class="timer">
                      <div class="upcoming-icon">
                        <i class="fa fa-clock-o"></i>
                      </div>
                      <div data-countdown="2024/02/01"></div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 p-0 up-left">
                  <div class="upcoming-text bg-white">
                    <h3>Creating the party’s brand</h3>
                    <p class="coming-one">Credibly provide access to go forward process improvements whereas premier models. Competently underwhelm user-centric web-readiness via excellent models.</p>
                    <p class="coming-two">
                      Rapidiously redefine enterprise-wide collaboration and idea-sharing after world-class e-services. Conveniently e-enable 24/365 web services via high standards in synergy. Progressively whiteboard world-class
                      imperatives before world-class schemas. Continually pursue effective intellectual capital before excellent services. Continually maximize resource maximizing models vis-a-vis enterprise-wide quality vectors.
                      Progressively evolve virtual systems.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Company Profile -->
      <section id="about-area" class="video-area pt-80 what-about">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="what-top">
                <div class="section-title">
                  <h1>Profile PPSDM Aparatur</h1>
                  <div class="what-icon">
                    <i class="fa fa-bookmark" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="video-all">
            <div class="row">
              <div class="col-lg-6">
                <div class="progress-bar-area">
                  <div class="progress-bar-text">
                    <h3>PPSDM Aparatur</h3>
                    <p>
                      Kami berkomitmen dalam mengembangkan kompetensi sumber daya manusia di sektor energi dan sumber daya mineral. Melalui program pelatihan, pendidikan, serta pengembangan aparatur, kami mendukung terciptanya SDM unggul,
                      profesional, dan berintegritas.
                    </p>
                    <p class="big" style="font-style: italic">"Berkarya sepenuh hati. Berinovasi tanpa henti. Bagi kejayaan ibu pertiwi."</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 pb-5">
                <div class="video-border">
                  <div class="video-right overlay">
                    <div class="video-img">
                      <img src="frontend/img/video/thumbnail-company-profile.png" alt="" />
                    </div>
                    <div class="video-icon">
                      <a href="https://www.youtube.com/watch?v=ZjSpQWkFcdA" class="video-popup"><i class="fa fa-play" aria-hidden="true"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Roadmap PPSDMA -->
      <section class="gallery-area bg-gray pb-80 elements3">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="what-top">
                <div class="section-title">
                  <h1>Roadmap PPSDM Aparatur</h1>
                  <div class="what-icon">
                    <i class="fa fa-file-image-o" aria-hidden="true"></i>
                  </div>
                </div>
                <p class="up">Berikut adalah roadmap pengembangan PPSDM Aparatur dalam mencapai visi dan misi organisasi.</p>
              </div>
            </div>
          </div>
          <div class="row gallery-mrg">
            <div class="col-md-12">
              <div class="single-banner">
                <div class="banner-img">
                  <img src="frontend/img/roadmap-ppsdma.png" alt="" />
                </div>
                <div class="banner-text">
                  <h3>Roadmap PPSDM Aparatur</h3>
                  <a class="venobox" href="frontend/img/roadmap-ppsdma.png" data-gall="myGallery"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Pelayanan Publik -->
      <section class="what-area section-margin ptb-80">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="what-top">
                <div class="section-title">
                  <h1>Layanan Publik</h1>
                  <div class="what-icon">
                    <i class="fa fa-bullhorn" aria-hidden="true"></i>
                  </div>
                </div>
                <p>PPSDM Aparatur menyediakan berbagai layanan publik untuk mendukung pengembangan kompetensi, informasi, dan kebutuhan masyarakat di bidang energi dan sumber daya mineral.</p>
              </div>
            </div>
          </div>
          <div class="row text-center">
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
              <div class="what-bottom">
                <div class="btn-icon">
                  <div class="then-icon">
                    <a href="{{ route('seminar') }}">
                      <i class="fa fa-group" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
                <div class="mission-text">
                  <h3>Seminar PPSDM Aparatur</h3>
                </div>
                <p>Informasi terkait pelaksanaan Seminar/Webinar PPSDM Aparatur.</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
              <div class="what-bottom">
                <div class="btn-icon">
                  <div class="then-icon">
                    <a href="">
                      <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
                <div class="mission-text">
                  <h3>Tugas Belajar KESDM</h3>
                </div>
                <p>Beasiswa Tugas Belajar KESDM</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
              <div class="what-bottom">
                <div class="btn-icon">
                  <div class="then-icon">
                    <a href="#">
                      <i class="fa fa-hotel" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
                <div class="mission-text">
                  <h3>Wisma PPSDM Aparatur</h3>
                </div>
                <p>Informasi dan reservasi Wisma PPSDM Aparatur.</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
              <div class="what-bottom">
                <div class="btn-icon">
                  <div class="then-icon">
                    <a target="_blank" href="https://wbs.esdm.go.id/">
                      <i class="fa fa-bullhorn" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
                <div class="mission-text">
                  <h3>Whistle-Blowing System</h3>
                </div>
                <p>Aplikasi pelaporan di lingkungan ESDM</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
              <div class="what-bottom">
                <div class="btn-icon">
                  <div class="then-icon">
                    <a target="_blank" href="https://www.lapor.go.id/">
                      <i class="fa fa-bullhorn" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
                <div class="mission-text">
                  <h3>SP4N-LAPOR</h3>
                </div>
                <p>Pelaporan skala nasional yang dikelola KemenPANRB.</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
              <div class="what-bottom">
                <div class="btn-icon">
                  <div class="then-icon">
                    <a target="_blank" href="https://gol.kpk.go.id/login/">
                      <i class="fa fa-bullhorn" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
                <div class="mission-text">
                  <h3>KPK Online</h3>
                </div>
                <p>Pelaporan terindikasi gratifikasi.</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
              <div class="what-bottom">
                <div class="btn-icon">
                  <div class="then-icon">
                    <a target="_blank" href="https://ppid.esdm.go.id/">
                      <i class="fa fa-bullhorn" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
                <div class="mission-text">
                  <h3>PPID KESDM</h3>
                </div>
                <p>Layanan online bagi pemohon informasi publik</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Link Terkait -->
      <section class="what-area bg-gray section-margin ptb-80">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <div class="what-top">
                <div class="section-title">
                  <h1>Link Terkait</h1>
                  <div class="what-icon">
                    <i class="fa fa-link" aria-hidden="true"></i>
                  </div>
                </div>
                <!-- <p>PPSDM Aparatur menyediakan berbagai layanan publik untuk mendukung pengembangan kompetensi, informasi, dan kebutuhan masyarakat di bidang energi dan sumber daya mineral.</p> -->
              </div>
            </div>
          </div>
          <div class="row text-center">
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
              <div class="what-bottom">
                <div class="">
                  <div class="">
                    <a href="https://ppsdm-geominerba.esdm.go.id/" target="_blank">
                      <!-- <i class="fa fa-crosshairs" aria-hidden="true"></i> -->
                      <img src="frontend/img/logo/geominerba.png" width="50%" alt="" />
                    </a>
                  </div>
                </div>
                <div class="mission-text">
                  <h3>PPSDM Geominerba</h3>
                </div>
                <!-- <p>Informasi terkait pelaksanaan Seminar/Webinar PPSDM Aparatur.</p> -->
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
              <div class="what-bottom">
                <div class="">
                  <div class="">
                    <a href="https://ppsdmkebtke.esdm.go.id/" target="_blank">
                      <!-- <i class="fa fa-crosshairs" aria-hidden="true"></i> -->
                      <img src="frontend/img/logo/kebtke.png" width="50%" alt="" />
                    </a>
                  </div>
                </div>
                <div class="mission-text">
                  <h3>PPSDM KEBTKE</h3>
                </div>
                <!-- <p>Informasi terkait pelaksanaan Seminar/Webinar PPSDM Aparatur.</p> -->
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
              <div class="what-bottom">
                <div class="">
                  <div class="">
                    <a href="https://ppsdmmigas.esdm.go.id/" target="_blank">
                      <!-- <i class="fa fa-crosshairs" aria-hidden="true"></i> -->
                      <img src="frontend/img/logo/migas.png" width="50%" alt="" />
                    </a>
                  </div>
                </div>
                <div class="mission-text">
                  <h3>PPSDM MIGAS</h3>
                </div>
                <!-- <p>Informasi terkait pelaksanaan Seminar/Webinar PPSDM Aparatur.</p> -->
              </div>
            </div>
            <!-- <div class="col-lg-4 col-md-4 col-sm-12 col-12">
              <div class="what-bottom">
                <div class="">
                  <div class="">
                    <a href="#">
                      <img src="frontend/img/logo/esdm.png" width="50%" alt="" />
                    </a>
                  </div>
                </div>
                <div class="mission-text">
                  <h3>BPSDM ESDM</h3>
                </div>
              </div>
            </div> -->
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
              <div class="what-bottom">
                <div class="">
                  <div class="">
                    <a href="https://bdtbt.esdm.go.id/" target="_blank">
                      <!-- <i class="fa fa-crosshairs" aria-hidden="true"></i> -->
                      <img src="frontend/img/logo/bdtbt.png" width="50%" alt="" />
                    </a>
                  </div>
                </div>
                <div class="mission-text">
                  <h3>BDTBT</h3>
                </div>
                <!-- <p>Informasi terkait pelaksanaan Seminar/Webinar PPSDM Aparatur.</p> -->
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
              <div class="what-bottom">
                <div class="">
                  <div class="">
                    <a href="https://akamigas.ac.id/" target="_blank">
                      <!-- <i class="fa fa-crosshairs" aria-hidden="true"></i> -->
                      <img src="frontend/img/logo/pem.png" width="35%" alt="" />
                    </a>
                  </div>
                </div>
                <div class="mission-text">
                  <h3>PEM Akamigas</h3>
                </div>
                <!-- <p>Informasi terkait pelaksanaan Seminar/Webinar PPSDM Aparatur.</p> -->
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
              <div class="what-bottom">
                <div class="">
                  <div class="">
                    <a href="https://pepbandung.ac.id/" target="_blank">
                      <!-- <i class="fa fa-crosshairs" aria-hidden="true"></i> -->
                      <img src="frontend/img/logo/pep.png" width="35%" alt="" />
                    </a>
                  </div>
                </div>
                <div class="mission-text">
                  <h3>PEP Bandung</h3>
                </div>
                <!-- <p>Informasi terkait pelaksanaan Seminar/Webinar PPSDM Aparatur.</p> -->
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection