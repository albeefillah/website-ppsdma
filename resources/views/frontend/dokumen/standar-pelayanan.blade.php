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
                    <h1>Standar Pelayanan</h1>
                    <div class="what-icon">
                    <i class="fa fa-file-image-o" aria-hidden="true"></i>
                    </div>
                </div>
                <p class="up">PPSDM Aparatur berkomitmen memberikan layanan terbaik sesuai standar mutu dan profesionalisme.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="tab-content fix">
                    <div class="tab-pane active" id="preview">
                        <div class="panel-group" id="accordion2">
                            <div class="panel single-accordion">
                                <a href="#accordion-1" data-bs-toggle="collapse" class="accordion-head">Bimbingan Teknis</a>
                                <div class="collapse show" id="accordion-1" data-bs-parent="#accordion2">
                                    <div class="accordion-body fix">
                                        <a href="{{ asset('frontend/file/dokumen/standar-pelayanan/bimbingan-teknis.pdf') }}" download>
                                            <i class="fa fa-file-pdf-o"></i> Standar Pelayanan Bimbingan Teknis.pdf
                                          </a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel single-accordion">
                                <a href="#accordion-2" data-bs-toggle="collapse" class="accordion-head"> E-Learning </a>
                                <div class="collapse" id="accordion-2" data-bs-parent="#accordion2">
                                    <div class="accordion-body fix">
                                        <a href="{{ asset('frontend/file/dokumen/standar-pelayanan/e-learning.pdf') }}" download>
                                            <i class="fa fa-file-pdf-o"></i> Standar Pelayanan E-Learning.pdf
                                          </a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel single-accordion">
                                <a href="#accordion-3" data-bs-toggle="collapse" class="accordion-head">Dukungan Tugas Belajar</a>
                                <div class="collapse" id="accordion-3" data-bs-parent="#accordion2">
                                    <div class="accordion-body fix">
                                        <a href="{{ asset('frontend/file/dokumen/standar-pelayanan/dukungan-tubel.pdf') }}" download>
                                            <i class="fa fa-file-pdf-o"></i> Standar Pelayanan Dukungan Tugas Belajar.pdf
                                          </a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel single-accordion">
                                <a href="#accordion-4" data-bs-toggle="collapse" class="accordion-head">Penyertaan Diklat</a>
                                <div class="collapse" id="accordion-4" data-bs-parent="#accordion2">
                                    <div class="accordion-body fix">
                                        <a href="{{ asset('frontend/file/dokumen/standar-pelayanan/penyertaan-diklat.pdf') }}" download>
                                            <i class="fa fa-file-pdf-o"></i> Standar Pelayanan Penyertaan Duklat.pdf
                                          </a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel single-accordion">
                                <a href="#accordion-5" data-bs-toggle="collapse" class="accordion-head">Magang ESDM pada BU/BUT</a>
                                <div class="collapse" id="accordion-5" data-bs-parent="#accordion2">
                                    <div class="accordion-body fix">
                                        <a href="{{ asset('frontend/file/dokumen/standar-pelayanan/magang.pdf') }}" download>
                                            <i class="fa fa-file-pdf-o"></i> Standar Pelayanan Magang ESDM pada Badan Usaha/Badan Usaha Tetap.pdf
                                          </a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel single-accordion">
                                <a href="#accordion-6" data-bs-toggle="collapse" class="accordion-head">Penilaian Kompetensi Pegawai</a>
                                <div class="collapse" id="accordion-6" data-bs-parent="#accordion2">
                                    <div class="accordion-body fix">
                                        <a href="{{ asset('frontend/file/dokumen/standar-pelayanan/penilaian-kompetensi-pegawai.pdf') }}" download>
                                            <i class="fa fa-file-pdf-o"></i> Standar Pelayanan Penilaian Kompetensi Pegawai.pdf
                                          </a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel single-accordion">
                                <a href="#accordion-7" data-bs-toggle="collapse" class="accordion-head">One Hour University (OHU)</a>
                                <div class="collapse" id="accordion-7" data-bs-parent="#accordion2">
                                    <div class="accordion-body fix">
                                        <a href="{{ asset('frontend/file/dokumen/standar-pelayanan/ohu.pdf') }}" download>
                                            <i class="fa fa-file-pdf-o"></i> Standar Pelayanan One Hour University (OHU).pdf
                                          </a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel single-accordion">
                                <a href="#accordion-8" data-bs-toggle="collapse" class="accordion-head">Identifikasi Kebutuhan Pelatihan</a>
                                <div class="collapse" id="accordion-8" data-bs-parent="#accordion2">
                                    <div class="accordion-body fix">
                                        <a href="{{ asset('frontend/file/dokumen/standar-pelayanan/kebutuhan-pelatihan.pdf') }}" download>
                                            <i class="fa fa-file-pdf-o"></i> Standar Pelayanan Identifikasi Kebutuhan Pelatihan.pdf
                                          </a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel single-accordion">
                                <a href="#accordion-9" data-bs-toggle="collapse" class="accordion-head">Penyediaan Pengajar</a>
                                <div class="collapse" id="accordion-9" data-bs-parent="#accordion2">
                                    <div class="accordion-body fix">
                                        <a href="{{ asset('frontend/file/dokumen/standar-pelayanan/penyediaan-pengajar.pdf') }}" download>
                                            <i class="fa fa-file-pdf-o"></i> Standar Pelayanan Penyediaan Pengajar.pdf
                                          </a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel single-accordion">
                                <a href="#accordion-10" data-bs-toggle="collapse" class="accordion-head">Pengaduan Publik</a>
                                <div class="collapse" id="accordion-10" data-bs-parent="#accordion2">
                                    <div class="accordion-body fix">
                                        <a href="{{ asset('frontend/file/dokumen/standar-pelayanan/pengaduan-publik.pdf') }}" download>
                                            <i class="fa fa-file-pdf-o"></i> Standar Pelayanan Pengaduan Publik.pdf
                                          </a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel single-accordion">
                                <a href="#accordion-11" data-bs-toggle="collapse" class="accordion-head">Data dan Informasi</a>
                                <div class="collapse" id="accordion-11" data-bs-parent="#accordion2">
                                    <div class="accordion-body fix">
                                        <a href="{{ asset('frontend/file/dokumen/standar-pelayanan/data-informasi.pdf') }}" download>
                                            <i class="fa fa-file-pdf-o"></i> Standar Pelayanan Data dan Informasi.pdf
                                          </a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel single-accordion">
                                <a href="#accordion-12" data-bs-toggle="collapse" class="accordion-head">Perpustakaan PPSDMA</a>
                                <div class="collapse" id="accordion-12" data-bs-parent="#accordion2">
                                    <div class="accordion-body fix">
                                        <a href="{{ asset('frontend/file/dokumen/standar-pelayanan/perpustakaan.pdf') }}" download>
                                            <i class="fa fa-file-pdf-o"></i> Standar Pelayanan Perpustakaan PPSDMA.pdf
                                          </a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel single-accordion">
                                <a href="#accordion-13" data-bs-toggle="collapse" class="accordion-head">Wisma PPSDMA</a>
                                <div class="collapse" id="accordion-13" data-bs-parent="#accordion2">
                                    <div class="accordion-body fix">
                                        <a href="{{ asset('frontend/file/dokumen/standar-pelayanan/wisma.pdf') }}" download>
                                            <i class="fa fa-file-pdf-o"></i> Standar Pelayanan Wisma PPSDMA.pdf
                                          </a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel single-accordion">
                                <a href="#accordion-14" data-bs-toggle="collapse" class="accordion-head">Penjalinan Kerjasama</a>
                                <div class="collapse" id="accordion-14" data-bs-parent="#accordion2">
                                    <div class="accordion-body fix">
                                        <a href="{{ asset('frontend/file/dokumen/standar-pelayanan/penjalinan-kerjasama.pdf') }}" download>
                                            <i class="fa fa-file-pdf-o"></i> Standar Pelayanan Penjalinan Kerjasama.pdf
                                          </a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel single-accordion">
                                <a href="#accordion-15" data-bs-toggle="collapse" class="accordion-head">Penyelenggaraan Evaluasi Diklat</a>
                                <div class="collapse" id="accordion-15" data-bs-parent="#accordion2">
                                    <div class="accordion-body fix">
                                        <a href="{{ asset('frontend/file/dokumen/standar-pelayanan/evaluasi-diklat.pdf') }}" download>
                                            <i class="fa fa-file-pdf-o"></i> Standar Pelayanan Penyelenggaraan Evaluasi Diklat.pdf
                                          </a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel single-accordion">
                                <a href="#accordion-16" data-bs-toggle="collapse" class="accordion-head">Penyediaan Narasumber</a>
                                <div class="collapse" id="accordion-16" data-bs-parent="#accordion2">
                                    <div class="accordion-body fix">
                                        <a href="{{ asset('frontend/file/dokumen/standar-pelayanan/penyediaan-narasumber.pdf') }}" download>
                                            <i class="fa fa-file-pdf-o"></i> Standar Pelayanan Penyediaan Narasumber.pdf
                                          </a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel single-accordion">
                                <a href="#accordion-17" data-bs-toggle="collapse" class="accordion-head">Maklumat Pelayanan</a>
                                <div class="collapse" id="accordion-17" data-bs-parent="#accordion2">
                                    <div class="accordion-body fix">
                                        <a href="{{ asset('frontend/file/dokumen/standar-pelayanan/maklumat-pelayanan.pdf') }}" download>
                                            <i class="fa fa-file-pdf-o"></i> Standar Pelayanan Maklumat Pelayanan.pdf
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