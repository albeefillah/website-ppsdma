@extends('main')
@section('css')
    <style>
        .p-text p{
            font-size: 15px;
        }
    </style>
@endsection
@section('content')
<section class="breadcrumbs-area ptb-140 breadcumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="breadcrumbs pt-6">
                    <h2 class="page-title">Profile</h2>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>Tugas dan Fungsi</li>
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
                        <h1>Tugas & Fungsi</h1>
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
                        <div class="progress-bar-text p-text">
                            <h3>Tugas</h3>
                            <p style="font-size: 15px;">{{ $tugasFungsi->tugas }}</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="progress-bar-area">
                        <div class="progress-bar-text p-text">
                            <h3>Fungsi</h3>
                           {!! $tugasFungsi->fungsi !!}

                        </div>
                    </div>
                </div>
            {{-- </div> --}}
        </div>
    </div>
</section>

@endsection