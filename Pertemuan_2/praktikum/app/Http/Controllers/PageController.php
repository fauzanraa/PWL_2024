<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat datang';
    }

    public function about(){
        return 'Fauzan Ramadhan Aisfa / 2141762005';
    }

    public function articles($id){
        return 'Halaman Artikel dengan ID '.$id.'';
    }
}
