<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class BerandaController extends Controller
{
    public function index()
    {
        $banners = Banner::where('is_active', 1)
            ->orderBy('list', 'asc')
            ->get();
   
        return view('frontend/beranda/welcome', compact(
            'banners'
            ));
    }
    public function seminar()
    {
        return view('frontend/beranda/seminar');
    }
    public function tubel()
    {
        return view('frontend/beranda/tubel');
    }
}
