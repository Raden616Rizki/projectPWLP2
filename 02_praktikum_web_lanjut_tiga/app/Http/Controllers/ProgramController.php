<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    //
    public function karir() {
        return 'Program Karir di Eudeca Studio';
    }
    public function magang() {
        return 'Program Magang di Eudeca Studio';
    }
    public function kunjunganIndustri() {
        return 'Program Kunjungan Industri di Eudeca Studio';
    }
}

