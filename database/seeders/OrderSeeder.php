<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    public function run()
    {
        $orders = [
            [
                'order_id' => Str::uuid(),
                'email' => 'anna@example.com',
                'gender' => 'female',
                'birth_date' => '1990-03-15',
                'birth_time' => '14:30:00',
                'birth_city' => 'Москва',
                'amount' => 1500,
                'status' => 'new',
                'expires_at' => Carbon::now()->addDays(3),
                'created_at' => Carbon::now()->subDays(5),
                'updated_at' => Carbon::now(),
            ],
            [
                'order_id' => Str::uuid(),
                'email' => 'petr@example.com',
                'gender' => 'male',
                'birth_date' => '1988-07-22',
                'birth_time' => '08:15:00',
                'birth_city' => 'Санкт-Петербург',
                'amount' => 2100,
                'status' => 'paid',
                'expires_at' => Carbon::now()->addDays(3),
                'created_at' => Carbon::now()->subDays(4),
                'updated_at' => Carbon::now(),
            ],
            [
                'order_id' => Str::uuid(),
                'email' => 'maria@example.com',
                'gender' => 'female',
                'birth_date' => '1995-11-03',
                'birth_time' => '23:45:00',
                'birth_city' => 'Екатеринбург',
                'amount' => 1500,
                'status' => 'completed',
                'expires_at' => Carbon::now()->addDays(3),
                'created_at' => Carbon::now()->subDays(3),
                'updated_at' => Carbon::now(),
            ],
            [
                'order_id' => Str::uuid(),
                'email' => 'sergey@example.com',
                'gender' => 'male',
                'birth_date' => '1992-05-18',
                'birth_time' => '12:00:00',
                'birth_city' => 'Новосибирск',
                'amount' => 2100,
                'status' => 'new',
                'expires_at' => Carbon::now()->addDays(3),
                'created_at' => Carbon::now()->subDays(2),
                'updated_at' => Carbon::now(),
            ],
            [
                'order_id' => Str::uuid(),
                'email' => 'elena@example.com',
                'gender' => 'female',
                'birth_date' => '1993-09-27',
                'birth_time' => '03:20:00',
                'birth_city' => 'Казань',
                'amount' => 1500,
                'status' => 'paid',
                'expires_at' => Carbon::now()->addDays(3),
                'created_at' => Carbon::now()->subDay(),
                'updated_at' => Carbon::now(),
            ],
            [
                'order_id' => Str::uuid(),
                'email' => 'dmitry@example.com',
                'gender' => 'male',
                'birth_date' => '1987-12-10',
                'birth_time' => '16:45:00',
                'birth_city' => 'Краснодар',
                'amount' => 2100,
                'status' => 'completed',
                'expires_at' => Carbon::now()->addDays(3),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'order_id' => Str::uuid(),
                'email' => 'olga@example.com',
                'gender' => 'female',
                'birth_date' => '1991-04-05',
                'birth_time' => '19:30:00',
                'birth_city' => 'Сочи',
                'amount' => 1500,
                'status' => 'paid',
                'expires_at' => Carbon::now()->addDays(3),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        foreach ($orders as $order) {
            Order::create($order);
        }
    }
} 