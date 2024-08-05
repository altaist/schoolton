<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\Market\OrderService;
use Illuminate\Http\Request;

class OrderController extends BaseController
{
    public function show(int $orderId)
    {
        $order = $this->getItem($orderId);
        return $this->inertia('Order', [$order]);
    }
    public function index(Request $request)
    {
        $collection = $this->getCollection($request);
        return $this->inertia('OrderList', [$collection]);
    }

    public function getItem(int $orderId)
    {
        $orderService = OrderService::make();
        return $orderService->getOrder($orderId);
    }

    public function getCollection(Request $request)
    {
        $orderService = OrderService::make();
        return $orderService->getOrderCollection($request);
    }

    public function getOrdersForUser(Request $request, User $user)
    {
        $orderService = OrderService::make();
        return $orderService->getOrdersForUser($user);
    }

    public function store()
    {
        $orderService = OrderService::make();
        return response()->json($orderService->createFromRequest());
    }


    public function updateState($orderId, $stateId)
    {
        $orderService = OrderService::make();
        return $orderService->updateState($orderId, $stateId);
    }

}
