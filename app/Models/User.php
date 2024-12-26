<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Bavix\Wallet\Exceptions\InsufficientFunds;
use Bavix\Wallet\Traits\HasWallet;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Builder;
use Laravel\Sanctum\HasApiTokens;
use carbon\Carbon;
use Illuminate\Support\Collection;
use Bavix\Wallet\Interfaces\Wallet;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable implements Wallet
{
    use HasApiTokens, HasFactory, Notifiable;

    use HasFactory, HasWallet;
    protected $fillable = [
        'id',
        'nom',
        'prenom',
        'date_naissance',
        'region',
        'pseudo',
        'invitant',
        'ville',
        'commune',
        'quartier',
        'numwhats',
        'reseau1',
        'reseau2',
        'numero_reseau',
        'email',
        'password',
        'referral_code',
        'gain',
        'daily_percent',
        'daily_percent_updated_at',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function referrer()
    {
        return $this->belongsTo(User::class, 'invitant', 'referral_code');
    }

    // Relationship to get all users referred by the current user
    public function referrals()
    {
        return $this->hasMany(User::class, 'invitant', 'referral_code');
    }
    public function trans()
    {

        return $this->hasMany(Trans::class, 'user_id');
    }
    public function updateDailyPercent($newPercent)
    {
        $today = Carbon::today();

        if (!$this->daily_percent_updated_at || Carbon::parse($this->daily_percent_updated_at)->lt($today)) {
            $this->daily_percent = 0;
            $this->daily_percent_updated_at = $today;
        }

        $this->daily_percent += $newPercent;
        $this->save();
    }
    // Dans le modèle User


    public function referralsWithinFiveLevels()
    {
        return $this->referralsLevel(5);
    }

    public function referralsLevel($level, $currentLevel = 1)
    {
        if ($currentLevel > $level) {
            return $this->referrals();
        }

        return $this->referrals()->with(['referrals' => function ($query) use ($level, $currentLevel) {
            $query->with(['referrals' => function ($query) use ($level, $currentLevel) {
                $this->addNestedReferrals($query, $level, $currentLevel + 1);
            }]);
        }]);
    }

    private function addNestedReferrals($query, $level, $currentLevel)
    {
        if ($currentLevel < $level) {
            $query->with(['referrals' => function ($query) use ($level, $currentLevel) {
                $this->addNestedReferrals($query, $level, $currentLevel + 1);
            }]);
        }
    }



    public static function getUsersRegisteredCurrentMonth()
    {
        return self::whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->get();
    }

    // public function operateur()
    // {
    //     return $this->belongsTo(Operator::class, 'id');
    // }
    // public function operateur()
    // {
    //     return $this->hasOne(Operator::class, 'user_id');
    // }

    public function operateur()
    {
        return $this->hasOne(Operator::class);
    }

    public function partenaire()
    {
        return $this->hasOne(Partenaire::class);
    }

    public function client()
    {
        return $this->belongsTo(OperatorClient::class, 'id');
    }


    public function getWalletBalanceAttribute()
    {
        return $this->wallet->balance;
    }


    public function getUsedBonsCountAttribute()
    {
        return $this->transactions->filter(function ($trans) {
            return $trans->bon && Carbon::parse($trans->bon->date)->lt(Carbon::now());
        })->count();
    }
}
