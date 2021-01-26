<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\funcionario;
use Faker\Generator as Faker;

$factory->define(funcionario::class, function (Faker $faker) {
    return [

    	    'username' => $this->faker->word,
    	    'nome' => $this->faker->word,
    	    'password'=> $this->faker->word,
    	    'data_nascimento'=> $this->faker->word,


        //
    ];
});
