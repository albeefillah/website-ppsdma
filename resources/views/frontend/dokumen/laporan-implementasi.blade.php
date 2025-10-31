@extends('main')
@section('css')
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css" /> --}}
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
                        <li>Laporan Implementasi DIKPIM</li>
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
              <h1>Laporan Implementasi DIKPIM</h1>
              <div class="what-icon">
                <i class="fa fa-file-image-o" aria-hidden="true"></i>
              </div>
            </div>
            <p class="up">Laporan Implementasi DIKPIM memuat hasil penerapan kompetensi kepemimpinan yang diperoleh selama pelatihan.</p>
          </div>
        </div>
      </div>
      <div class="row pt-5">
          <h5>Laporan Implementasi DIKPIM 2021</h5>
          <div class="col-md-4">
                <div class="form-group">
                    <select name="tahun" id="tahun" class="form-control">
                        <option value="">- Pilih tahun -</option>
                        <option value="">2019</option>
                        <option value="">2021</option>
                        <option value="">2022</option>
                        <option value="">2023</option>
                    </select>
                </div>
          </div>
          <div class="col-md-4">
                <div class="form-group">
                    <select name="dikpim" id="dikpim" class="form-control">
                        <option value="">- Jenis Dikpim -</option>
                        <option value="">PKA</option>
                        <option value="">PKP</option>
                    </select>
                </div>
          </div>
          <div class="col-md-4">
                <div class="form-group">
                    <select name="tingkat" id="tingkat" class="form-control">
                        <option value="">- Tingkat -</option>
                        <option value="">I</option>
                        <option value="">II</option>
                        <option value="">III</option>
                        <option value="">IV</option>
                    </select>
                </div>
          </div>
      </div>
      <div class="col-md-12 pt-3" style="overflow: auto;">
        
        <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">Peringkat</th>
                <th scope="col">Nama</th>
                <th scope="col">Instansi</th>
                <th scope="col">Judul Implementasi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" class="text-center">1</th>
                <td>Horas Pasaribu, S.T.</td>
                <td>Direktorat Jenderal Mineral dan Batubara</td>
                <td> <a target="_blank" href="https://drive.google.com/file/d/1PRq_Llbu-zWItXaBX-7Zip-_enddm7zu/view?usp=sharing">AKSELERASI PROSES PERSETUJUAN RENCANA REKLAMASI</a></td>
              </tr>
              <tr>
                <th scope="row" class="text-center">2</th>
                <td>Dr. Cahyo Setyo Wibowo, S.T.,M.T</td>
                <td>BBPMGB LEMIGAS</td>
                <td> <a target="_blank" href="https://drive.google.com/file/d/1wfsRAllyDaznlTDyRFzwBNiUhEENqrTK/view?usp=sharing">PENINGKATAN LAYANAN JASA PENGUJIAN DI KELOMPOK KERJA PENGUJIAN APLIKASI PRODUK BBPMGB LEMIGAS</a></td>
              </tr>
              <tr>
                <th scope="row" class="text-center">3</th>
                <td>Dr. Taat Setiawan, S.T., M.T.</td>
                <td>Balai Konservasi Air Tanah, Badan Geologi</td>
                <td> <a target="_blank" href="https://drive.google.com/file/d/1W8-HIuo_J5cGtl8aBjjOMQz37GtWyV8I/view?usp=sharing">PENINGKATAN EFEKTIVITAS PENGAWASAN PERIZINAN AIR TANAH MELALUI STRATEGI SINERGITAS KELEMBAGAAN DAN DIGITALISASI SISTEM KERJA (STUDI KASUS PROVINSI DKI JAKARTA)</a></td>
              </tr>
              <tr>
                <th scope="row" class="text-center">4</th>
                <td>Dr. Aldi Martino Hutagalung, S.T., M.T.</td>
                <td>Direktorat Jenderal Miinyak dan Gas Bumi</td>
                <td> <a target="_blank" href="https://drive.google.com/file/d/1W-WFnrCLDIOsakMh0WngquhC5hKyqRG7/view?usp=sharing">	PENGEMBANGAN MANAJEMEN PENGETAHUAN BERBASIS ARTIFICIAL INTELLEGENCE PADA DIREKTORAT JENDERAL MINYAK DAN GAS BUMI</a></td>
              </tr>
              <tr>
                <th scope="row" class="text-center">5</th>
                <td>Prima Agung Prasetyawan Suharko, S.T., M.S.E.</td>
                <td>Sekretariat Jenderal Dewan Energi Nasional</td>
                <td> <a target="_blank" href="https://drive.google.com/file/d/11m4-MpRDWExhgwlgWRLB7qyjp8JzefKm/view?usp=sharing">	KAJIAN INDIKATOR PERHITUNGAN INDEKS KETAHANAN ENERGI DAERAHKAJIAN INDIKATOR PERHITUNGAN INDEKS KETAHANAN ENERGI DAERAH</a></td>
              </tr>
            </tbody>
          </table>
      </div>
      <div class="row gallery-mrg">
        <div class="col-md-12">
            <table id="dataTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tahun</th>
                        <th>Jenis DIKPIM</th>
                        <th>Tingkat</th>
                        <th>Angkatan</th>
                        <th>Link Laporan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2019</td>
                        <td>PKP</td>
                        <td>IV</td>
                        <td>1</td>
                        <td><a target="_blank" href="">Klik disini</a></td>
                    </tr>
                        <td>2</td>
                        <td>2019</td>
                        <td>PKP</td>
                        <td>IV</td>
                        <td>2</td>
                        <td><a target="_blank" href="">Klik disini</a></td>
                    </tr>
                    </tr>
                        <td>3</td>
                        <td>2019</td>
                        <td>PKA</td>
                        <td>III</td>
                        <td>-</td>
                        <td><a target="_blank" href="">Klik disini</a></td>
                    </tr>
                    </tr>
                        <td>4</td>
                        <td>2022</td>
                        <td>PKA</td>
                        <td>III</td>
                        <td>-</td>
                        <td><a target="_blank" href="">Klik disini</a></td>
                    </tr>
                    </tr>
                        <td>4</td>
                        <td>2025</td>
                        <td>PKA</td>
                        <td>III</td>
                        <td>-</td>
                        <td><a target="_blank" href="">Klik disini</a></td>
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