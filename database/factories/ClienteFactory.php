<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\cliente;
use Faker\Generator as Faker;

$factory->define(cliente::class, function (Faker $faker) {
    return 
    'nome' => $this->faker->word,
    'password' => $this->faker->word,
    'produto-id' => $this->faker->word,
    'funcionario_id'=> $this->faker->word,
    'endereco' => $this->faker->word,
    'CPF' => $this->faker->word,

        //
    ];
});
