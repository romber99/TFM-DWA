<?php

namespace Database\Seeders;

use App\Models\Actor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ActorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Actor::create([
            'first_name' => 'Meryl',
            'last_name' => 'Streep',
            'birthdate' => Carbon::create('1949', '06', '22')
        ]);

        Actor::create([
            'first_name' => 'Tom',
            'last_name' => 'Hanks',
            'birthdate' => Carbon::create('1956', '07', '09')
        ]);

        Actor::create([
            'first_name' => 'Scarlett',
            'last_name' => 'Johansson',
            'birthdate' => Carbon::create('1984', '11', '22')
        ]);

        Actor::create([
            'first_name' => 'Morgan',
            'last_name' => 'Freeman',
            'birthdate' => Carbon::create('1937', '06', '01')
        ]);

        Actor::create([
            'first_name' => 'Natalie',
            'last_name' => 'Portman',
            'birthdate' => Carbon::create('1981', '06', '09')
        ]);

        Actor::create([
            'first_name' => 'Robert',
            'last_name' => 'Downey Jr.',
            'birthdate' => Carbon::create('1965', '04', '04')
        ]);

        Actor::create([
            'first_name' => 'Hugo',
            'last_name' => 'Weaving',
            'birthdate' => Carbon::create('1960', '04', '04')
        ]);

        Actor::create([
            'first_name' => 'Elijah',
            'last_name' => 'Wood',
            'birthdate' => Carbon::create('1981', '01', '28')
        ]);

        Actor::create([
            'first_name' => 'Ian',
            'last_name' => 'McKellen',
            'birthdate' => Carbon::create('1939', '05', '25')
        ]);

        Actor::create([
            'first_name' => 'Viggo',
            'last_name' => 'Mortensen',
            'birthdate' => Carbon::create('1958', '10', '20')
        ]);

        Actor::create([
            'first_name' => 'Orlando',
            'last_name' => 'Bloom',
            'birthdate' => Carbon::create('1977', '01', '13')
        ]);

        Actor::create([
            'first_name' => 'Martin',
            'last_name' => 'Freeman',
            'birthdate' => Carbon::create('1971', '09', '08')
        ]);

        Actor::create([
            'first_name' => 'Audrey',
            'last_name' => 'Tautou',
            'birthdate' => Carbon::create('1976', '08', '09')
        ]);
    }
}
