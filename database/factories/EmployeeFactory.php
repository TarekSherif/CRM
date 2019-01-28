<?php

$factory->define(App\Employee::class, function (Faker\Generator $faker) {
    return [
        "f_name" => $faker->name,
        "l_name" => $faker->name,
        "email" => $faker->safeEmail,
        "phone" => $faker->name,
        "cid_id" => factory('App\Company')->create(),
    ];
});
