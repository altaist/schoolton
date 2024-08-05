<?php

namespace App\Services\Market;

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
            'json_data' => data_get($validated, 'json_data', 0),
        ];

        return Order::create($fields);
    }

    public function createFromRequest1()
    {
        $request = request();
        dd($request->all());

        $userId = $request->input('user.user_id');
        if($userId === null && $request->input('autocreate')){
            $user = UserService::make()->createUserFromRequest($request->user ?? [], true);
            $request->merge(['user_id'=>$user->id]);
        }

        $request->validate([
            'user.user_id' => 'required|exists:users,id',
            'product.orderable_id' => 'required|numeric',
            'product.orderable_type' => 'string',
            'price_id' => 'sometimes|numeric',
            'price' => 'required|numeric'
        ]);

        $data = [
            'user_id' => $request->user->id
        ];

        $orderableType = $request->input('orderable_type', 'course');

        //$data = array_combine(['orderable_type', 'orderable_id', 'price_id', 'price'], [$orderableType, $orderableId, $priceId, $price]);
        $data = $request->only(['user_id', 'orderable_id', 'price_id', 'price']);
        $data['orderable_type'] = $orderableType;
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
