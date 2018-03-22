]<?php
/**
 * Created by PhpStorm.
 * User: hiro
 * Date: 2018/03/22
 * Time: 17:35
 */
$factory->define(App\Link::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->name,
        'url' => $faker->url,
        'description' => $faker->paragraph,
    ];
});