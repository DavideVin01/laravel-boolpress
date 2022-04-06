<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Generator as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // $user = new User();
        // $user->name = 'Davide Vinciguerra';
        // $user->email = 'davidevinciguerradv01@gmail.com';
        // $user->password = bcrypt('password');
        // $user->save();

        for ($i = 0; $i < 10; $i++) {
            $user = new User();
            $user->name = $faker->userName();
            $user->email = $faker->email();
            $user->password = bcrypt($faker->password());
            $user->save();
        }
    }
}
