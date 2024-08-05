<?php

namespace App\Services\Market;

use App\Constants\OrderState;
use App\Models\Order;
use App\Models\User;
use App\Services\BaseService;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class OrderService extends BaseService
{
    public function getOrder($orderId)
    {
        return Order::findOrFail($orderId);
    }

    public function getOrdersForUser(User $user, OrderState $state = null)
    {
        return Order::forUser($user->id)->forState($state)->get();
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
        return $this->createFromArray(request()->all());
    }

    public function createFromArray($requestData)
    {

        $userId = data_get($requestData, 'user.id');

        if($userId === null && data_get($requestData, 'autocreate')){
            $user = UserService::make()->createUserFromArray(data_get($requestData, 'user'), true);
            $requestData['user']['id'] = $user->id;
        }elseif($userId){
            UserService::make()->updateUserFromArray($userId, data_get($requestData, 'user'));
        }

        // dd($requestData);

        $validated = Validator::make($requestData, [
            'user.id' => 'required|exists:users,id',
            'product.id' => 'required|numeric|poly_exists:product.type',
            'product.type' => 'string',
            'priceId' => 'sometimes|numeric',
            'price' => 'sometimes|numeric',
            'state' => 'sometimes|numeric',
            'json_data' => 'nullable|array'
        ], [
            'product.id' => "Неверный код товара"
        ])->validate();

        $fields = [
            'user_id' => data_get($validated, 'user.id'),
            'orderable_id' => data_get($validated, 'product.id'),
            'orderable_type' => data_get($validated, 'product.type'),
            'price_id' => data_get($validated, 'product.priceId'),
            'price' => data_get($validated, 'product.price', 0),
            'state' => data_get($validated, 'state', 0),
            'json_data' => data_get($validated, 'json_data', 0),
        ];

        return Order::create($fields);
    }

    public function updateFromArray(Order $order, $requestData)
    {

        $validated = Validator::make($requestData, [
            'user.id' => 'required|exists:users,id',
            'product.id' => 'required|numeric|poly_exists:product.type',
            'product.type' => 'string',
            'priceId' => 'sometimes|numeric',
            'price' => 'sometimes|numeric',
            'state' => 'sometimes|numeric',
            'json_data' => 'nullable|array'
        ], [
            'product.id' => "Неверный код товара"
        ])->validate();

        $fields = [
            'user_id' => data_get($validated, 'user.id'),
            'orderable_id' => data_get($validated, 'product.id'),
            'orderable_type' => data_get($validated, 'product.type'),
            'price_id' => data_get($validated, 'product.priceId'),
            'price' => data_get($validated, 'product.price', 0),
            'state' => data_get($validated, 'state', 0),
            'json_data' => data_get($validated, 'json_data', 0),
        ];

        return $order->update($fields);
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
