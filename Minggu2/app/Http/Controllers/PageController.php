<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Halaman Utama
    public function index() {
        return "Selamat Datang";
    }

    // Halaman About
    public function about() {
        return "Nama: My Babby Findia R.S. <br> NIM: 2341760007";
    }

    //Halaman Articles(id)
    public function articles($id) {
        return "Halaman Artikel dengan Id " . $id;
    }
}
