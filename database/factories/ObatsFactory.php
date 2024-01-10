<?php

namespace Database\Factories;

use App\Models\Obats;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ObatsFactory extends Factory
{
    protected $model = Obats::class;

    public function definition()
    {
        return [
            'uuid' => Str::uuid(),
            'namaobat' => $this->faker->firstName,
            'deskripsi' => $this->faker->lastName,
            'jumlah' => $this->faker->phoneNumber,
            'harga' => $this->faker->unique()->safeEmail,
        ];
    }
}
