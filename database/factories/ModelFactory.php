<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'username' => $faker->unique()->userName,
        'password' => $password ?: $password = bcrypt('secret'),
        'email' => $faker->unique()->safeEmail,
        'full_name' => $faker->name,
        'phone' => $faker->phoneNumber,
        'is_admin' => $faker->numberBetween($min = 0, $max = 1),
        'is_active' => $faker->numberBetween($min = 0, $max = 1),
    ];
});

$factory->define(App\Guest::class, function (Faker\Generator $faker) {

    return [
        'full_name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber,
    ];
});

$factory->define(App\Place::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->city,
        'descript' => $faker->text,
    ];
});

$factory->define(App\Hotel::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->company,
        'address' => $faker->address,
        'star' => $faker->numberBetween($min = 1, $max = 5),
        'place_id' => $faker->numberBetween($min = 1, $max = 10),
    ];
});

$factory->define(App\Room::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->unique()->randomLetter,
        //randomElements($array = array ('a','b','c'), $count = 1) ,
        'hotel_id' => $faker->numberBetween($min = 1, $max = 10),
        'descript' => $faker->text,
        'price' => $faker->numberBetween($min = 1, $max = 10),
        // 'size' => $faker->,
        'total' => $faker->numberBetween($min = 1, $max = 20),
        // 'bed' => $faker->,
        // 'direction' => $faker->,
        'max_guest' => $faker->numberBetween($min = 1, $max = 10),
    ];
});

$factory->define(App\Reservation::class, function (Faker\Generator $faker) {

    return [
        'status' => $faker->numberBetween($min = 1, $max = 3),
        //randomElements($array = array ('a','b','c'), $count = 1) ,
        'room_id' => $faker->numberBetween($min = 1, $max = 10),
        'target' => $faker->numberBetween($min = 0, $max = 1) == 0 ?'user': 'guest',
        'target_id' => $faker->numberBetween($min = 1, $max = 10),
        'quantity' => $faker->numberBetween($min = 1, $max = 20),
        'checkin_date' => $faker->date($format = 'Y-m-d', $max = '2016-2-20'),
        'checkout_date' => $faker->date($format = 'Y-m-d', $max = '2016-3-23'),
    ];
});

$factory->define(App\News::class, function (Faker\Generator $faker) {

    return [
        'title' => $faker->sentence,
        'content' => $faker->text,
        'category_id' => $faker->numberBetween($min = 1, $max = 2),
    ];
});

$factory->define(App\Feedback::class, function (Faker\Generator $faker) {

    return [
        'full_name' => $faker->name,
        'email' => $faker->email,
        'content' => $faker->text,
    ];
});

$factory->define(App\RatingComment::class, function (Faker\Generator $faker) {

    return [
        'food' => $faker->numberBetween($min = 0, $max = 10),
        'cleanliness' => $faker->numberBetween($min = 0, $max = 10),
        'comfort' => $faker->numberBetween($min = 0, $max = 10),
        'location' => $faker->numberBetween($min = 0, $max = 10),
        'service' => $faker->numberBetween($min = 0, $max = 10),
        'total_rating' => $faker->numberBetween($min = 0, $max = 10),
        'hotel_id' => $faker->numberBetween($min = 1, $max = 10),
        'user_id' => $faker->numberBetween($min = 1, $max = 10),
    ];
});

$factory->define(App\HotelService::class, function (Faker\Generator $faker) {

    return [
        'hotel_id' => $faker->numberBetween($min = 1, $max = 10),
        'service_id' => $faker->numberBetween($min = 1, $max = 5),
    ];
});