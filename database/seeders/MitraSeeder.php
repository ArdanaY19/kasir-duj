<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class MitraSeeder extends Seeder
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
            DB::table('mitras')->insert([
                "nama" => $faker->name,
                "alamat" => $faker->address,
                "no_hp" => $faker->phoneNumber
            ]);
        };
    }
}
