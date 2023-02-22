<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function news($topic='New News') {
        echo ucwords(str_replace('-', ' ', $topic));
    }
}
