@extends('main')
@section('content')
<section class="breadcrumbs-area ptb-140 breadcumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="breadcrumbs">
                    <h2 class="page-title">Dokumen</h2>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>Standar Pelayanan</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="tab-accordion-area bg-off-white ptb-80">
    <div class="container">
        <div class="row pb-5">
            <div class="col-md-12 text-center">
                <div class="what-top">
                  <div class="section-title">
                    <h1>Standar Operasional Prosedur (SOP)</h1>
                    <div class="what-icon">
                      <i class="fa fa-file-image-o" aria-hidden="true"></i>
                    </div>
                  </div>
                  <p class="up">Kami menerapkan Standar Operasional Prosedur (SOP) sebagai acuan pelaksanaan tugas dan layanan yang transparan serta konsisten.</p>
                </div>
            </div>
          </div>
        <div class="row">
            <div class="col-12">
                <div class="tab-content fix">
                    <div class="tab-pane active" id="preview">
                        <div class="panel-group" id="accordion2">
                            <div class="panel single-accordion">
                                <a href="#accordion-1" data-bs-toggle="collapse" class="accordion-head">Pengaturan Mobilisasi Pengajar dan Peserta di Wisma</a>
                                <div class="collapse show" id="accordion-1" data-bs-parent="#accordion2">
                                    <div class="accordion-body fix">
                                        <a href="{{ asset('frontend/file/dokumen/sop/sop-mobilisasi-pengajar.pdf') }}" download>
                                            <i class="fa fa-file-pdf-o"></i> SOP Pengaturan Mobilisasi Pengajar dan Peserta di Wisma.pdf
                                          </a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel single-accordion">
                                <a href="#accordion-2" data-bs-toggle="collapse" class="accordion-head">Pelaksanaan E-Learning  </a>
                                <div class="collapse" id="accordion-2" data-bs-parent="#accordion2">
                                    <div class="accordion-body fix">
                                        <a href="{{ asset('frontend/file/dokumen/sop/sop-e-learning.pdf') }}" download>
                                            <i class="fa fa-file-pdf-o"></i> SOP Pelaksanaan E-Learning
                                          </a>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection