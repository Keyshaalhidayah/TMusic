<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showDaftar()
    {
        return view('daftar'); // Menyertakan file daftar.blade.php
    }
}
