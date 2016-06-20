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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
         'name' => 'budi',
            'email' => 'budi@gmail.com',
        'password' => bcrypt('pulojahe'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Remis::class, function (Faker\Generator $faker) {
    return [

        'denomasi' => $faker->numberBetween(100,1000),
        'jumlah_lebar' => $faker->numberBetween(100,1000),
        'total' => $faker->numberBetween(100,1000),
        'keterangan' => $faker->text,
    ];
});



      // $max =2000;

      //   $min=500;
      //   $a=rand()%(2000-500 + 1) + 500;

      //   $b=rand()%(max-min + 1) + min;
      //   $c=$a*$b;
      //   DB::table('remis')->insert([
      //       'denomasi' => $a,
      //       'jumlah_lebar' => $b,
      //       'total' => $c,
      //       'keterangan' => "IDR ",
      //   ]);
