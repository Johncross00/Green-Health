<?php
namespace App\Http\Repositories;

use App\Models\Trans;
use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class TransactionRepository {

    public function create(array $data) {
        return Transaction::create($data);
    }

    public function all() {
        
        return Trans::all();
    }
    public function qteV(){
        return Trans::qteV();
        
    }
    public function ventes(){
        return Trans::ventesMoisCourant();
        
    }
    public function BonsMoisCourant(){
        return Trans::BonsMoisCourant();
        
    }
}