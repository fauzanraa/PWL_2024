<?php

namespace App\Http\Controllers;

use App\Charts\StaffChart;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function index(StaffChart $chart) {
        $breadcrumb = (object) [
            'title' => 'Selamat Datang',
            'list' => ['Home', 'Welcome']
        ];

        $activeMenu = 'dashboard';

        return view('welcome', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu, 'chart' => $chart->build()] );
    }

    public function user(){
        $data = Usermodel::where('nama', Auth::user()->nama)->first();

        $breadcrumb = (object) [
            'title' => 'Detail User',
            'list' => ['Home', 'User']
        ];

        $page = (object) [
            'title' => 'Detail user'    
        ];

        $activeMenu = 'dashboard';

        return view('welcomeUser', [
            'breadcrumb' => $breadcrumb, 
            'page' => $page,
            'activeMenu' => $activeMenu,
            'data' => $data
        ]);
    }
}
