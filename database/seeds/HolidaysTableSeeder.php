<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Holiday;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 100; $i++){
            $holiday = new Holiday();
            //
            $holiday->guests = $faker->numberBetween(1, 100);
            $holiday->dicount_code = $faker->regexify('[A-Z]{2}[0-9]{3}');
            $holiday->price = $faker->randomFloat(2, 50, 5000);
            $holiday->confirmed = $faker->numberBetween(0, 1);
            $holiday->address = $faker->streetAddress();
            $holiday->post_code = $faker->postcode();
            $holiday->city = $faker->city();
            $holiday->country = $faker->country();
            $holiday->description = $faker->sentence(70);
            //
            $holiday->save();
        }
    }
}
