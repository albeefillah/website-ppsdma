<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function pendidikan()
    {
        return view('frontend.layanan.pendidikan');
    }
    public function pelatihan()
    {
        return view('frontend.layanan.pelatihan');
    }
}
