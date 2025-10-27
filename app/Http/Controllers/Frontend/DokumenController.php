<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DokumenController extends Controller
{
    public function standarPelayanan()
    {
        return view('frontend.dokumen.standar-pelayanan');
    }
    public function sop()
    {
        return view('frontend.dokumen.sop');
    }
    public function lakipLaptah()
    {
        return view('frontend.dokumen.lakip-laptah');
    }
    public function renstraPPSDMA()
    {
        return view('frontend.dokumen.renstra-ppsdma');
    }
    public function renstraBPSDM()
    {
        return view('frontend.dokumen.renstra-bpsdm');
    }
    public function ikm()
    {
        return view('frontend.dokumen.ikm');
    }
    public function ipk()
    {
        return view('frontend.dokumen.ipk');
    }
    public function zonaIntegritas()
    {
        return view('frontend.dokumen.zona-integritas');
    }
    public function petaResiko()
    {
        return view('frontend.dokumen.peta-resiko');
    }
    public function kebijakanAntiPenyuapan()
    {
        return view('frontend.dokumen.kebijakan-anti-penyuapan');
    }
    public function laporanAktualisasi()
    {
        return view('frontend.dokumen.laporan-aktualisasi');
    }
    public function laporanImplementasi()
    {
        return view('frontend.dokumen.laporan-implementasi');
    }
}
