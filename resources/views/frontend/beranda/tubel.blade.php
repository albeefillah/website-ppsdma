@extends('main')
@section('content')
<section class="breadcrumbs-area ptb-140 breadcumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="breadcrumbs pt-6">
                    <h2 class="page-title">Tugas Belajar</h2>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>Tugas Belajar</li>
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
              <h1>Tugas Belajar</h1>
              <div class="what-icon">
                <i class="fa fa-file-image-o" aria-hidden="true"></i>
              </div>
            </div>
            <p class="up">Tugas belajar memberikan kesempatan bagi pegawai PPSDMA untuk mengembangkan kompetensi melalui pendidikan formal yang mendukung kinerja organisasi.</p>
          </div>
        </div>
      </div>
      <div class="row gallery-mrg">
        <div class="col-md-12">
          <div class="single-banner">
            <div class="text-center">
              <img src="{{ asset('frontend/img/beranda/tubel/tubel-2025.png') }}" alt="" />
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection