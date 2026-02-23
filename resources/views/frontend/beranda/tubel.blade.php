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

      <div class="col-md-12 pt-3" style="overflow: auto;">
        <h6>Jurusan dan Universitas yang ditawarkan (Magister dan Doctoral)</h6>
        <!-- Tabel Jurusan dan Universitas (Magister & Doctoral) -->
        <table class="table table-bordered table-striped">
            <thead style="background:#d9e9fb; text-align:left;">
            <tr>
                <th style="width:40px;">No</th>
                <th>Jurusan</th>
                <th>Area Fokus</th>
                <th>Universitas</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Geothermal Engineering</td>
                <td>-</td>
                <td>
                <ol style="margin:0 0 0 18px; padding:0;">
                    <li>The University of Auckland, New Zealand</li>
                    <li>Institut Teknologi Bandung, Indonesia</li>
                </ol>
                </td>
            </tr>
        
            <tr>
                <td>2</td>
                <td>Engineering and Public Policy</td>
                <td>Environmental Science and Public Policy</td>
                <td>
                <ol style="margin:0 0 0 18px; padding:0;">
                    <li>Carnegie Mellon University, US</li>
                </ol>
                </td>
            </tr>
        
            <tr>
                <td>3</td>
                <td>Oil and Gas Engineering / Petroleum Engineering</td>
                <td>CCS/CCUS</td>
                <td>
                <ol style="margin:0 0 0 18px; padding:0;">
                    <li>The University of Edinburgh, UK*</li>
                    <li>Texas A&amp;M University, US</li>
                </ol>
                </td>
            </tr>
        
            <tr>
                <td>4</td>
                <td>Sustainable Energy Futures</td>
                <td>-</td>
                <td>
                <ol style="margin:0 0 0 18px; padding:0;">
                    <li>Imperial College London, UK*</li>
                    <li>Iceland School of Energy, Iceland*</li>
                </ol>
                </td>
            </tr>
        
            <tr>
                <td>5</td>
                <td>Electrical Engineering</td>
                <td>Economic Analysis of Transition Model and Power System Plan</td>
                <td>
                <ol style="margin:0 0 0 18px; padding:0;">
                    <li>ETH Zurich, Germany*</li>
                </ol>
                </td>
            </tr>
        
            <tr>
                <td>6</td>
                <td>Electrical Engineering</td>
                <td>Energy and Power Engineering</td>
                <td>
                <ol style="margin:0 0 0 18px; padding:0;">
                    <li>Tsinghua University, China*</li>
                    <li>Institut Teknologi Bandung, Indonesia</li>
                </ol>
                </td>
            </tr>
        
            <tr>
                <td>7</td>
                <td>Civil Engineering / Master of Engineering</td>
                <td>Geomechanical Engineering</td>
                <td>The University of Sydney</td>
            </tr>
        
            <tr>
                <td>8</td>
                <td>Manajemen Bencana / Mitigasi Bencana</td>
                <td>-</td>
                <td>
                <ol style="margin:0 0 0 18px; padding:0;">
                    <li>The University of Manchester, UK*</li>
                    <li>Coventry University, UK</li>
                    <li>Universitas Gadjah Mada, Indonesia</li>
                </ol>
                </td>
            </tr>
        
            <tr>
                <td>9</td>
                <td>Earth &amp; Environmental Science</td>
                <td>-</td>
                <td>
                <ol style="margin:0 0 0 18px; padding:0;">
                    <li>The University of Tokyo, Japan*</li>
                    <li>Institut Teknologi Bandung, Indonesia</li>
                </ol>
                </td>
            </tr>
        
            <tr>
                <td>10</td>
                <td>Energy System</td>
                <td>-</td>
                <td>
                <ol style="margin:0 0 0 18px; padding:0;">
                    <li>The Australian National University, Australia*</li>
                    <li>Imperial College London, UK*</li>
                </ol>
                </td>
            </tr>
        
            <tr>
                <td>11</td>
                <td>Chemical Engineering</td>
                <td>-</td>
                <td>
                <ol style="margin:0 0 0 18px; padding:0;">
                    <li>The University of New South Wales (UNSW Sydney), Australia*</li>
                    <li>Institut Teknologi Bandung, Indonesia</li>
                </ol>
                </td>
            </tr>
        
            <tr>
                <td>12</td>
                <td>Project Management</td>
                <td>-</td>
                <td>
                <ol style="margin:0 0 0 18px; padding:0;">
                    <li>RMIT University, Australia</li>
                    <li>Universitas Gadjah Mada, Indonesia</li>
                </ol>
                </td>
            </tr>
        
            <tr>
                <td>13</td>
                <td>Human Capital Management</td>
                <td>Organization Development</td>
                <td>
                <ol style="margin:0 0 0 18px; padding:0;">
                    <li>The University of Sydney, Australia</li>
                    <li>Universitas Airlangga, Indonesia</li>
                </ol>
                </td>
            </tr>
        
            <tr>
                <td>14</td>
                <td>Human Capital Management</td>
                <td>Strategic People Management</td>
                <td>
                <ol style="margin:0 0 0 18px; padding:0;">
                    <li>Imperial College London, UK*</li>
                    <li>Universitas Indonesia, Indonesia</li>
                </ol>
                </td>
            </tr>
        
            <tr>
                <td>15</td>
                <td>Economic / Finance</td>
                <td>Risk Management &amp; Financial Engineering</td>
                <td>
                <ol style="margin:0 0 0 18px; padding:0;">
                    <li>Imperial College London, UK*</li>
                    <li>Universitas Indonesia, Indonesia</li>
                </ol>
                </td>
            </tr>
        
            <tr>
                <td>16</td>
                <td>Strategic Planning / Manajemen Strategic</td>
                <td>-</td>
                <td>
                <ol style="margin:0 0 0 18px; padding:0;">
                    <li>Australian National University, Australia*</li>
                    <li>Universitas Indonesia, Indonesia</li>
                </ol>
                </td>
            </tr>
        
            <tr>
                <td>17</td>
                <td>Design</td>
                <td>Media Design Practices</td>
                <td>ArtCenter College of Design, US*</td>
            </tr>
            </tbody>
        </table>
  
        <p style="font-size:12px; margin-top:6px;">
            <em>* = masih dalam konfirmasi kerjasama</em>
        </p>
      </div>
    </div>


    <div class="tab-accordion-area bg-off-white ptb-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tab-content fix">
                        <div class="tab-pane active" id="preview">
                            <div class="panel-group" id="accordion2">

                                <div class="panel single-accordion">
                                    <a href="#accordion-1" data-bs-toggle="collapse" class="accordion-head">Materi Webinar Beasiswa Tugas Belajar KESDM 2025</a>
                                    <div class="collapse show" id="accordion-1" data-bs-parent="#accordion2">
                                        <div class="accordion-body fix">
                                            <a href="https://bit.ly/MateriSosialisasiTubel2025" target="_blank">
                                                <i class="fa fa-file-pdf-o"></i> Download
                                              </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel single-accordion">
                                    <a href="#accordion-2" data-bs-toggle="collapse" class="accordion-head">Mekanisme Persyaratan Tugas Belajar KESDM 2025</a>
                                    <div class="collapse" id="accordion-2" data-bs-parent="#accordion2">
                                        <div class="accordion-body fix">
                                            <a href="{{ asset('frontend/file/beranda/tubel/Syarat_Ketentuan_Tubel_2025.pdf') }}" download>
                                                <i class="fa fa-file-pdf-o"></i> Download
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
  </section>

@endsection