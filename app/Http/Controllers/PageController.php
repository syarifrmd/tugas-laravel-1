<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home ()
    {
        return view('home');
    }
    public function login ()
    {
        return view('login');
    }
    public function databarang ()
    {
        return view('databarang');
    }
    public function datatransaksi ()
    {
        return view('datatransaksi');
    }
}
