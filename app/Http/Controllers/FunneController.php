<?php

namespace App\Http\Controllers;

use App\Funne;
use App\Http\Resources\FunneResource;
use Illuminate\Http\Request;

class FunneController extends Controller
{

    public function index()
    {
        $funne = Funne::all();
        return FunneResource::collection($funne);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $new_funne = Funne::create([
            'id'=>$request->id,
            'order_id'=>$request->order_id,
            'owner'=>$request->owner,
            'status'=>$request->status,
        ]);

        return new FunneResource($new_funne);
    }


    public function show(Funne $funne)
    {
        //
    }


    public function edit(Funne $funne)
    {
        //
    }


    public function update(Request $request, Funne $funne)
    {
        $funne = Funne::find($funne->id);
        $funne->fill($request->all())->save();

        return new FunneResource($funne);
    }


    public function destroy(Funne $funne)
    {
        $funne = Funne::find($funne->id);
        $funne->delete();

        return response()->json(['message'=>'Funne is fone']);
    }
}
