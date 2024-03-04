<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function fnb(){
        return 'Ini adalah halaman food n beverages';
    }

    public function beauty_care(){
        return 'Ini adalah halaman beauty care';
    }

    public function home_care(){
        return 'Ini adalah halaman home care';
    }

    public function baby_kid(){
        return 'Ini adalah halaman baby_kid';
    }
}
