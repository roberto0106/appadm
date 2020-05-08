<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'customer_id'=>$this->customer_id,
            'delivery_address'=>$this->delivery_address,
            'payment_types_id'=>$this->payment_types_id,
            'discount_coupons_id'=>$this->discount_coupons_id,
            'category_id'=>$this->category_id,
            'product_id'=>$this->product_id,
            'amount'=>$this->amount,
            'price'=>$this->price,
            'status'=>$this->status
        ];
    }
}
