<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function index(){
    //     return "ini dari home controller";
    // }

    public function show(){
        $nama = 'Rizky Kaharani';
        $daftar_nama =['Kiki','Yeni','Rahma'];
        return view('home.home',compact(
            'nama','daftar_nama'
        ));
    }

    public function home_pegawai(){
        return view('pegawai.index');
    }

    // public function tambah_post(Request $request){
    //     $name = $request ->get('namee');
    //     return 'Dengan nama '.$name;
    // }
}
