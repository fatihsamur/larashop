<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Product');

        for ($i = 0; $i <= 50; $i++) {
            DB::table('products')->insert([
                'name' => $faker->word(),
                'description' => $faker->sentence(
                    $nbWords = 6,
                    $variableNbWords = true
                ),
                'price' => $faker->numberBetween(10, 100),
                'image_path' =>
                    "https://picsum.photos/200/200?random=" . mt_rand(1, 55000),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]);
        }
    }
}
