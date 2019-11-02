<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
//        new UserFactory(function($faker) {
//           $faker::
//        });

        $user = new \App\User();
        $user->first_name = "Jegede";
        $user->last_name = "umoke";
        $user->email = "user@user.com";
        $user->password = bcrypt('password');
        $user->email_verified_at = now();
        $user->save();
    }
}
