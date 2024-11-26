<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use carbon\Carbon;

class Coupon extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'code',
        'price',
        'date',
        'quantite',
    ];
    public function transactions()
    {
        return $this->hasMany(Trans::class, 'coupon_id', 'id');
    }
    public function status($transaction)
    {
        if ($transaction) {
            $date_bon = Carbon::parse($transaction->bon->date);
            $trans_date = Carbon::parse($transaction->created_at);
            if ($date_bon->lt($trans_date)) {
                return "Expire.";
            } else {
                return "Actif";
            }
        }
    }
    public static function recenserBonsMisAJour()
    {

        return self::whereColumn('updated_at', '!=', 'created_at')->get();
    }
    public static function totalQuantite()
    {
        $qte = self::sum('quantite');

        return $qte;
    }

    public function isValid(): bool
    {
        $now = now();
        return $this->status === 'active' &&
        $this->valid_from !== null &&
            $this->valid_to !== null &&
            $now->between($this->valid_from, $this->valid_to) &&
            $this->current_usage < $this->usage_limit;
    }

    public function incrementUsage(): void
    {
        if ($this->current_usage < $this->usage_limit) {
            $this->increment('current_usage');
            if ($this->current_usage >= $this->usage_limit) {
                $this->update(['status' => 'used']);
            }
        }
    }

    public function activate(): void
    {
        $this->update([
            'valid_from' => now(),
            'status' => 'active',
        ]);
    }
}
