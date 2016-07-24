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
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\PostModel::class, function (Faker\Generator $faker) {
    // $post_id = [1,2,3,4,5];
    $picture = [1,2,3,4,5];
    $category = ['Vietnam', 'Cambodia', 'Thai', 'Laos', 'Indonesia'];
    return [
        // 'id' => $faker->randomElement($post_id),
        'title' => $faker->name,
        'category' => $faker->randomElement($category),
        'description' => $faker->text,
        'picture' => $faker->randomElement($picture),
    ];
});

$factory->define(App\Models\PostTugModel::class, function (Faker\Generator $faker) {
    $post_id = [1,2,3,4,5];
    return [
        'post_id' => $faker->randomElement($post_id),
        'tug_name' => $faker->text,
    ];
});
