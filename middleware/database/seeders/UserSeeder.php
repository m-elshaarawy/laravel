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
        User::create([
            'name'     =>'islam',
            'email'    =>'i@yahoo.com',
            'password' =>Hash::make('12345678'),
        ]);
        // User::create([
        //     'name'     =>'ahmed',
        //     'email'    =>'a@yahoo.com',
        //     'password' =>Hash::make('12345678'),
        // ]);
    }
}
