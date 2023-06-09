<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB; 

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Fesh milk 250ml',
                'price' => 250,
                'description' => 'Milk is the liquid produced by the mammary glands of mammals, including humans.',
                'image' => 'https://cdn.pixabay.com/photo/2016/12/06/18/27/milk-1887234__340.jpg'
            ],
            [
                'name' => '12 Egs',
                'price' => 6,
                'description' => 'a hard-shelled reproductive body produced by a bird and especially by domestic poultry. also : its contents used as food.',
                'image' => 'https://cdn.pixabay.com/photo/2016/07/23/15/24/egg-1536990__340.jpg'
            ],

        ]);
    }
    
}
