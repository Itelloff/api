<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DeliveryResource;
use Illuminate\Http\Request;
use App\Models\Delivery;
class DeliveryController extends Controller
{
    public function index(Request $request) // Стоимость доставки в определённую улицу
    {
        return DeliveryResource::collection(Delivery::all());
    }

}
