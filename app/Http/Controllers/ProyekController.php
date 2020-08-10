<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyekController extends Controller
{
    public function proyek(){
        return view ('proyek.tabel');
    }
    public function master(){
        return view ('layouts.master');
    }

}
