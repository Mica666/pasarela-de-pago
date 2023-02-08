<?php

namespace Database\Seeders;

use App\Models\Hora;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hora::create([
            'hora' => '09:00'
        ]);
        Hora::create([
            'hora' => '09:30'
        ]);
        Hora::create([
            'hora' => '10:00'
        ]);
        Hora::create([
            'hora' => '11:30'
        ]);
        Hora::create([
            'hora' => '13:00'

        ]);
        Hora::create([
            'hora' => '13:30'

        ]);
        Hora::create([
            'hora' => '14:00'

        ]);
        Hora::create([
            'hora' => '14:30'

        ]);
        Hora::create([
            'hora' => '15:00'
        ]);
        Hora::create([
            'hora' => '15:30'
        ]);
        Hora::create([
            'hora' => '16:00'
        ]);
        Hora::create([
            'hora' => '16:30'
        ]);
        Hora::create([
            'hora' => '17:00'
        ]);
        Hora::create([
            'hora' => '17:30'
        ]);
        Hora::create([
            'hora' => '18:00'
        ]);
        Hora::create([
            'hora' => '18:30'
        ]);
        Hora::create([
            'hora' => '19:00'
        ]);
        Hora::create([
            'hora' => '19:30'
        ]);
        Hora::create([
            'hora' => '20:00'
        ]);
        Hora::create([
            'hora' => '20:30'
        ]);
        Hora::create([
            'hora' => '21:00'
        ]);
        Hora::create([
            'hora' => '21:30'
        ]);
        Hora::create([
            'hora' => '22:00'
        ]);
        Hora::create([
            'hora' => '22:30'
        ]);
        Hora::create([
            'hora' => '23:00'
        ]);
        Hora::create([
            'hora' => '23:30'
        ]);
        Hora::create([
            'hora' => '00:00'
        ]);
        Hora::create([
            'hora' => '00:30'
        ]);
    }
}
