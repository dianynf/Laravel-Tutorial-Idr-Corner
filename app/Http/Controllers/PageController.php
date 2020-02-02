<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        $nama = "dian bugas";
        $hobi = "bola";
        //cara pertama
        // return view('about')
        //             ->with('nama',$nama)
        //             ->with('hobi', $hobi);
        // cara ke 2
        // return view('about')
        //             ->withNama($nama)
        //             ->withHobi($hobi);
        // cara ke 3 
        return view('about', compact('nama', 'hobi'));
    }

    public function galeri()
    {
        return view('geleri');
    }
}
