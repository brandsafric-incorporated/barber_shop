<?php


use App\User;
use App\Service;
use App\Booking;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Booking::class, function (Faker $faker) {

    // creating fake service
    $title = 'Full Hair Cut';
    $description = "Great hair cut with latest fashion";
    $service = factory('App\Service')->create([
        'title' => $title,
        'description' => $description,
        'image_path' => '',
        'price' => 20
    ]);

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'mobile' => '1234567890',
        'barber_id' => factory('App\User')->create()->id,
        'service_id' => $service->id,
        'booking_date' => '2019-05-20',
        'timeslot' => 12,
        'status' => 0

    ];
});
