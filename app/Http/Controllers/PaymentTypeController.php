<?php

namespace App\Http\Controllers;

use App\Http\Resources\PaymentTypeResource;
use App\Payment_type;
use Illuminate\Http\Request;

class PaymentTypeController extends Controller
{

    public function index()
    {
        $payment_type = Payment_type::all();
        return PaymentTypeResource::collection($payment_type);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $new_payment_type = Payment_type::create([
            'id'=>$request->id,
            'description'=>$request->description,
            'status'=>$request->status,
        ]);

        return new PaymentTypeResource($new_payment_type);
    }


    public function show(Payment_type $payment_type)
    {
        //
    }


    public function edit(Payment_type $payment_type)
    {
        //
    }


    public function update(Request $request, Payment_type $payment_type)
    {
        $payment_type = Payment_type::find($payment_type->id);
        $payment_type->fill($request->all())->save();

        return new PaymentTypeResource($payment_type);
    }


    public function destroy(Payment_type $payment_type)
    {
        $payment_type = Payment_type::find($payment_type->id);
        $payment_type->delete();

        return response()->json(['message'=>'PaymentType is fone']);
    }
}
