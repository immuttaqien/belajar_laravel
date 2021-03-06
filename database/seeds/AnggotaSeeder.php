<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AnggotaSeeder extends Seeder
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
        for($x = 1; $x <= 5; $x++){
 
         // insert data dummy anggota dengan faker
         DB::table('anggota')->insert([
         'nama' => $faker->name
         ]);
 
        }
    }
}
