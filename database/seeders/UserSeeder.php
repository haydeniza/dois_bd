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
     */
    public function run(): void
    {
        if(!User::where('email', 'cesar@gmail.com.br')->first()){
            User::create([
                'name' => 'Cesar',
                'email' => 'cesar@gmail.com.br',
                'password' => Hash::make('123456a', ['rounds'=> 12])
            ]);
        }
        if(!User::where('email', 'jose@gmail.com.br')->first()){
            User::create([
                'name' => 'jose',
                'email' => 'jose@gmail.com.br',
                'password' => Hash::make('123456b', ['rounds'=> 12])
            ]);
        }
        if(!User::where('email', 'eva@gmail.com.br')->first()){
            User::create([
                'name' => 'eva',
                'email' => 'eva@gmail.com.br',
                'password' => Hash::make('123456c', ['rounds'=> 12])
            ]);
        }
    }
}
