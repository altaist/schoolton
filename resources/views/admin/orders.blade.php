@extends('layouts.admin')

@section('title', 'Список заказов')

@section('content')
<h2 class="mb-4">Список заказов</h2>

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

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
                    @if($order->status === 'paid')
                        <button type="button" 
                                class="btn btn-sm btn-success" 
                                data-bs-toggle="modal" 
                                data-bs-target="#uploadModal{{ $order->id }}"
                                data-order-email="{{ $order->email }}">
                            Загрузить файл
                        </button>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{ $orders->links() }}

<!-- Модальные окна для каждого заказа -->
@foreach($orders as $order)
    @if($order->status === 'paid')
        <div class="modal fade" id="uploadModal{{ $order->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Загрузка файла для заказа #{{ $order->id }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('admin.orders.send-file') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <input type="hidden" name="order_id" value="{{ $order->id }}">
                            
                            <div class="mb-3">
                                <label for="email{{ $order->id }}" class="form-label">Email для отправки</label>
                                <input type="email" 
                                       class="form-control" 
                                       id="email{{ $order->id }}" 
                                       name="email" 
                                       value="{{ old('email', $order->email) }}" 
                                       required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="file{{ $order->id }}" class="form-label">Выберите файл</label>
                                <input type="file" 
                                       class="form-control" 
                                       id="file{{ $order->id }}" 
                                       name="file" 
                                       required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
                            <button type="submit" class="btn btn-primary">
                                Отправить
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif
@endforeach
@endsection 