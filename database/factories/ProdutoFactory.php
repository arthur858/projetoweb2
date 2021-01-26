<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\produto;
use Faker\Generator as Faker;

$factory->define(produto::class, function (Faker $faker) {
    return [
        //

    	    'data_validade' => $this->faker->word,
    	    'marca' => $this->faker->word,
    	    'nome' => $this->faker->word,
    ];
});
