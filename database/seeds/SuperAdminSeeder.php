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
            ->create(['email' => "super@app.com", 'first_name' => 'Peterson', 'last_name' => 'Umoke']);
        $role = factory(Role::class)->create(
            [
                'name' => "super",
                'title' => "Super Administrator",
                'description' => "The Super Administrator Role",
            ]
        );
        $admin->roles()->attach($role);
        factory(App\User::class, 2999)->create();
        factory(App\User::class)->create([
            'email' => 'user@app.com',
            'first_name' => 'David',
            'last_name' => 'Umoke',
        ]);
    }
}
