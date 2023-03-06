<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ordiniController extends Controller
{
    public function ordini()
    {
        return view('ordini-page', ["titolo" => "Ordini"]);
    }
}
