<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function program_soina_club()
    {
        return view('front.pages.program.soina_club');
    }

    public function program_young_athletes()
    {
        return view('front.pages.program.young_athletes');
    }

    public function program_tentang_kami()
    {
        return view('front.pages.program.tentang_kami');
    }

    public function program_misi()
    {
        return view('front.pages.program.misi');
    }

    public function kontak_kami()
    {
        return view('front.pages.program.kontak_kami');
    }

    public function kemitraan()
    {
        return view('front.pages.program.kemitraan');
    }

    public function disabilitas_intelektual()
    {
        return view('front.pages.program.disabilitas_intelektual');
    }

    public function kalendar_kegiatan()
    {
        return view('front.pages.program.kalendar_kegiatan');
    }

    public function blog()
    {
        return view('front.pages.blog.index');
    }
}
