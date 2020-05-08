<?php

namespace App\Http\Controllers;

use App\Http\Resources\SaleResource;
use App\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{

    public function index()
    {
        $sale = Sale::all();
        return SaleResource::collection($sale);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $new_sale = Sale::create([
            'id'=>$request->id,
            'order_id'=>$request->order_id,
            'accumulated_value'=>$request->accumulated_value,
            'status'=>$request->status,
        ]);

        return new SaleResource($new_sale);
    }


    public function show(Sale $sale)
    {
        //
    }


    public function edit(Sale $sale)
    {
        //
    }


    public function update(Request $request, Sale $sale)
    {
        $sale = Sale::find($sale->id);
        $sale->fill($request->all())->save();

        return new SaleResource($sale);
    }


    public function destroy(Sale $sale)
    {
        $sale = Sale::find($sale->id);
        $sale->delete();

        return response()->json(['message'=>'Sale is fone']);
    }
}
