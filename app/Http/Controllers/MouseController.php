<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MouseController extends Controller
{
    public function index()
    {
        //DB::table('')->get();
        // mengambil data dari table mouse
        //$mouse = DB::table('mouse')->get(); //hasil get() adalah Array of Object [object][]

        $mouse = DB::table('mouse')->paginate(5);
        // mengirim data mouse ke view index
        return view('mouse.index', ['mouse' => $mouse]); //teknik komunikasi/passing value antara controller dan view

    }

    // method untuk menampilkan view form tambah mouse
    public function tambah()
    {

        // memanggil view tambah
        return view('mouse.tambah');
    }

    // method untuk insert data ke table mouse
    public function store(Request $request)
    {
        // insert data ke table mouse
        DB::table('mouse')->insert([
            'kodemouse' => $request->kodemouse,
            'merkmouse' => $request->merkmouse,
            'stockmouse' => $request->stockmouse,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman mouse
        return redirect('/mouse'); //tidak return view, karena jadi tidak fleksibel

    }

    // method untuk edit data mouse
    public function edit($kodemouse)
    {
        // mengambil data mouse berdasarkan kodemouse yang dipilih
        $mouse = DB::table('mouse')->where('kodemouse', $kodemouse)->get();
        // passing data mouse yang didapat ke view edit.blade.php
        return view('mouse.edit', ['mouse' => $mouse]);
    }

    // method untuk melihat detail data mouse
    public function detail($kodemouse)
    {
        // mengambil data mouse berdasarkan id yang dipilih
        $mouse = DB::table('mouse')->where('kodemouse', $kodemouse)->get();
        // passing data mouse yang didapat ke view edit.blade.php
        return view('mouse.detail', ['mouse' => $mouse]);
    }

    // update data mouse
    public function update(Request $request)
    {
        // update data mouse
        DB::table('mouse')->where('kodemouse', $request->kodemouse)->update([
            'kodemouse' => $request->kodemouse,
            'merkmouse' => $request->merkmouse,
            'stockmouse' => $request->stockmouse,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman mouse
        return redirect('/mouse');
    }

    // method untuk hapus data mouse
    public function hapus($kodemouse)
    {
        // menghapus data mouse berdasarkan id yang dipilih
        DB::table('mouse')->where('kodemouse', $kodemouse)->delete();

        // alihkan halaman ke halaman mouse
        return redirect('/mouse');
    }

    // method untuk cari data mouse
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table mouse sesuai pencarian data
        $mouse = DB::table('mouse')
            ->where('kodemouse', 'like', "%" . $cari . "%")
            ->orWhere('tersedia', 'like', "%" . $cari . "%")
            ->orWhere('stockmouse', 'like', "%" . $cari . "%")
            ->orWhere('merkmouse', 'like', "%" . $cari . "%")
            ->paginate(5);

        // mengirim data mouse ke view index
        return view('mouse.index', ['mouse' => $mouse]);
    }
}
