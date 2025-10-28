<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>PPSDM Aparatur KESDM</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset ('frontend/img/favicon.ico') }}" />

    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" />
    <!-- font-awesome CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}" />
    <!-- meanmenu css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/meanmenu.min.css') }}" />
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.transitions.css') }}" />
    <!-- nivo slider CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('frontend/lib/css/nivo-slider.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/lib/css/preview.css') }}" type="text/css" media="screen" />
    <!-- chosen CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('frontend/css/chosen.min.css') }}" />
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}" />
    <!-- Magnific Popup CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}" />
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('frontend/css/normalize.css') }}" />
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}" />
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}" />
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}" />

    <!-- venobox CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('frontend/css/venobox.css') }}" />

    <!-- Style customizer -->
    <link rel="stylesheet" href="{{ asset('frontend/css/color/color-1.css') }}" />
    <style>
      /* Sembunyikan elemen Google Translate tanpa mematikannya */
    #google_translate_element {
        position: absolute;
        top: -9999px;
        left: -9999px;
        visibility: hidden;
      }

      .goog-logo-link,
      .goog-te-gadget span,
      .goog-te-banner-frame.skiptranslate {
        display: none !important;
      }
      body {
        top: 0px !important;
      }

    </style>
     @yield('css')   
    <!-- modernizr JS
		============================================ -->
    <script src="{{ asset('frontend/js/vendor/modernizr-3.11.7.min.js') }}"></script>
  </head>
  <body>
    <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Add your site or application content here -->
    <div class="wrapper">
      <header class="header-area intelligent-header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="logo floatleft">
                <a href="index.html"> <img alt="" width="210" height="90" src="{{ asset('frontend/img/logo/logo.png') }}" /> </a>
              </div>
              <div class="header-search floatright">
                <div class="header-button floatright">
                  <div class="language-switch">
                    <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-flag"></i> Bahasa</button>
                    <ul class="dropdown-menu">
                      <li><button onclick="setLanguage('id')" class="btn btn-sm btn-light border dropdown-item">
                        🇮🇩 Indonesia
                      </button></li>
                      <li><button onclick="setLanguage('en')" class="btn btn-sm btn-light border dropdown-item">
                        🇬🇧 English
                      </button></li>
                    </ul>
                  </div>
                </div>

                <div id="search" class="search-top floatleft">
                  <input class="form-control input-lg" placeholder="Search" value="" name="search" type="text" />
                  <span class="search">
                    <i class="fa fa-search"></i>
                  </span>
                </div>
              </div>

              <div class="main-menu floatright">
                <nav>
                  <ul>
                    <li><a href="/"> Beranda</a></li>
                    <li>
                      <a class="menu-icon" href="/">Profile<i class="fa fa-angle-down" aria-hidden="true"></i> </a>
                      <div class="mega-menu shortcode2">
                        <ul class="submenu-mainmenu">
                          <li>
                            <a href="{{ route('sejarah') }}">Sejarah</a>
                          </li>
                          <li>
                            <a href="{{ route('visi-misi') }}">Visi & Misi</a>
                          </li>
                          <li>
                            <a href="{{ route('tugas-fungsi') }}">Tugas & Fungsi</a>
                          </li>
                          <li>
                            <a href="{{ route('struktur-org') }}">Struktur Organisasi</a>
                          </li>
                          <li>
                            <a href="{{ route('widyaiswara') }}">Widyaiswara</a>
                          </li>
                          <li>
                            <a href="{{ route('sarpras') }}">Sarana dan Prasarana</a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li>
                      <a class="menu-icon" href="/">Layanan<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                      <ul class="submenu-mainmenu">
                        <li>
                          <a href="{{ route('pendidikan') }}">Pendidikan</a>
                        </li>
                        <li>
                          <a href="{{ route('pelatihan') }}">Pelatihan</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a class="menu-icon" href="/">SMART OFFICE<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                      <ul class="submenu-mainmenu">
                        <li>
                          <a target="_blank" href="https://ppsdma-bpsdm.esdm.go.id/sida/">SIDA</a>
                        </li>
                        <li>
                          <a target="_blank" href="https://ppsdma-bpsdm.esdm.go.id/juwita/index.php/APARATUR">e-Jurnal</a>
                        </li>
                        <li>
                          <a target="_blank" href="https://smile.esdm.go.id/">SMILE</a>
                        </li>
                      </ul>
                    </li>

                    <li>
                        <a class="menu-icon" href="/">Media<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="submenu-mainmenu">
                          <li>
                            <a href="{{ route('berita') }}">Berita</a>
                          </li>
                          {{-- <li>
                            <a href="">Publikasi</a>
                          </li> --}}
                          <li>
                            <a href="{{ route('galeri') }}">Galeri</a>
                          </li>
                        </ul>
                    </li>

                    <li>
                      <a class="menu-icon" href="/">Dokumen<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                      <ul class="submenu-mainmenu">
                        <li>
                          <a href="{{ route('standar-pelayanan') }}">Standar Pelayanan PPSDMA</a>
                        </li>
                        <li>
                          <a href="{{ route('sop') }}">SOP PPSDMA</a>
                        </li>
                        <li>
                          <a href="{{ route('lakip-laptah') }}">LAKIP & LAPTAH</a>
                        </li>
                        <li>
                          <a href="{{ asset('frontend/file/dokumen/renstra-ppsdma/renstra-ppsdma.pdf') }}" target="_blank" >Renstra PPSDMA</a>
                        </li>
                        <li>
                          <a href="{{ asset('frontend/file/dokumen/renstra-bpsdm/renstra-bpsdm.pdf') }} "  target="_blank" >Renstra BPSDM ESDM</a>
                        </li>
                        <li>
                          <a href="{{ route('ikm') }}">Indeks Kepuasan Masyarakat (IKM)</a>
                        </li>
                        <li>
                          <a href="{{ route('ipk') }}">Indeks Pesepsi Korupsi (IPK)</a>
                        </li>
                        <li>
                          <a href="{{ route('zona-integritas') }}">Zona Integritas</a>
                        </li>
                        <li>
                          <a href="{{ asset('frontend/file/dokumen/peta-resiko/peta-resiko.pdf') }}"  target="_blank">Peta Resiko Organisasi</a>
                        </li>
                        <li>
                          <a href="{{ asset('frontend/file/dokumen/kebijakan-anti-penyuapan/kebijakan-anti-penyuapan.pdf') }}"  target="_blank">Kebijakan Anti Penyuapan</a>
                        </li>
                        <li>
                          <a href="{{ route('laporan-aktualisasi') }}">Laporan Aktualisasi LATSAR CPNS</a>
                        </li>
                        <li>
                          <a href="{{ route('laporan-implementasi') }}">Laporan Implementasi DIKPIM</a>
                        </li>
                      </ul>
                    </li>
                    <li><a href="{{ route('kontak') }}">Kontak Kami</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- Mobile menu Area -->
      <div class="mobile-menu-area d-block d-lg-none">
        <div class="container">
          <div class="mobile-menu-area">
            <div class="row">
              <div class="col-md-12">
                <div class="mobile-menu">
                  <nav id="dropdown">
                    <ul class="menu">
                      <li><a href="/"> Beranda</a></li>
                      <li>
                        <a class="menu-icon" href="/">Profile<i class="fa fa-angle-down" aria-hidden="true"></i> </a>
                        <div class="mega-menu shortcode2">
                          <ul class="submenu-mainmenu">
                            <li>
                              <a href="">Sejarah</a>
                            </li>
                            <li>
                              <a href="">Visi & Misi</a>
                            </li>
                            <li>
                              <a href="">Tugas & Fungsi</a>
                            </li>
                            <li>
                              <a href="">Struktur Organisasi</a>
                            </li>
                            <li>
                              <a href="">Widyaiswara</a>
                            </li>
                            <li>
                              <a href="">Sarana dan Prasarana</a>
                            </li>
                          </ul>
                        </div>
                      </li>
                      <li>
                        <a class="menu-icon" href="issues.html">Layanan<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="submenu-mainmenu">
                          <li>
                            <a href="{{ route('pendidikan') }}">Pendidikan</a>
                          </li>
                          <li>
                            <a href="{{ route('pelatihan') }}">Pelatihan</a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a class="menu-icon" href="events.html">SMART OFFICE<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="submenu-mainmenu">
                          <li>
                            <a href="">SIDA</a>
                          </li>
                          <li>
                            <a href="">e-Jurnal</a>
                          </li>
                          <li>
                            <a href="">SMILE</a>
                          </li>
                        </ul>
                      </li>

                      <li><a href="/"> Galeri</a></li>
                      <li><a href="contact.html">Kontak Kami</a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      @yield('content')

      <!-- Map Area -->
      <!-- <div class="map-area">
        <div class="contact-map">
          <div id="hastech"></div>
        </div>
      </div> -->
      <footer id="footer" class="social-area">
        <div class="container">
          <div class="footer-top">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="social-logo">
                  <a href="index.html">
                    <img src="{{ asset('frontend/img/logo/logo.png') }}" alt="" />
                  </a>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="social-icon floatright">
                  <ul>
                    <li>
                      <a class="whatsapp" target="_blank" href="https://wa.me/6281282822249"><i class="fa fa-whatsapp"></i></a>
                    </li>
                    <li>
                      <a class="facebook" target="_blank" href="https://www.facebook.com/PPSDMA.KESDM"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a class="instagram" target="_blank" href="https://www.instagram.com/ppsdmaparatur.kesdm"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    <li>
                      <a class="pinterest" target="_blank" href="https://www.youtube.com/@ppsdmaparatur8405"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-middle ptb-80">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="middle-text">
                  <h3>Tentang Kami</h3>
                  <div class="middle-mgn">
                    <div class="footer-top-left">
                      <p><i class="fa fa-whatsapp"></i></p>
                      <a target="_blank" href="https://wa.me/6281282822249">0812-8282-2249 (Quick Response)</a>
                    </div>
                    <div class="footer-middle-right">
                      <p><i class="fa fa-phone"></i></p>
                      <a href="tel:0222502428">022 - 2502428 </a>
                    </div>
                    <div class="footer-bottom-right">
                      <p><i class="fa fa-envelope" aria-hidden="true"></i></p>
                      <a target="_blank" href="#">info.ppsdma@esdm.go.id </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 col-md-6">
                <div class="middle-text res-1">
                  <h3>Link Terkait</h3>
                  <div class="middle-mgn">
                    <div class="footer-top-left">
                      <p><i class="fa fa-chevron-right"></i></p>
                      <a href="https://www.esdm.go.id/">Kementerian ESDM</a>
                    </div>
                    <div class="footer-top-left">
                      <p><i class="fa fa-chevron-right"></i></p>
                      <a href="https://bpsdm.esdm.go.id/">Badan Pengembangan Sumber Daya Manusia ESDM</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-bottom">
          <div class="container">
            <div class="footer-bottom-all">
              <div class="col-lg-12 col-12 col-md-12">
                <div class="copyright-text mx-auto">
                  <p class="text-center"><font color="white">© 2025 PPSDM Aparatur.</font></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- start scrollUp
            ============================================ -->
      <div id="toTop">
        <i class="fa fa-chevron-up"></i>
      </div>
    </div>

    
    <script type="text/javascript">
      function googleTranslateElementInit() {
        new google.translate.TranslateElement({
          pageLanguage: 'id',
          includedLanguages: 'en,id',
          layout: google.translate.TranslateElement.InlineLayout.SIMPLE
        }, 'google_translate_element');
      }
      
      function setLanguage(lang) {
        const interval = setInterval(() => {
          const combo = document.querySelector('.goog-te-combo');
          if (combo) {
            combo.value = lang;
            combo.dispatchEvent(new Event('change'));
            clearInterval(interval);
          }
        }, 500);
      }
      
      window.addEventListener('load', function() {
        const savedLang = localStorage.getItem('selectedLang');
        if (savedLang && savedLang !== 'id') {
          setLanguage(savedLang);
        }
      });
      </script>
      
      <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
      
    @yield('js')
    <!-- jquery
		============================================ -->
    <script src="{{ asset('frontend/js/vendor/jquery-1.12.4.min.js') }}"></script>

    <!-- bootstrap JS
		============================================ -->
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <!-- ajax mails JS
        ============================================ -->
    <script src="{{ asset('frontend/js/ajax-mail.js') }}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <!-- Nivo slider js
		============================================ -->
    <script src="{{ asset('frontend/lib/js/jquery.nivo.slider.js') }}"></script>
    <script src="{{ asset('frontend/lib/home.js') }}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{ asset('frontend/js/plugins.js') }}"></script>
    <!-- google map api
		============================================ -->
  
    <script type="text/javascript">
      // grab an element
      var myElement = document.querySelector(".intelligent-header");
      // construct an instance of Headroom, passing the element
      var headroom = new Headroom(myElement);
      // initialise
      headroom.init();
    </script>
    <!-- main JS
		============================================ -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>

    <!-- Google Translate -->
    <div id="google_translate_element"></div>

    
  </body>
</html>
