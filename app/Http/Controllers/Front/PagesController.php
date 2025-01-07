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
}
