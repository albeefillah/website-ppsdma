@section('title') 
PPSDM Aparatur - Dashboard
@endsection 
@extends('backend.layouts.main')
@section('style')
<!-- Chartist Chart CSS -->
<link href="{{ asset('backend/plugins/chartist-js/chartist.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Datepicker CSS -->
<link href="{{ asset('backend/plugins/datepicker/datepicker.min.css') }}" rel="stylesheet" type="text/css" />

{{-- Add style table --}}
<style>
    .scroll-indicator{
        height:700px ;
        overflow-x:auto;
        border-radius: 8px;
        position: relative;
    }
    
</style>
@endsection 
@section('content')
<!-- Start XP Breadcrumbbar -->                    
<br>
<br>
<br>
<!-- End XP Breadcrumbbar -->
<!-- Start XP Contentbar -->    
<div class="xp-contentbar">

    <!-- Start XP Row -->
<div class="row">              

    <!-- End XP Col -->                       
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="xp-widget-box">
                    <div class="float-left">
                        <h4 class="xp-counter text-primary">0</h4>
                        <p class="mb-0 text-muted">Berita</p>                        
                    </div>
                    <div class="float-right">
                        <div class="xp-widget-icon xp-widget-icon-bg bg-primary-rgba">
                            <i class="mdi mdi-file-document font-30 text-primary"></i>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End XP Col -->

    <!-- End XP Col -->                       
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="xp-widget-box">
                    <div class="float-left">
                        <h4 class="xp-counter text-success">5</h4>
                        <p class="mb-0 text-muted">Pengumuman</p>                        
                    </div>
                    <div class="float-right">
                        <div class="xp-widget-icon xp-widget-icon-bg bg-success-rgba">
                            <i class="mdi mdi-currency-usd font-30 text-success"></i>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End XP Col -->

    <!-- End XP Col -->                       
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="xp-widget-box">
                    <div class="float-left">
                        <h4 class="xp-counter text-warning">2</h4>
                        <p class="mb-0 text-muted">User</p>                        
                    </div>
                    <div class="float-right">
                        <div class="xp-widget-icon xp-widget-icon-bg bg-warning-rgba">
                            <i class="mdi mdi-account-multiple font-30 text-warning"></i>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End XP Col -->

    <!-- End XP Col -->                       
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="xp-widget-box">
                    <div class="float-left">
                        <h4 class="xp-counter text-danger">150</h4>
                        <p class="mb-0 text-muted">Total Pengunjung</p>                        
                    </div>
                    <div class="float-right">
                        <div class="xp-widget-icon xp-widget-icon-bg bg-danger-rgba">
                            <i class="mdi mdi-eye font-30 text-danger"></i>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End XP Col -->
</div>
<!-- End XP Row -->

<div class="row">                             
    <!-- Start XP Col -->
    <div class="col-md-6">
        <div class="card m-b-30">
            <div class="card-header bg-white">
                <h5 class="card-title text-black mb-0">Grafik Pengunjung</h5>
            </div>
            <div class="card-body">
                <div class="xp-chart-label">
                    {{-- <ul class="list-inline">
                        <li class="list-inline-item">
                            <p class="text-black">Current Week</p>
                            <h4 class="text-primary-gradient mb-3"><i class="icon-wallet mr-2"></i>78,254</h4>
                        </li>
                        <li class="list-inline-item">
                            <p class="text-black">Previous Week</p>
                            <h4 class="text-success-gradient mb-3"><i class="icon-wallet mr-2"></i>58,605</h4>
                        </li>
                    </ul> --}}
                </div>
                <div id="xp-chartist-series-overrides" class="ct-chart ct-golden-section xp-chartist-simple-line"></div>
            </div>
        </div>
    </div>
    <!-- End XP Col --> 
    <div class="col-md-6">
        <div class="card m-b-30">
            <div class="card-header bg-white">
                <h5 class="card-title text-black mb-0">Weekly Revenue</h5>
            </div>
            <div class="card-body">
                <div class="xp-chart-label">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <p class="text-black">Current Week</p>
                            <h4 class="text-primary-gradient mb-3"><i class="icon-wallet mr-2"></i>78,254</h4>
                        </li>
                        <li class="list-inline-item">
                            <p class="text-black">Previous Week</p>
                            <h4 class="text-success-gradient mb-3"><i class="icon-wallet mr-2"></i>58,605</h4>
                        </li>
                    </ul>
                </div>
                <div id="xp-chartist-series-overrides" class="ct-chart ct-golden-section xp-chartist-simple-line"></div>
            </div>
        </div>
    </div>
    <!-- End XP Col --> 
 </div>
<!-- End XP Row -->





</div>

<!-- End XP Contentbar -->
@endsection 
@section('script')
<!-- Chartist Chart JS -->
<script src="{{ asset('backend/plugins/chartist-js/chartist.min.js') }}"></script>
<script src="{{ asset('backend/plugins/chartist-js/chartist-plugin-tooltip.min.js') }}"></script>
<!-- To Do List JS -->
<script src="{{ asset('backend/js/init/to-do-list-init.js') }}"></script>
<!-- Datepicker JS -->
<script src="{{ asset('backend/plugins/datepicker/datepicker.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datepicker/i18n/datepicker.en.js') }}"></script>
<!-- Dashboard JS -->
<script src="{{ asset('backend/js/init/dashboard.js') }}"></script>

@endsection 