<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Obats;

class EmployeesTableSeeder extends Seeder
{
    public function run()
    {
        Obats::factory(10)->create();
    }
}
