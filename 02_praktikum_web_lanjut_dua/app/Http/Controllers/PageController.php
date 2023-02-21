<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index() {
        echo "Selamat Datang";
    }

    public function about() {
        echo "Raden Rizki | 2141720064";
    }

    public function articles($id=1) {
        echo "Halaman Artikel dengan ID ".$id;
    }
}
