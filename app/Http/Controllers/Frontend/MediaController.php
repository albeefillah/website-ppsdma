<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function berita()
    {
        return view('frontend.media.berita.berita');
    }
    public function detailBerita()
    {
        return view('frontend.media.berita.detail');
    }

    public function galeri()
    {
        return view('frontend.media.galeri');
    }
}
