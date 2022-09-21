<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UsuariosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nombre'=>$this -> faker-> name(),
            'foto'=>$this->faker->imageUrl(640,640),
            'estado'=>$this-> faker-> boolean(),
            'created_by'=>$this -> faker-> randomElement([1,3,4]),
            'updated_by'=>$this -> faker-> randomElement([1,3,4])
        ];
    }
}
