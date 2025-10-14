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
                        <li>Visi dan Misi</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about-area" class="video-area pt-80 pb-5 what-about">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="what-top">
                    <div class="section-title">
                        <h1>Visi & Misi</h1>
                        <div class="what-icon">
                            <i class="fa fa-bookmark" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="video-all">
            {{-- <div class="row"> --}}
                <div class="col-lg-12">
                    <div class="progress-bar-area">
                        <div class="progress-bar-text">
                            <h3>Visi</h3>
                            <p style="font-size: 15px;">Menjadi lembaga terandal dalam mewujudkan ASN KESDM yang jujur, profesional, inovatif, melayani, dan berarti</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="progress-bar-area">
                        <div class="progress-bar-text">
                            <h3>Misi</h3>
                            <p style="font-size: 15px;"> Meningkatkan kompetensi ASN KESDM secara optimal dan berkelanjutan melalui pelatihan klasikal dan non-klasikal di bidang kepemimpinan, manajemen, dan administrasi demi mendorong kinerja organisasi.</p>
                        </div>
                    </div>
                </div>
            {{-- </div> --}}
        </div>
    </div>
</section>

@endsection