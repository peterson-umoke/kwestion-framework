<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
            \Modules\Admin\Database\Seeders\AdminDatabaseSeeder::class,
            UserTableSeeder::class
        ]);
//        $user = new UserFactory::create;
    }
}
