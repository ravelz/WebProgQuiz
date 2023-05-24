<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\factory as Faker;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
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
        for($i = 0; $i < 10; $i++){
            DB::table('publishers')->insert([
                'id' => $i+1,
                'name' => $faker->name,
                'imgurl' => 'https://d1b14unh5d6w7g.cloudfront.net/1098748859.01.S001.LXXXXXXX.jpg?Expires=1684984061&Signature=XhX-SgmZY6IN3QaPIRnbVHoi-cqCeO5bxRGyY7FeOctCZK7ACA7I5dq4uFEq-4-cWgYk2TgTNAFFHeDtqeTl3AKr7MAucQwoOuTWih9v95dNR55YE2GvGMl~6m7Fkf5wG3WAcvrq1b5qJqaAJl~Asqr3bCCJkEDPwWvWpZ5RWU4_&Key-Pair-Id=APKAIUO27P366FGALUMQ',
                'address' => $faker->address,
                'phone' => $faker->phoneNumber,
                'email' => $faker->email,
                'created_at' => $thisdate,
                'updated_at' => $thisdate
            ]);
        }
    }
}
