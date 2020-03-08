<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Contact;
use Faker\Generator as Faker;

//fungsi factory dan suder adalah untuk membuat data secara banyak untuk mencoba aplikasi kita cuama untuk mengembangkan aplikasi tidak perlu data2
$factory->define(Contact::class, function (Faker $faker) {
    return [
        'nama' => $faker->name,
        'alamat' => $faker->address,
        'tlp' => $faker->phoneNumber,
    ];
});
