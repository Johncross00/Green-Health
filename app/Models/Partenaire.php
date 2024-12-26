<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partenaire extends Model
{
    use HasFactory;
    protected $table = "partenaires";

    protected $fillable = ['user_id', 'image', 'balance', 'commissions', 'identifiant', 'status', 'location'];

    public function transactions()
    {
        return $this->hasMany(TransacPartenaire::class);
    }

    public function clients()
    {
        return $this->hasMany(PartenaireClient::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
