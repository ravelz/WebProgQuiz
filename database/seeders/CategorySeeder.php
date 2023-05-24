<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\factory as Faker;
use Illuminate\Support\Facades\DB;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');
        $thisdate = $faker->date;
        for($i = 0; $i < 10; $i++){
            DB::table('categories')->insert([
                'id' => $i+1,
                'category' => $faker->domainWord,
                'created_at' => $thisdate,
                'updated_at' => $thisdate
            ]);
        }
    }
}
