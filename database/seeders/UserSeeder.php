<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Constants\UserRoles;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserSeeder extends CsvSeeder
{
    public $file = "csv/users.csv";
    public $table = "users";
    public $needTruncate = false;

    protected function beforeInsert($record)
    {
        $merged = array_merge($record, [
            'password' => Hash::make('robot04'),
            'email' => 'user_' . Str::random(8) . "@robot04.ru",
            'email_verified_at' => now(),
            'ref_key' => Str::random(8),
            'external_key' => Str::random(4),
            'remember_token' => Str::random(10),
            'role_id' => UserRoles::Student->value
        ]);
        return parent::beforeInsert($merged);
    }

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'id' => 1,
            'name' => 'System user',
            'email' => 'system-user@expertix.ru',
            'password' => 'systemuser',
            'phone' => '',
            'role_id' => UserRoles::System
        ]);

        User::factory()->create([
            'id' => 2,
            'name' => 'Admin user',
            'email' => 'admin-user@expertix.ru',
            'password' => 'adminuser',
            'phone' => '',
            'role_id' => UserRoles::Admin
        ]);

        User::factory()->create([
            'id' => 10,
            'name' => 'Test user',
            'email' => 'test1@test.com',
            'password' => '123456',
            'phone' => '',
            'role_id' => UserRoles::User
        ]);

        User::factory()->create([
            'id' => 11,
            'name' => 'Test student1',
            'email' => 'student1@test.com',
            'password' => '123456',
            'phone' => '',
            'role_id' => UserRoles::Student
        ]);

        User::factory()->create([
            'id' => 12,
            'name' => 'Test student2',
            'email' => 'student2@test.com',
            'password' => '123456',
            'phone' => '',
            'role_id' => UserRoles::Student
        ]);

        User::factory()->create([
            'id' => 15,
            'name' => 'Test teacher1',
            'email' => 'teacher1@test.com',
            'password' => '123456',
            'phone' => '',
            'role_id' => UserRoles::Teacher
        ]);

        User::factory()->create([
            'id' => 16,
            'name' => 'Test teacher2',
            'email' => 'teacher2@test.com',
            'password' => '123456',
            'phone' => '',
            'role_id' => UserRoles::Teacher
        ]);

        User::factory()->create([
            'id' => 17,
            'name' => 'Александр Печерский',
            'email' => 'ap@robot04.ru',
            'password' => '123456',
            'phone' => '',
            'role_id' => UserRoles::Teacher
        ]);
        User::factory()->create([
            'id' => 18,
            'name' => 'Павел',
            'email' => 'ps@robot04.ru',
            'password' => '123456',
            'phone' => '',
            'role_id' => UserRoles::Teacher
        ]);
        User::factory()->create([
            'id' => 19,
            'name' => 'Дмитрий Волосов',
            'email' => 'dv@robot04.ru',
            'password' => '123456',
            'phone' => '',
            'role_id' => UserRoles::Teacher
        ]);

        parent::run();
    }
}
