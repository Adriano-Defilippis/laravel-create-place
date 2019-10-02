<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Employee;

$factory->define(Employee::class, function (Faker $faker) {
    return [
              "firstname" => $faker -> firstName,
              "lastname" => $faker -> lastName,
              "birthday" => $faker -> date,
              "jobTitle" => $faker -> jobTitle ,
              "salary" => $faker -> randomFloat(NULL, 500, 3000)
    ];
});
