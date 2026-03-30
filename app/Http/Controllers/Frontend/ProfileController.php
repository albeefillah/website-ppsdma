<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\strukturOrganisasi;
use App\Models\tugasFungsi;
use App\Models\visiMisi;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function sejarah()
    {
        return view('frontend.profile.sejarah');
    }
    public function visiMisi()
    {
        $visiMisi = visiMisi::first();

        return view('frontend.profile.visi-misi', compact('visiMisi'));
    }
    public function tugasFungsi()
    {
        $tugasFungsi = tugasFungsi::first();
        return view('frontend.profile.tugas-fungsi', compact('tugasFungsi'));
    }
    public function strukturOrg()
    {
        $strukturOrg = strukturOrganisasi::latest()->first();
        return view('frontend.profile.struktur-org', compact('strukturOrg'));
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
