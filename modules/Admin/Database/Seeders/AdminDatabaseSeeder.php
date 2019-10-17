<?php

namespace Modules\Admin\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Admin\Models\Admin;

class AdminDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");
        $admin = new Admin();
        $admin->first_name = "peterson";
        $admin->last_name = "umoke";
        $admin->email = "admin@admin.com";
        $admin->password = bcrypt('password');
        $admin->email_verified_at = now();
        $admin->save();
    }
}
