<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientiController extends Controller
{
    public function clienti()
    {
        return view('clienti-page', ["titolo" => "Clienti"]);
    }
}
