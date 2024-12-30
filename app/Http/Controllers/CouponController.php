<?php
// app/Http/Controllers/CouponController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CouponController extends Controller
{
    public function showUserCoupons()
    {
        $user = Auth::user();
        $coupons = $user->coupons; // Assurez-vous que la relation est définie dans le modèle User

        return view('coupons.user_coupons', compact('coupons'));
    }
}
