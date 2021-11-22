<?php

namespace Database\Factories;

use App\Models\Calypsocotizacion;
use Illuminate\Database\Eloquent\Factories\Factory;

class CalypsocotizacionFactory extends Factory
{
    protected $model = Calypsocotizacion::class;
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
            'lugar' => $this->faker->randomElement(['Tonalá', 'Puerto Vallarta', 'Morelia']),
            'mensaje' => $this->faker->paragraph(),
        ];
    }
}
