<?php

use Illuminate\Support\Str;
use Bitfumes\Multiauth\Model\Admin;
use Illuminate\Support\Facades\Hash;

/* @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(Admin::class, function (Faker\Generator $faker) {
    return [
        'first_name'           => $faker->name,
        'last_name'           => $faker->name,
        'email'          => $faker->unique()->safeEmail,
        'password'       => Hash::make('password'), //secret123
        'remember_token' => Str::random(10),
        'active'         => 1,
    ];
});
