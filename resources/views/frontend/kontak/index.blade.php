@extends('main')
@section('content')
<section class="breadcrumbs-area ptb-140 breadcumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="breadcrumbs">
                    <h2 class="page-title">Kontak</h2>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>Kontak</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="contact-area" class=" map-area-two-text pt-5 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="contact-heading">
                    <h3>Kontak Kami</h3>
                    <p>Hubungi kami untuk informasi lebih lanjut mengenai layanan dan kegiatan PPSDM Aparatur.</p>
                </div>
            </div>
        </div>
        <div class="map-input-contact-area">
            <form id="contact-form" class="contact-form" action="mail.php" method="post">
                <div class="row">
                    <div class="col-lg-4">
                        <input class="form-control2" name="name" required="" placeholder="Nama*" type="text">
                    </div>
                    <div class="col-lg-4">
                        <input class="form-control2" name="email" required="" placeholder="Email*" type="email">
                    </div>
                    <div class="col-lg-4">
                        <input class="form-control2" name="whatsapp" required="" placeholder="No Whatsapp" type="text">
                    </div>
                    <div class="col-lg-12">
                        {{-- <input class="form-control2" name="tentang" required="" placeholder="Subject*" type="text"> --}}
                        <select class="form-control" name="kategori" id="">
                            <option value="">- Pilih Kategori Layanan -</option>
                            <option value="pengaduan">Pengaduan</option>
                            <option value="kritiksaran">Kritik/Saran</option>
                            <option value="pertanyaan">Pertanyaan</option>
                        </select>
                    </div>
                    <div class="col-lg-12 pt-4 text-center">
                        <div class="home-2-text-area">
                            <textarea class="form-control2" name="message" required="" placeholder="isi Pesan"></textarea>
                        </div>
                        <button class="submit" type="submit">
                            Kirim 
                            <i class="fa fa-paper-plane" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </form>
            <p class="form-messege"></p>
        </div>
    </div>
</section>

<section class="map-area map-area-two">
    <div class="contact-map">
        {{-- <div id="hastech2"></div> --}}
        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d697.2854372533988!2d107.61159006677019!3d-6.879419567669366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6fa562bd977%3A0x8f021b30ca77dbea!2sHuman%20Resource%20Development%20Center%20Apparatus%20EMR!5e1!3m2!1sen!2sid!4v1760597536486!5m2!1sen!2sid" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

@section('js')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_qDiT4MyM7IxaGPbQyLnMjVUsJck02N0"></script>

@endsection
@endsection