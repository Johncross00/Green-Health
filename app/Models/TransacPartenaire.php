<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransacPartenaire extends Model
{
    use HasFactory;
    protected $table = 'transac_partenaires';

    protected $fillable = ['partenaire_id', 'client_id', 'sommes', 'frais', 'identifiant'];

    public function partenaire()
    {
        return $this->belongsTo(Partenaire::class);
    }

    public function client()
    {
        return $this->belongsTo(PartenaireClient::class);
    }
}
