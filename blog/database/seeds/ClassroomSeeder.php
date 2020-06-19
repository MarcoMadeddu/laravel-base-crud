<?php

use Illuminate\Database\Seeder;
use App\Classroom;
use Faker\Generator as Faker;
class ClassroomSeeder extends Seeder
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
            $newclass = new Classroom;
            $newclass->name = $faker->name();
            $newclass->number = $faker->numberBetween(1,40);
            $newclass->description = $faker->paragraph(3 , true);
            $newclass->save();
        }
    }
}
