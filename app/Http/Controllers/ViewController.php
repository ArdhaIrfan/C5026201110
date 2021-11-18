<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function showForm()
    {
        //code untuk meload data yg akan dimuat di form
        return view('showgreetings');
    }

    function resultGreetings()
    {
        //code untuk meload data yg akan dimuat di form
        return view('tugas');
    }

    function formETS()
    {
        //code untuk meload data yg akan dimuat di form
        return view('C_5026201110_D');
    }

    function successful()
    {
        //code untuk meload data yg akan dimuat di form
        return view('uts_register_successful');
    }

    function tugasPHP()
    {
        //code untuk meload data yg akan dimuat di form
        return view('phptugas1');
    }

}
