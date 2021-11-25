<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TugasController extends Controller
{
    public function index()
    {
        // mengambil data dari table tugas
        $tugas = DB::table('tugas')->get();

        // mengirim data pegawai ke view index
        return view('tugas.index', ['tugas' => $tugas]);
    }

    // method untuk menampilkan view form tambah tugas
    public function tambah()
    {

        // memanggil view tambah
        return view('tugas.tambah');
    }

    // method untuk insert data ke table tugas
    public function store(Request $request)
    {
        // insert data ke table tugas
        DB::table('tugas')->insert([
            'idPegawai' => $request->idPegawai,
            'tanggal' => $request->tanggal,
            'namaTugas' => $request->namaTugas,
            'status' => $request->status
        ]);
        // alihkan halaman ke halaman tugas
        return redirect('/tugas');
    }

    // method untuk edit data tugas
    public function edit($id)
    {
        // mengambil data tugas berdasarkan id yang dipilih
        $tugas = DB::table('tugas')->where('id', $id)->get();
        // passing data tugas yang didapat ke view edit.blade.php
        return view('tugas.edit', ['tugas' => $tugas]);
    }

    // update data tugas
    public function update(Request $request)
    {
        // update data tugas
        DB::table('tugas')->where('id', $request->id)->update([
            'idPegawai' => $request->idPegawai,
            'tanggal' => $request->tanggal,
            'namaTugas' => $request->namaTugas,
            'status' => $request->status
        ]);
        // alihkan halaman ke halaman tugas
        return redirect('/tugas');
    }

    // method untuk hapus data tugas
    public function hapus($id)
    {
        // menghapus data tugas berdasarkan id yang dipilih
        DB::table('tugas')->where('id', $id)->delete();

        // alihkan halaman ke halaman tugas
        return redirect('/tugas');
    }
}
