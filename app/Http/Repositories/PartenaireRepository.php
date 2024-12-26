<?php

namespace App\Http\Repositories;

use Illuminate\Http\Request;
use App\Models\Partenaire;
use App\Models\PartenaireClient;
use App\Models\TransacPartenaire;
use App\Models\Caisse;
use Illuminate\Support\Facades\Auth;

class PartenaireRepository
{

    public function create(array $data)
    {
        return Partenaire::create($data);
    }
    public function caisse(array $data)
    {
        return Caisse::create($data);
    }
    public function createClient(array $data)
    {
        return PartenaireClient::create($data);
    }
    public function createTransaction(array $data)
    {
        return TransacPartenaire::create($data);
    }
    public function transactions()
    {
        return TransacPartenaire::all();
    }
    public function transaction($id)
    {
        return TransacPartenaire::find($id);
    }

    public function partenaires()
    {
        return Partenaire::all();
    }
    public function update($id, array $data)
    {
        $partenaire = $this->getById($id);
        return $partenaire->update($data);
    }
    public function getById($id)
    {
        return Partenaire::find($id);
    }
    public function getByIdentifiant($ide)
    {
        return Partenaire::where('identifiant', $ide)->firstOrFail();
    }
}
