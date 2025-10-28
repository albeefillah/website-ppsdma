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
                    <h2 class="page-title">Pendidikan</h2>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>Pendidikan</li>
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
              <h1>Pendidikan</h1>
              <div class="what-icon">
                <i class="fa fa-file-image-o" aria-hidden="true"></i>
              </div>
            </div>
            <p class="up">PPSDM Aparatur berkomitmen meningkatkan kompetensi aparatur melalui pendidikan yang berkelanjutan dan berkualitas.</p>
          </div>
        </div>
      </div>
      <div class="row pt-5">
        <h5>Peserta Pendidikan Tugas Belajar KESDM</h5>
        <div class="col-md-6">
              <div class="form-group">
                  <select name="tahun" id="tahun" class="form-control">
                      <option value="">- Pilih tahun -</option>
                      <option value="">2025</option>
                      <option value="">2024</option>
                      <option value="">2023</option>
                  </select>
              </div>
        </div>
        <div class="col-md-6">
              <div class="form-group">
                  <select name="kategori" id="kategori" class="form-control">
                      <option value="">- Kategori -</option>
                      <option value="">Luar Negeri</option>
                      <option value="">Dalam Negeri</option>
                  </select>
              </div>
        </div>
        
    </div>

      <div class="row gallery-mrg">
        <div class="col-md-12">
            <table id="dataTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Universitas</th>
                        <th>Jurusan</th>
                        <th>Tahun</th>
                        <th>Kategori</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>Kyoto University</td>
                        <td>Manajemen</td>
                        <td>2025</td>
                        <td>Luar Negeri</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Bill Nelson</td>
                        <td>Institut Teknologi Bandung</td>
                        <td>Teknik Geologi</td>
                        <td>2024</td>
                        <td>Dalam Negeri</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Maria Gomez</td>
                        <td>The University of Sydney</td>
                        <td>Project Management</td>
                        <td>2023</td>
                        <td>Luar Negeri</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Andi Pratama</td>
                        <td>Universitas Gadjah Mada</td>
                        <td>Teknik Sipil</td>
                        <td>2022</td>
                        <td>Dalam Negeri</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Lisa Tan</td>
                        <td>Imperial College London</td>
                        <td>Chemical Engineering</td>
                        <td>2025</td>
                        <td>Luar Negeri</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Rudi Santoso</td>
                        <td>Universitas Indonesia</td>
                        <td>Human Capital Management</td>
                        <td>2023</td>
                        <td>Dalam Negeri</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Jessica Park</td>
                        <td>University of Auckland</td>
                        <td>Geothermal Engineering</td>
                        <td>2024</td>
                        <td>Luar Negeri</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Ahmad Fauzi</td>
                        <td>Institut Teknologi Sepuluh Nopember</td>
                        <td>Teknik Kelistrikan</td>
                        <td>2022</td>
                        <td>Dalam Negeri</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Emily Carter</td>
                        <td>Carnegie Mellon University</td>
                        <td>Public Policy</td>
                        <td>2025</td>
                        <td>Luar Negeri</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Dewi Lestari</td>
                        <td>Universitas Padjadjaran</td>
                        <td>Ekonomi</td>
                        <td>2023</td>
                        <td>Dalam Negeri</td>
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