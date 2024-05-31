<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TalleresController extends Controller
{
    public function show($taller)
    {
        return view('talleres.' . $taller);
    }
}