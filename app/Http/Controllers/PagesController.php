<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    Public function home() {
        return view('test');
    }

    Public function about() {
        $vText = "This is about page";
        return view('about',['vText' => $vText]);
    }
}
