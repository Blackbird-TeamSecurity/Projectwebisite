<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Topic;
$factory->define(Model::class, function (Faker $faker) {
    return [
        'title' => $fake->sentence,
        'content' => $faker->paragraph,
        'user_id' => factory('App/Topic')->create()        
    ];
});
