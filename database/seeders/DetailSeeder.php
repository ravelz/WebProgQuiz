<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\factory as Faker;
use Illuminate\Support\Facades\DB;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $thisdate = $faker->date;
        for($i = 0; $i < 5; $i++){
            DB::table('details')->insert([
                'category_id' => $i+1,
                'books_id' => $i+6,
                'created_at' => $thisdate,
                'updated_at' => $thisdate
            ]);
            DB::table('details')->insert([
                'category_id' => $i+1,
                'books_id' => $i+1,
                'created_at' => $thisdate,
                'updated_at' => $thisdate
            ]);
        }
    }
}
