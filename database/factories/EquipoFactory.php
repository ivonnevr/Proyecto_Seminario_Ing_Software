<?php

namespace Database\Factories;

use App\Models\Equipo;
use Illuminate\Database\Eloquent\Factories\Factory;

class EquipoFactory extends Factory
{
    protected $model = Equipo::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'telefono' => $this->faker->phoneNumber(),
            'correo' => $this->faker->unique()->safeEmail(),
            'fecha' => $this->faker->date(),
            'equipo' => $this->faker->randomElement(['Pantallas', 'Sonido e iluminación', 'Micrófonos']),
            'lugar' => $this->faker->randomElement(['Tonalá', 'Puerto Vallarta', 'Morelia']),
            'mensaje' => $this->faker->paragraph(),
        ];
    }
}
