<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperateurReseauController extends Controller
{
    public function index()
    {
        return view('operateurs.operateur_index');
    }
}
