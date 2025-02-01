<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (!Auth::user()->is_admin) {
            abort(403, 'Доступ запрещен');
        }

        $orders = Order::orderBy('created_at', 'desc')->paginate(20);
        return view('admin.orders', compact('orders'));
    }
} 