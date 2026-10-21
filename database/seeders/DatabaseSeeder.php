<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\LeituraSensor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => bcrypt('password'),
            ]
        );

        $leituras = [
            ['pressao' => 2.5, 'vazao' => 12.0, 'ph' => 7.0, 'turbidez' => 1.2, 'temperatura' => 24.5],
            ['pressao' => 2.6, 'vazao' => 12.5, 'ph' => 7.1, 'turbidez' => 1.0, 'temperatura' => 24.8],
            ['pressao' => 2.4, 'vazao' => 11.8, 'ph' => 6.9, 'turbidez' => 1.4, 'temperatura' => 25.0],
            ['pressao' => 2.7, 'vazao' => 13.0, 'ph' => 7.2, 'turbidez' => 0.9, 'temperatura' => 25.2],
            ['pressao' => 2.5, 'vazao' => 12.2, 'ph' => 7.0, 'turbidez' => 1.1, 'temperatura' => 24.7],
            ['pressao' => 2.3, 'vazao' => 11.5, 'ph' => 6.8, 'turbidez' => 1.6, 'temperatura' => 25.1],
            ['pressao' => 2.6, 'vazao' => 12.8, 'ph' => 7.1, 'turbidez' => 1.0, 'temperatura' => 25.4],
            ['pressao' => 2.5, 'vazao' => 12.1, 'ph' => 7.0, 'turbidez' => 1.3, 'temperatura' => 24.9],
            ['pressao' => 2.8, 'vazao' => 13.2, 'ph' => 7.3, 'turbidez' => 0.8, 'temperatura' => 25.3],
            ['pressao' => 2.4, 'vazao' => 11.9, 'ph' => 6.9, 'turbidez' => 1.5, 'temperatura' => 24.6],
        ];

        foreach ($leituras as $leitura) {
            LeituraSensor::create($leitura);
        }
    }
}
