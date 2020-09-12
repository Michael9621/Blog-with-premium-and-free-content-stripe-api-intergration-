<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Support\Str;
use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->realText(20);
    $slug = Str::slug($title);
    return [
        'user_id' => function(){return factory(App\User::class)->create()->id; },
        'title'=> $title,
        'slug'=>$slug,
        'image'=>$faker->imageUrl(1200, 600, 'animals'),
        'content'=>$faker->paragraphs(10, true),
        'premium'=>rand(0,1)
    ];
});
