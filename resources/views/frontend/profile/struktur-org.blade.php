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
                        <li>Struktur Organisasi</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="gallery-area bg-gray pb-80 elements3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="what-top">
            <div class="section-title">
              <h1>Struktur Organisasi</h1>
              <div class="what-icon">
                <i class="fa fa-file-image-o" aria-hidden="true"></i>
              </div>
            </div>
            <p class="up">Berikut adalah struktur organisasi PPSDM Aparatur</p>
          </div>
        </div>
      </div>
      <div class="row gallery-mrg">
        <div class="col-md-12">
          <div class="single-banner">
            <div class="text-center">
              <img src="{{ asset('frontend/img/struktur-org/struktur-org.png') }}" alt="" />
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection