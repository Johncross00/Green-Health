<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartenaireCommercialController extends Controller
{
    public function index()
    {
        return view('partenaires.partenaire_index');
    }
}
