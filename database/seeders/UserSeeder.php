<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = config('user_seeder');

        foreach ($users as $user) {
            if (!User::where('email', $user['email'])->exists()) {
                $user['password'] = Hash::make($user['password']);
                $user = User::create($user);
            }
        }
    }
}
