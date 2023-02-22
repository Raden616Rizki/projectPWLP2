<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function edu() {
        return 'Marbel - Educational Games';
        // $url = "https://www.educastudio.com/category/marbel-edu-games" ;
        // return redirect()->away($url);
    }
    public function kids() {
        return 'Marbel & Friends - Kids Games';
    }
    public function riri() {
        return 'Riri Story Books';
    }
    public function kolak() {
        return 'Kolak Kids Song';
    }
}
