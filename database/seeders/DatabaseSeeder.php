<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Butaca;
use App\Models\Codigo;
use App\Models\Entrada;
use App\Models\Horario;
use App\Models\Sala;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);

        Storage::makeDirectory('public/image');

        $this->call(GeneroSeeder::class);
        $this->call(ClasificacionSeeder::class); 
        $this->call(Diaseeder::class);
        $this->call(BeneficioSeeder::class);
        $this->call(HoraSeeder::class);
        Sala::factory(2)->create();
       Butaca::factory(11)->create();
       $this->call(ComboSeeder::class);
       $this->call(PeliculaSeeder::class);
       Horario::factory(10)->create();
    }
}
