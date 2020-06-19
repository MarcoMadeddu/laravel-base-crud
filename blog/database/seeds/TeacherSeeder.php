<?php

use Illuminate\Database\Seeder;
use App\Teacher;
use Faker\Generator as Faker;
class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //faker
        $records=10;

        for ($i = 0; $i < $records; $i++) { 

            //random gender
            $gender= $faker->randomElement(['male', 'female']);
            $genderShort = ($gender=='male') ? 'm' : 'f';

            $newteacher = new Teacher;
            $newteacher->name = $faker->name($gender);
            $newteacher->age = $faker->numberBetween(20 , 50);
            $newteacher->save();
        }
    }
}
