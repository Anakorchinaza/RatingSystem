<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\review;
use App\Models\User;
use App\Models\Product;
use Faker\Factory as Faker;

class RatingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Retrieve all users and products
        $users = User::pluck('id');
        $products = Product::pluck('id');

        // Generate dummy ratings
        foreach (range(1, 50) as $index) {
            review::create([
                'user_id' => $faker->randomElement($users),
                'product_id' => $faker->randomElement($products),
                'star_rating' => $faker->numberBetween(1, 5),
                'comments' => $faker->text(20),
            ]);
        }
    
    }
}
