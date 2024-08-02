<?php

namespace App\Services\Market;

use App\Models\Order;
use App\Services\BaseService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class OrderService extends BaseService
{
    public function getOrder($orderId)
    {
        return Order::findOrFail($orderId);
    }

    public function getOrdersForUser(int $userId)
    {
        return Order::forUser($userId)->get();
    }

    public function getOrdersForState(int $state)
    {
        return Order::forState($state)->get();
    }

    public function getOrderCollection(Request $request)
    {
        return Order::with(['user', 'orderable'])->query()
            ->forUser($request->input('user_id'))
            ->forState($request->input('state'))
            ->dateFrom($request->input('date_from'))
            ->dateTo($request->input('date_to'))
            ->get();
    }

    public function createFromRequest()
    {
        $request = request();
        // dd($request->all());
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'orderable_id' => 'required|numeric',
            'orderable_type' => 'string',
            'price_id' => 'sometimes|numeric',
            'price' => 'required|numeric'
        ]);

        $orderableType = $request->input('orderable_type', 'course');
        $orderableid = $request->input('orderable_id');
        $price = $request->input('price');
        $priceid = $request->input('price_id');


        //$data = array_combine(['orderable_type', 'orderable_id', 'price_id', 'price'], [$orderableType, $orderableId, $priceId, $price]);
        $data = $request->only(['user_id', 'orderable_type', 'orderable_id', 'price_id', 'price']);
        //dd($data);
        return $this->createOrder($data);
    }

    public function createOrder(array $data)
    {
        return Order::create($data);
    }

    public function updateState(int $orderId, int $state)
    {
        $order = $this->getOrder($orderId);;
        $order->state = $state;
        $order->save();
        return $order;
    }

}
