<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TeleponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // data faker indonesia
        $faker = Faker::create('id_ID');
 
        // membuat data dummy sebanyak 10 record
        for($x = 1; $x <= 10; $x++){
 
         // insert data dummy telepon dengan faker
         DB::table('telepon')->insert([
         'nomor_telepon' => $faker->numberBetween(1,10),
         'pengguna_id' => $faker->numberBetween(1,10)
         ]);
 
        }
    }
}
