<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Container\Container;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::truncate();

         Container::getInstance()->get('auth')->user();

         User::create([
             'email' => 'admin@example.com',
             'password' => Hash::make('admin'),
             'name' => 'admin123'
         ]);

         User::factory(10)->create();
    }
}
