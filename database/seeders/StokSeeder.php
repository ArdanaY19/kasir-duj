<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 10; $i++){
            DB::table('stoks')->insert([
                "produk" => $faker->randomElement([
                    "kaos",
                    "celana",
                    "topi"
                ]),
                "harga_grosir" => $faker->numberBetween(15000, 60000),
                "harga_retail" => $faker->numberBetween(20000, 80000),
                "center" => $faker->company,
                "stok" => $faker->numberBetween(10, 25)
            ]);
        };
    }
}
