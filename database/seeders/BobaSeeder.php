<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BobaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bobas')->insert(['name' => 'Chocolate Deluxe', 'liquid' => 'Chocolate Milk Tea', 'cupSize' => 'Small', 'temperature' => 'Cold', 'topping' => 'Pearls', 'sugarLevel' => 'Regular', 'iceLevel' => 'Regular']);
        DB::table('bobas')->insert(['name' => 'Warm Oat Milk Tea', 'liquid' => 'Organic Oat Milk', 'cupSize' => 'Regular', 'temperature' => 'Hot', 'topping' => 'Coconut Jelly', 'sugarLevel' => 'None', 'iceLevel' => 'None']);
        DB::table('bobas')->insert(['name' => 'Hot Banana Milk Tea', 'liquid' => 'Banana Milk Tea', 'cupSize' => 'Large', 'temperature' => 'Hot', 'topping' => 'Aloe Vera', 'sugarLevel' => 'Less', 'iceLevel' => 'Regular']);
    }
}
