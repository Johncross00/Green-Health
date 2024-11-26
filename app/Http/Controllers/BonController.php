<?php

namespace App\Http\Controllers;

use App\Http\Services\CouponService;
use App\Http\Services\TransactionService;
use App\Models\Coupon;
use Illuminate\Http\Request;

class BonController extends Controller
{
    protected $couponService;
    protected $transService;
    public function __construct(
        CouponService $couponService,
        TransactionService $transService
    ) {
        $this->couponService = $couponService;
        $this->transService = $transService;
    }
    public function reseau_number(Request $request)
    {
        $request->validate([
            'reseau' => 'string|required'
        ]);
        return $this->couponService->reseau_number($request->all());
    }
    public function create()
    {
        $coupons = $this->couponService->list();
        $transactions = $this->transService->all();
        return view('coupons.create', compact('transactions', 'coupons'));
    }
    public function ravitailler()
    {
        $coupons = $this->couponService->list();
        return view('coupons.ravitailler', compact('coupons'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|unique:vouchers',
            'discount' => 'required|numeric|min:0',
            'valid_to' => 'required|date|after:today',
            'usage_limit' => 'required|integer|min:1',
        ]);

        return $this->couponService->create($request->all());
    }
    public function update(Request $request)
    {

        $request->validate([
            'code' => 'required|unique:vouchers',
            'discount' => 'required|numeric|min:0',
            'valid_to' => 'required|date|after:today',
            'usage_limit' => 'required|integer|min:1',
        ]);

        return $this->couponService->update($request->all());
    }
    public function ravita(Request $request)
    {

        $request->validate([
            'coupon_price' => 'required|string',
            'quantite' => 'required|integer',

        ]);
        //dd("--",$request);

        return $this->couponService->ravita($request->all());
    }
    public function getAll()
    {
        $coupons = $this->couponService->list();
        return view('coupons.list', compact('coupons'));
    }


    public function activate(Coupon $coupon)
    {
        $coupon->activate();
        return redirect()->route('vouchers.index')->with('success', 'Bon activé avec succès.');
    }
}
