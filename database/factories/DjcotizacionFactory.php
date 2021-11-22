<?php

namespace Database\Factories;

use App\Models\Djcotizacion;
use Illuminate\Database\Eloquent\Factories\Factory;

class DjcotizacionFactory extends Factory
{
    protected $model = Djcotizacion::class;
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
            'paquete' => $this->faker->randomElement(['Paquete mini', 'Paquete básico', 'Paquete junior', 'Paquete plus', 'Paquete diviertas', 'master']),
            'lugar' => $this->faker->randomElement(['Tonalá', 'Puerto Vallarta', 'Morelia']),
            'mensaje' => $this->faker->paragraph(),
        ];
    }
}
