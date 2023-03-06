<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fattureController extends Controller
{
    public function fatture()
    {
        return view('fatture-page', ["titolo" => "Fatture"]);
    }
}
