<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function sejarah()
    {
        return view('frontend.profile.sejarah');
    }
    public function visiMisi()
    {
        return view('frontend.profile.visi-misi');
    }
    public function tugasFungsi()
    {
        return view('frontend.profile.tugas-fungsi');
    }
    public function strukturOrg()
    {
        return view('frontend.profile.struktur-org');
    }
    public function widyaiswara()
    {
        return view('frontend.profile.widyaiswara');
    }
    public function sarpras()
    {
        return view('frontend.profile.sarpras');
    }
}
