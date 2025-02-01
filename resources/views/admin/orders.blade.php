@extends('layouts.admin')

@section('title', 'Список заказов')

@section('content')
<h2 class="mb-4">Список заказов</h2>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Статус</th>
                <th>Сумма</th>
                <th>Дата создания</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->email }}</td>
                <td>
                    <span class="badge bg-{{ $order->status === 'paid' ? 'success' : 'warning' }}">
                        {{ $order->status === 'paid' ? 'Оплачен' : 'Новый' }}
                    </span>
                </td>
                <td>{{ number_format($order->amount, 2) }} руб.</td>
                <td>{{ $order->created_at->format('d.m.Y H:i') }}</td>
                <td>
                    <a href="{{ route('order.show', $order->order_id) }}" 
                       class="btn btn-sm btn-primary"
                       target="_blank">
                        Просмотр
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{ $orders->links() }}
@endsection 