<?php

namespace Database\Seeders;

use App\Models\TicketType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TicketType::create([
            'name' => 'Entrada general',
            'discount' => 0,
            'promotion' => null
        ]);

        TicketType::create([
            'name' => 'Entrada estudiante',
            'discount' => 70,
            'promotion' => null
        ]);

        TicketType::create([
            'name' => 'Entrada familiar',
            'discount' => 30,
            'promotion' => 'Ven en familia y disfruta de unas palomitas y un refresco por entrada.'
        ]);

        TicketType::create([
            'name' => 'Entrada para cumpleaños',
            'discount' => 40,
            'promotion' => '¡Disfruta de tu cumpleaños en nuestro cine y tendrán un copazo especial de la casa!'
        ]);

        TicketType::create([
            'name' => 'Entrada especial',
            'discount' => 0,
            'promotion' => 'Incluye un póster exclusivo de la película'
        ]);
    }
}
