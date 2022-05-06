<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function index(){
        return view('site/index');
    }
    public function profil(){
        return view('site/profil');
    }
    public function screening(){
        return view('site/screening');
    }
    public function pengumpulan2(){
        return view('site/pengumpulan2');
    }
    public function panduan(){
        return view('site/panduan');
    }
    public function juri(){
        return view('site/juri');
    }public function sponsor(){
        return view('site/sponsor');
    }
}
