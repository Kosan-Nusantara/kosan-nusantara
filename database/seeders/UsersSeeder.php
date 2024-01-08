<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Gilang',
            'username' => 'gilang',
            'email' => 'mgilangt@gmail.com',
            'password' => Hash::make('gilang'),
            'email_verified_at' => Carbon::now(),
        ]);
        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'admin',
            'username' => 'superadmin',
            'email' => 'admin@kosanusantara.com',
            'password' => Hash::make('superadmin123'),
            'email_verified_at' => Carbon::now(),
        ]);
        $user->assignRole('user');
    }
}
