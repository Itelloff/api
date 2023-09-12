<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Controllers\Api\OrdersController;
use App\Models\Orders;
class DeliveryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request){


       return ([
           'location' => $this -> location,
            'price' => $this -> price

       ]);
}
}
