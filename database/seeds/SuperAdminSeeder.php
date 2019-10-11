<?php

use Bitfumes\Multiauth\Model\Admin;
use Bitfumes\Multiauth\Model\Role;
use Illuminate\Database\Seeder;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin  = factory(Admin::class)
            ->create(
                [
                    'first_name' => 'Peterson',
                    'last_name' => 'Umoke',
                    'email' => "super@app.com",
                ]
            );
        $role = factory(Role::class)->create(
            [
                'name' => "super",
                'title' => "Super Administrator",
                'description' => "The Super Administrator Role",
            ]
        );
        $adminrole = factory(Role::class)->create(
            [
                'name' => "admin",
                'title' => "Administrator",
                'description' => "The Administrator Role",
            ]
        );
        $admin->roles()->attach($role);
        factory(App\User::class, 9)->create();
        factory(App\User::class)->create([
            'email' => 'user@app.com',
            'first_name' => 'David',
            'last_name' => 'Umoke',
        ]);
    }
}
