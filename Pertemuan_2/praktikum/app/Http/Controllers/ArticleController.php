<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function article($id = '10'){
        return 'Halaman Artikel dengan ID '.$id.'';
    }
}
