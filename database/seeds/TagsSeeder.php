<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TagsSeeder extends Seeder
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
        for($x = 1; $x <= 40; $x++){
 
         // insert data dummy tags dengan faker
         DB::table('tags')->insert([
         'tag' => $faker->jobTitle,
         'article_id' => $faker->numberBetween(1,10)
         ]);
 
        }
    }
}
