<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartenaireClient extends Model
{
    use HasFactory;
    protected $table = "partenaires_clients";

    protected $fillable = ['partenaire_id', 'transaction_id', 'interaction_date', 'notes', 'user_id'];

    public function partenaire()
    {
        return $this->belongsTo(Partenaire::class);
    }

    public function transaction()
    {
        return $this->belongsTo(TransacPartenaire::class);
    }

    public function transactions()
    {
        return $this->hasMany(TransacPartenaire::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
