<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reviews')->insert([
            [
                'name' => 'John Doe',
                'content' => 'Amazing boba! Loved the tapioca pearls.',
                'rating' => 5,
                'boba_id' => 1
            ],
            [
                'name' => 'Jane Smith',
                'content' => 'Standard taste, exactly what it sounds like but still good.',
                'rating' => 4,
                'boba_id' => 2
            ],
            [
                'name' => 'Sam Lee',
                'content' => 'Loved the banana flavor, will order again!',
                'rating' => 5,
                'boba_id' => 3
            ],
        ]);
    }
}
