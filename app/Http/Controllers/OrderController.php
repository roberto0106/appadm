<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderResource;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $order = Order::all();
        return OrderResource::collection($order);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $new_order = Order::create([
            'id'=>$request->id,
            'customer_id'=>$request->customer_id,
            'delivery_address'=>$request->delivery_address,
            'payment_types_id'=>$request->payment_types_id,
            'discount_coupons_id'=>$request->discount_coupons_id,
            'category_id'=>$request->category_id,
            'product_id'=>$request->product_id,
            'amount'=>$request->amount,
            'price'=>$request->price,
            'status'=>$request->status
        ]);

        return new OrderResource($new_order);
    }


    public function show(Order $order)
    {
        //
    }


    public function edit(Order $order)
    {
        //
    }


    public function update(Request $request, Order $order)
    {
        $order = Order::find($order->id);
        $order->fill($request->all())->save();

        return new OrderResource($order);
    }


    public function destroy(Order $order)
    {
        $order = Order::find($order->id);
        $order->delete();

        return response()->json(['message'=>'Order is fone']);
    }
}
