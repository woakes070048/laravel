<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Entity::class, function(Faker\Generator $faker){
    return[
        'company' => $faker->company,
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName
    ];
});

$factory->define(App\Addres::class, function(Faker\Generator $faker){
    return[
        'company' => $faker->company,
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'address1' => $faker->address,
        'address2' => $faker->address,
        'postal_code' => $faker->postcode,
        'city' => $faker->city,
        'phone' => $faker->phoneNumber,
        'phone_mobile' => $faker->phoneNumber,
        'active' => true ];
});