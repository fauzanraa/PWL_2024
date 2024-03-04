<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class WelcomeController extends Controller
{
    public function hello(){
        return 'Hello World';
    }

    public function greeting(){
        return view('blog.hello') 
        ->with('name', 'Fauzan')
        ->with('occupation', 'Collage Student');
    }
}
