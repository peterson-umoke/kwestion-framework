<?php

namespace Modules\Admin\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Admin\Models\Admin;
use Modules\Admin\Models\Role;
use Modules\Admin\Models\User;

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

        $role = new Role();
        $role->name = "admin";
        $role->description = "Administrator";
        $role_id = $role->save();

        // sync the role to the admin
        $admin->roles()->sync([$role_id]);

        $user = new User();
        $user->first_name = "Jegede";
        $user->last_name = "umoke";
        $user->email = "user@user.com";
        $user->password = bcrypt('password');
        $user->email_verified_at = now();
        $user->username = "user";
        $user->save();

        // sync the role to the user
        $user->roles()->sync([$role_id]);
    }
}
