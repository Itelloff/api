<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Controllers\Api\OrdersController;
use App\Models\Orders;
class OrderResource extends JsonResource
{
    public function toArray(Request $request)
    {


        return ([
            'name' => $this->name,
            'location' => $this->location,
            'house' => $this->house,
            'flat' => $this->flat,
            'product' => $this->product


        ]);

    }
}
