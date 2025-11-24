<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function beranda() {
        return view('pages.beranda');
    }

    public function lowongan() {
        return view('pages.lowongan');
    }

    public function program() {
        return view('pages.program');
    }

    public function tentang() {
        return view('pages.tentang');
    }
 
    public function kontak() {
        return view('pages.kontak');
    }
}
