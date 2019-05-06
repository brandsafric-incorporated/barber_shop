<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use App\Service;
use Faker\Generator as Faker;

$factory->define(Service::class, function (Faker $faker) {
  return [
      'title' => $faker->name
  ];
});
