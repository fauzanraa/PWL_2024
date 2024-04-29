<?php

namespace App\Http\Controllers;

use App\Models\StokModel;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;

class StokController extends Controller
{
    public function index(){
        $breadcrumb = (object) [
            'title' => 'Daftar Stok',
            'list' => ['Home','Stok']
        ];

        $page = (object) [
            'title' => 'Daftar Stok yang terdaftar dalam sistem'
        ];

        $activeMenu = 'stok';

        return view('stok.index',['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }
    // Ambil data user dalam bentuk json untuk datatables 
    public function list(Request $request) 
    { 
        $barang = StokModel::select('barang_id', 'user_id', 'stok_tanggal', 'stok_jumlah') ->with('barang', 'user'); 
    
        // if($request->level_id){
        //     $users->where('level_id',$request->level_id);
        // }
        return DataTables::of($barang) 
        ->addIndexColumn() // menambahkan kolom index / no urut (default nama kolom: DT_RowIndex) 
            ->addColumn('aksi', function ($user) {  // menambahkan kolom aksi 
                // $btn  = '<a href="'.url('/user/' . $user->user_id).'" class="btn btn-info btn-sm">Detail</a> '; 
                // $btn .= '<a href="'.url('/user/' . $user->user_id . '/edit').'"class="btn btn-warning btn-sm">Edit</a> '; 
                // $btn .= '<form class="d-inline-block" method="POST" action="'. url('/user/'.$user->user_id).'">' 
                //         . csrf_field() . method_field('DELETE') .  
                //         '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah Anda yakit menghapus data ini?\');">Hapus</button></form>';      
                // return $btn; 
            }) 
            ->rawColumns(['aksi']) // memberitahu bahwa kolom aksi adalah html 
            ->make(true); 
    }
}
