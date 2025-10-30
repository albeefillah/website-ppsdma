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
                    <h2 class="page-title">Seminar</h2>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>Seminar</li>
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
              <h1>Seminar & Knowledge Sharing</h1>
              <div class="what-icon">
                <i class="fa fa-file-image-o" aria-hidden="true"></i>
              </div>
            </div>
            <p class="up">Seminar dan knowledge sharing menjadi sarana berbagi pengetahuan dan pengalaman untuk meningkatkan kompetensi pegawai PPSDMA.</p>
          </div>
        </div>
      </div>
      <div class="col-md-12 pt-5">
        <h6>Tahun Pelaksanaan</h6>
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

      <div class="row gallery-mrg">
        <div class="col-md-12" style="overflow: auto;">
            <table id="dataTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Pelaksanaan</th>
                        <th>Tahun</th>
                        <th>Tema</th>
                        <th>Narasumber</th>
                        <th>Materi</th>
                        <th>Sertifikat</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>20 Mei 2025</td>
                        <td>2025</td>
                        <td>Sinegeri AI dan Energi: Menata Masa Depan Ketahanan dan Keberlanjutan Sektor Energi Indonesia</td>
                        <td>Widiya Kumoro
                            (Head of ICT & Digitalization (Mind ID)), Chipta Perdana
                            (Direktur Electricity Related Business (PLN)), Anung Pungkowo
                            (Sr Expert I IT Architecture & Governance (Pertamina))</td>
                        <td><a target="_blank" href="https://drive.google.com/drive/folders/1jkubtc4Q2t88cVoQJW8Gx44zlyUnancN?usp=sharing">Download</a></td>
                        <td><a target="_blank" href="https://drive.google.com/drive/folders/15cHR119_wKMbD12vEYVzsuhdSHySOzwS?usp=sharing">Download</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>08 Oktober 2025</td>
                        <td>2025</td>
                        <td>Intercultural Communication, Global Crises and Regional Future</td>
                        <td>Prof Dr. Samid Suliman (Director International AEL Griffith University)</td>
                        <td><a href="">-</a></td>
                        <td><a target="_blank" href="https://drive.google.com/drive/folders/1QfXuU1IRC_iqy3NahWslp33tBZ9L7uqG?usp=sharing">Download</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>17 Oktober 2025</td>
                        <td>2025</td>
                        <td>Membangun Ekosistem Talenta ASN: Kolaborasi, Digitalisasi, dan Integritas Sistem Merit</td>
                        <td>Prof. Zudan Arif Fakrulloh (Kepala Badan Kepegawaiann Negara)	</td>
                        <td><a target="_blank" href="https://drive.google.com/file/d/1irLQAzqlpDEQX-hBl5rfG34MGR0Rs0py/view?usp=sharing">Download</a></td>
                        <td><a target="_blank" href="https://drive.google.com/drive/folders/1qOheiJ9rmNKiP7u40e3cx4MlLDqLomcO?usp=sharing">Download</a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>20 Mei 2025</td>
                        <td>2025</td>
                        <td>Sinegeri AI dan Energi: Menata Masa Depan Ketahanan dan Keberlanjutan Sektor Energi Indonesia</td>
                        <td>Widiya Kumoro
                            (Head of ICT & Digitalization (Mind ID)), Chipta Perdana
                            (Direktur Electricity Related Business (PLN)), Anung Pungkowo
                            (Sr Expert I IT Architecture & Governance (Pertamina))</td>
                        <td><a target="_blank" href="https://drive.google.com/drive/folders/1jkubtc4Q2t88cVoQJW8Gx44zlyUnancN?usp=sharing">Download</a></td>
                        <td><a target="_blank" href="https://drive.google.com/drive/folders/15cHR119_wKMbD12vEYVzsuhdSHySOzwS?usp=sharing">Download</a></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>08 Oktober 2025</td>
                        <td>2025</td>
                        <td>Intercultural Communication, Global Crises and Regional Future</td>
                        <td>Prof Dr. Samid Suliman (Director International AEL Griffith University)</td>
                        <td><a href="">-</a></td>
                        <td><a target="_blank" href="https://drive.google.com/drive/folders/1QfXuU1IRC_iqy3NahWslp33tBZ9L7uqG?usp=sharing">Download</a></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>17 Oktober 2025</td>
                        <td>2025</td>
                        <td>Membangun Ekosistem Talenta ASN: Kolaborasi, Digitalisasi, dan Integritas Sistem Merit</td>
                        <td>Prof. Zudan Arif Fakrulloh (Kepala Badan Kepegawaiann Negara)	</td>
                        <td><a target="_blank" href="https://drive.google.com/file/d/1irLQAzqlpDEQX-hBl5rfG34MGR0Rs0py/view?usp=sharing">Download</a></td>
                        <td><a target="_blank" href="https://drive.google.com/drive/folders/1qOheiJ9rmNKiP7u40e3cx4MlLDqLomcO?usp=sharing">Download</a></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>20 Mei 2025</td>
                        <td>2025</td>
                        <td>Sinegeri AI dan Energi: Menata Masa Depan Ketahanan dan Keberlanjutan Sektor Energi Indonesia</td>
                        <td>Widiya Kumoro
                            (Head of ICT & Digitalization (Mind ID)), Chipta Perdana
                            (Direktur Electricity Related Business (PLN)), Anung Pungkowo
                            (Sr Expert I IT Architecture & Governance (Pertamina))</td>
                        <td><a target="_blank" href="https://drive.google.com/drive/folders/1jkubtc4Q2t88cVoQJW8Gx44zlyUnancN?usp=sharing">Download</a></td>
                        <td><a target="_blank" href="https://drive.google.com/drive/folders/15cHR119_wKMbD12vEYVzsuhdSHySOzwS?usp=sharing">Download</a></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>08 Oktober 2025</td>
                        <td>2025</td>
                        <td>Intercultural Communication, Global Crises and Regional Future</td>
                        <td>Prof Dr. Samid Suliman (Director International AEL Griffith University)</td>
                        <td><a href="">-</a></td>
                        <td><a target="_blank" href="https://drive.google.com/drive/folders/1QfXuU1IRC_iqy3NahWslp33tBZ9L7uqG?usp=sharing">Download</a></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>17 Oktober 2025</td>
                        <td>2025</td>
                        <td>Membangun Ekosistem Talenta ASN: Kolaborasi, Digitalisasi, dan Integritas Sistem Merit</td>
                        <td>Prof. Zudan Arif Fakrulloh (Kepala Badan Kepegawaiann Negara)	</td>
                        <td><a target="_blank" href="https://drive.google.com/file/d/1irLQAzqlpDEQX-hBl5rfG34MGR0Rs0py/view?usp=sharing">Download</a></td>
                        <td><a target="_blank" href="https://drive.google.com/drive/folders/1qOheiJ9rmNKiP7u40e3cx4MlLDqLomcO?usp=sharing">Download</a></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>17 Oktober 2025</td>
                        <td>2025</td>
                        <td>Membangun Ekosistem Talenta ASN: Kolaborasi, Digitalisasi, dan Integritas Sistem Merit</td>
                        <td>Prof. Zudan Arif Fakrulloh (Kepala Badan Kepegawaiann Negara)	</td>
                        <td><a target="_blank" href="https://drive.google.com/file/d/1irLQAzqlpDEQX-hBl5rfG34MGR0Rs0py/view?usp=sharing">Download</a></td>
                        <td><a target="_blank" href="https://drive.google.com/drive/folders/1qOheiJ9rmNKiP7u40e3cx4MlLDqLomcO?usp=sharing">Download</a></td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>17 Oktober 2025</td>
                        <td>2025</td>
                        <td>Membangun Ekosistem Talenta ASN: Kolaborasi, Digitalisasi, dan Integritas Sistem Merit</td>
                        <td>Prof. Zudan Arif Fakrulloh (Kepala Badan Kepegawaiann Negara)	</td>
                        <td><a target="_blank" href="https://drive.google.com/file/d/1irLQAzqlpDEQX-hBl5rfG34MGR0Rs0py/view?usp=sharing">Download</a></td>
                        <td><a target="_blank" href="https://drive.google.com/drive/folders/1qOheiJ9rmNKiP7u40e3cx4MlLDqLomcO?usp=sharing">Download</a></td>
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