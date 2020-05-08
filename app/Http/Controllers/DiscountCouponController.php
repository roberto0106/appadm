<?php

namespace App\Http\Controllers;

use App\Discount_coupon;
use App\Http\Resources\DiscountCouponResource;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class DiscountCouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discount_coupon = Discount_coupon::all();
        return DiscountCouponResource::collection($discount_coupon);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_discount_coupon = Discount_coupon::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'status'=>$request->status,
            'expire_in'=>$request->expire_in
        ]);

        return new DiscountCouponResource($new_discount_coupon);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Discount_coupon  $discount_coupon
     * @return \Illuminate\Http\Response
     */
    public function show(Discount_coupon $discount_coupon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Discount_coupon  $discount_coupon
     * @return \Illuminate\Http\Response
     */
    public function edit(Discount_coupon $discount_coupon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Discount_coupon  $discount_coupon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Discount_coupon $discount_coupon)
    {
        $discount_coupon = Discount_coupon::find($discount_coupon->id);
        $discount_coupon->fill($request->all())->save();

        return new DiscountCouponResource($discount_coupon);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Discount_coupon  $discount_coupon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discount_coupon $discount_coupon)
    {
        $discount_coupon = Discount_coupon::find($discount_coupon->id);
        $discount_coupon->delete();
        return response()->json(['message' => 'Coupon is gone',]);
    }
}
