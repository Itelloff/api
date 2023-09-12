<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use Illuminate\Http\Request;
use App\Models\Orders;
class OrdersController extends Controller
{
    public function index() // "Получение списка заказов"
    {
        return OrderResource::collection(Orders::all());
    }

    public function store(Request $request) // "Создание заказа"
    {
        $create_orders = Orders::create($request->all());
        return new OrderResource($create_orders);
    }

    public function show(string $id) // "Получение информации о заказе"
    {
        return new OrderResource(Orders::find($id));
    }

}

