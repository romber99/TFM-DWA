<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Actor;
use App\Models\Movie;

class ActorMovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $anillos1 = Movie::where('title', 'El Señor de los Anillos: La Comunidad del Anillo')->first();
        $anillos1->actors()->attach([
            Actor::where('first_name', 'Elijah')->where('last_name', 'Wood')->first()->id,
            Actor::where('first_name', 'Ian')->where('last_name', 'McKellen')->first()->id,
            Actor::where('first_name', 'Viggo')->where('last_name', 'Mortensen')->first()->id,
            Actor::where('first_name', 'Orlando')->where('last_name', 'Bloom')->first()->id,
            Actor::where('first_name', 'Hugo')->where('last_name', 'Weaving')->first()->id,
        ]);

        $anillos2 = Movie::where('title', 'El Señor de los Anillos: Las Dos Torres')->first();
        $anillos2->actors()->attach([
            Actor::where('first_name', 'Elijah')->where('last_name', 'Wood')->first()->id,
            Actor::where('first_name', 'Ian')->where('last_name', 'McKellen')->first()->id,
            Actor::where('first_name', 'Viggo')->where('last_name', 'Mortensen')->first()->id,
            Actor::where('first_name', 'Orlando')->where('last_name', 'Bloom')->first()->id,
            Actor::where('first_name', 'Hugo')->where('last_name', 'Weaving')->first()->id,
        ]);

        $anillos3 = Movie::where('title', 'El Señor de los Anillos: El Retorno del Rey')->first();
        $anillos3->actors()->attach([
            Actor::where('first_name', 'Elijah')->where('last_name', 'Wood')->first()->id,
            Actor::where('first_name', 'Ian')->where('last_name', 'McKellen')->first()->id,
            Actor::where('first_name', 'Viggo')->where('last_name', 'Mortensen')->first()->id,
            Actor::where('first_name', 'Orlando')->where('last_name', 'Bloom')->first()->id,
            Actor::where('first_name', 'Hugo')->where('last_name', 'Weaving')->first()->id,
        ]);

        $hobbit1 = Movie::where('title', 'El Hobbit: Un viaje inesperado')->first();
        $hobbit1->actors()->attach([
            Actor::where('first_name', 'Martin')->where('last_name', 'Freeman')->first()->id,
            Actor::where('first_name', 'Ian')->where('last_name', 'McKellen')->first()->id,
            Actor::where('first_name', 'Hugo')->where('last_name', 'Weaving')->first()->id,
            Actor::where('first_name', 'Orlando')->where('last_name', 'Bloom')->first()->id,
        ]);

        $hobbit2 = Movie::where('title', 'El Hobbit: La Desolación de Smaug')->first();
        $hobbit2->actors()->attach([
            Actor::where('first_name', 'Martin')->where('last_name', 'Freeman')->first()->id,
            Actor::where('first_name', 'Ian')->where('last_name', 'McKellen')->first()->id,
            Actor::where('first_name', 'Hugo')->where('last_name', 'Weaving')->first()->id,
            Actor::where('first_name', 'Orlando')->where('last_name', 'Bloom')->first()->id,
        ]);

        $hobbit3 = Movie::where('title', 'El Hobbit: La Batalla de los Cinco Ejércitos')->first();
        $hobbit3->actors()->attach([
            Actor::where('first_name', 'Martin')->where('last_name', 'Freeman')->first()->id,
            Actor::where('first_name', 'Ian')->where('last_name', 'McKellen')->first()->id,
            Actor::where('first_name', 'Hugo')->where('last_name', 'Weaving')->first()->id,
            Actor::where('first_name', 'Orlando')->where('last_name', 'Bloom')->first()->id,
        ]);

        $sophie = Movie::where('title', 'La decisión de Sophie')->first();
        $sophie->actors()->attach([
            Actor::where('first_name', 'Meryl')->where('last_name', 'Streep')->first()->id,
        ]);

        $mammaMia = Movie::where('title', '¡Mamma Mía!')->first();
        $mammaMia->actors()->attach([
            Actor::where('first_name', 'Meryl')->where('last_name', 'Streep')->first()->id,
        ]);

        $codigoDaVinci = Movie::where('title', 'El código Da Vinci')->first();
        $codigoDaVinci->actors()->attach([
            Actor::where('first_name', 'Tom')->where('last_name', 'Hanks')->first()->id,
            Actor::where('first_name', 'Audrey')->where('last_name', 'Tautou')->first()->id,
        ]);

        $angelesYdemonios = Movie::where('title', 'Ángeles y demonios')->first();
        $angelesYdemonios->actors()->attach([
            Actor::where('first_name', 'Tom')->where('last_name', 'Hanks')->first()->id,
        ]);

        $forrestGump = Movie::where('title', 'Forrest Gump')->first();
        $forrestGump->actors()->attach([
            Actor::where('first_name', 'Tom')->where('last_name', 'Hanks')->first()->id,
        ]);

        $naufrago = Movie::where('title', 'Náufrago')->first();
        $naufrago->actors()->attach([
            Actor::where('first_name', 'Tom')->where('last_name', 'Hanks')->first()->id,
        ]);

        $amelie = Movie::where('title', 'Amélie')->first();
        $amelie->actors()->attach([
            Actor::where('first_name', 'Audrey')->where('last_name', 'Tautou')->first()->id,
        ]);

        $lucy = Movie::where('title', 'Lucy')->first();
        $lucy->actors()->attach([
            Actor::where('first_name', 'Scarlett')->where('last_name', 'Johansson')->first()->id,
        ]);

        $ironMan = Movie::where('title', 'Iron Man')->first();
        $ironMan->actors()->attach([
            Actor::where('first_name', 'Robert')->where('last_name', 'Downey Jr.')->first()->id,
        ]);

        $lost = Movie::where('title', 'Lost in Translation')->first();
        $lost->actors()->attach([
            Actor::where('first_name', 'Scarlett')->where('last_name', 'Johansson')->first()->id
        ]);

        $dreams = Movie::where('title', 'Sueños de libertad')->first();
        $dreams->actors()->attach([
            Actor::where('first_name', 'Morgan')->where('last_name', 'Freeman')->first()->id
        ]);

        $invictus = Movie::where('title', 'Invictus')->first();
        $invictus->actors()->attach([
            Actor::where('first_name', 'Morgan')->where('last_name', 'Freeman')->first()->id
        ]);

        $cisne = Movie::where('title', 'Cisne negro')->first();
        $cisne->actors()->attach([
            Actor::where('first_name', 'Natalie')->where('last_name', 'Portman')->first()->id
        ]);

        $vendetta = Movie::where('title', 'V de Vendetta')->first();
        $vendetta->actors()->attach([
            Actor::where('first_name', 'Natalie')->where('last_name', 'Portman')->first()->id,
            Actor::where('first_name', 'Hugo')->where('last_name', 'Weaving')->first()->id
        ]);

        $ironman = Movie::where('title', 'Iron Man')->first();
        $ironman->actors()->attach([
            Actor::where('first_name', 'Robert')->where('last_name', 'Downey Jr.')->first()->id
        ]);

        $sherlock = Movie::where('title', 'Sherlock Holmes')->first();
        $sherlock->actors()->attach([
            Actor::where('first_name', 'Robert')->where('last_name', 'Downey Jr.')->first()->id
        ]);
    }
}
