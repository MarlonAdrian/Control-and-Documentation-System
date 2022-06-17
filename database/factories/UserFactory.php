<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserFactory extends Factory
{

    public function definition()
    {
        return [
            'first_name' => '**************',
            'last_name' => '**************',
            'personal_phone' => '**************',
            'email' => '**************',
            'email_verified_at' => now(),
            'password' => Hash::make('**************'), // password
            'tipo_usuario' => '1',
            'state' => '1',
            'remember_token' => Str::random(10),
        ];
    }


    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}