<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\PartenaireService;

class PartenaireController extends Controller
{
    protected $partenaire;

    public function __construct(PartenaireService $service)
    {
        $this->partenaire = $service;
    }

    public function create()
    {
        return view('partenaires.create');
    }

    public function activer(Request $request)
    {
        return $this->partenaire->activer($request->all());
    }

    public function deactiver(Request $request)
    {
        return $this->partenaire->deactiver($request->all());
    }

    public function partenaires()
    {
        $partenaires = $this->partenaire->partenaires();
        return view('partenaires.list', compact('partenaires'));
    }

    public function post_partenaire(Request $request)
    {
        $request->validate([
            'localite' => 'string|required',
        ]);
        return $this->partenaire->create($request->all());
    }

    public function info()
    {
        return view('partenaires.info');
    }

    public function coin_balance()
    {
        return view('partenaires.chargement');
    }

    public function chargement(Request $request)
    {
        $request->validate([
            'identifiant' => 'required|string',
            'valeur' => 'string|required',
        ]);
        return $this->partenaire->chargement($request->all());
    }

    public function update_partenaire_localite(Request $request)
    {
        $request->validate([
            'location' => 'required|string',
        ]);
        return $this->partenaire->update($request->all());
    }

    public function cash(Request $request)
    {
        $request->validate([
            'sommes' => 'string|required',
            'identifiant' => 'string|required',
        ]);
        return $this->partenaire->cash($request->all());
    }
}
