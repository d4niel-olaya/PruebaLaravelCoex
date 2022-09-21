<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductosFactory extends Factory
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
            'nombre'=> $this -> faker ->word(),
            'descripcion'=>$this -> faker -> paragraph(),
            'estado'=>$this -> faker -> boolean(),
            'created_by'=>$this -> faker-> randomElement([1,2,34]),
            'updated_by'=>$this -> faker-> randomElement([1,2,34]),

        ];
    }
}
