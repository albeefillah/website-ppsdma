@extends('main')
@section('name')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/2.3.4/css/dataTables.bootstrap5.css" />
@endsection
@section('content')
<section class="breadcrumbs-area ptb-140 breadcumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="breadcrumbs">
                    <h2 class="page-title">Dokumen</h2>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>Laporan Aktualisasi LATSAR CPNS</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="gallery-area pb-80 elements3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="what-top">
            <div class="section-title">
              <h1>Laporan Aktualisasi LATSAR CPNS</h1>
              <div class="what-icon">
                <i class="fa fa-file-image-o" aria-hidden="true"></i>
              </div>
            </div>
            <p class="up">Laporan Aktualisasi LATSAR CPNS menampilkan hasil penerapan nilai-nilai BerAKHLAK dalam tugas nyata para peserta.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 pt-5">
        <h5>Laporan Aktualisasi Latsar CPNS 2021</h5>
        <form action="">
            <div class="form-group">
                <select name="tahun" id="tahun" class="form-control">
                    <option value="">- Pilih tahun -</option>
                    <option value="">2019</option>
                    <option value="">2021</option>
                    <option value="">2022</option>
                    <option value="">2023</option>
                </select>
            </div>
        </form>
      </div>
      <div class="col-md-12 pt-3" style="overflow: auto;">
        
        <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">Peringkat</th>
                <th scope="col">Nama</th>
                <th scope="col">Instansi</th>
                <th scope="col">Judul Aktualisasi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" class="text-center">1</th>
                <td>Bimo Kukuh Pambudi Hardigaluh, S.E.</td>
                <td>Badan Litbang ESDM</td>
                <td> <a target="_blank" href="https://drive.google.com/file/d/1hVBMqYh0Gp8FHP19UfmrscnwQxGF0rL2/view?usp=sharing">Optimalisasi Pelaksanaan Terhadap Prosedur Pertanggungjawaban Penggunaan Uang Muka</a></td>
              </tr>
              <tr>
                <th scope="row" class="text-center">2</th>
                <td>Dewanti Farah Dwiputri, S.Psi.</td>
                <td>Badan Geologi</td>
                <td> <a target="_blank" href="https://drive.google.com/file/d/1BsBTVhIH1dAGqZFCpGGDbyNEN4pz5aCT/view?usp=sharing">Pembangunan Sistem Aplikasi Screening Peserta Diklat di Badan Geologi</a></td>
              </tr>
              <tr>
                <th scope="row" class="text-center">3</th>
                <td>Putri Pangestika Anasititi, S.Stat.</td>
                <td>Ditjen EBTKE</td>
                <td> <a target="_blank" href="https://drive.google.com/file/d/1l5Aghmfed4Hk0uiBNiNeHdoPLVtl6RrP/view?usp=sharing">Penyempurnaan Database dan Alur Pelaporan Data Energi Primer Pembangkit Listrik</a></td>
              </tr>
            </tbody>
          </table>
      </div>
      <div class="row gallery-mrg">
        <div class="col-md-12" style="overflow: auto;">
            <table id="dataTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tahun Latsar</th>
                        <th>Angkatan</th>
                        <th>Link Laporan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2022</td>
                        <td>1</td>
                        <td><a target="_blank" href="https://drive.google.com/drive/folders/1QHAkCRPS1Z2maK5AR5iACp742ydn2Lw0?usp=drive_link">Klik disini</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>2022</td>
                        <td>2</td>
                        <td><a target="_blank" href="https://drive.google.com/drive/folders/1QHAkCRPS1Z2maK5AR5iACp742ydn2Lw0?usp=drive_link">Klik disini</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>2021</td>
                        <td>3</td>
                        <td><a target="_blank" href="https://drive.google.com/drive/folders/1QHAkCRPS1Z2maK5AR5iACp742ydn2Lw0?usp=drive_link">Klik disini</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
      </div>
    </div>
  </section>
@endsection
@section('js')
   
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.3.4/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.3.4/js/dataTables.bootstrap5.js"></script>
    <script>
        new DataTable('#dataTable');
    </script>
@endsection