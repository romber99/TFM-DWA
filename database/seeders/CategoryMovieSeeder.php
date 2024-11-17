<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;
use App\Models\Category;

class CategoryMovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $anillos1 = Movie::where('title', 'El Señor de los Anillos: La Comunidad del Anillo')->first();
        $anillos1->categories()->attach([
            Category::where('name', 'Fantasía')->first()->id,
            Category::where('name', 'Acción')->first()->id
        ]);

        $anillos2 = Movie::where('title', 'El Señor de los Anillos: Las Dos Torres')->first();
        $anillos2->categories()->attach([
            Category::where('name', 'Fantasía')->first()->id,
            Category::where('name', 'Acción')->first()->id
        ]);

        $anillos3 = Movie::where('title', 'El Señor de los Anillos: El Retorno del Rey')->first();
        $anillos3->categories()->attach([
            Category::where('name', 'Fantasía')->first()->id,
            Category::where('name', 'Acción')->first()->id
        ]);

        $hobbit1 = Movie::where('title', 'El Hobbit: Un viaje inesperado')->first();
        $hobbit1->categories()->attach([
            Category::where('name', 'Fantasía')->first()->id,
            Category::where('name', 'Acción')->first()->id
        ]);

        $hobbit2 = Movie::where('title', 'El Hobbit: La Desolación de Smaug')->first();
        $hobbit2->categories()->attach([
            Category::where('name', 'Fantasía')->first()->id,
            Category::where('name', 'Acción')->first()->id
        ]);

        $hobbit3 = Movie::where('title', 'El Hobbit: La Batalla de los Cinco Ejércitos')->first();
        $hobbit3->categories()->attach([
            Category::where('name', 'Fantasía')->first()->id,
            Category::where('name', 'Acción')->first()->id
        ]);

        $sophie = Movie::where('title', 'La decisión de Sophie')->first();
        $sophie->categories()->attach([
            Category::where('name', 'Drama')->first()->id,
            Category::where('name', 'Romance')->first()->id,
        ]);

        $mammaMia = Movie::where('title', '¡Mamma Mía!')->first();
        $mammaMia->categories()->attach([
            Category::where('name', 'Comedia')->first()->id,
            Category::where('name', 'Musical')->first()->id,
            Category::where('name', 'Romance')->first()->id,
        ]);

        $codigoDaVinci = Movie::where('title', 'El código Da Vinci')->first();
        $codigoDaVinci->categories()->attach([
            Category::where('name', 'Thriller')->first()->id,
            Category::where('name', 'Misterio')->first()->id,
        ]);

        $angelesYdemonios = Movie::where('title', 'Ángeles y demonios')->first();
        $angelesYdemonios->categories()->attach([
            Category::where('name', 'Thriller')->first()->id,
            Category::where('name', 'Misterio')->first()->id
        ]);

        $forrestGump = Movie::where('title', 'Forrest Gump')->first();
        $forrestGump->categories()->attach([
            Category::where('name', 'Comedia')->first()->id,
            Category::where('name', 'Drama')->first()->id,
            Category::where('name', 'Romance')->first()->id
        ]);

        $naufrago = Movie::where('title', 'Náufrago')->first();
        $naufrago->categories()->attach([
            Category::where('name', 'Acción')->first()->id,
        ]);

        $amelie = Movie::where('title', 'Amélie')->first();
        $amelie->categories()->attach([
            Category::where('name', 'Romance')->first()->id,
            Category::where('name', 'Comedia')->first()->id,
            Category::where('name', 'Fantasía')->first()->id
        ]);

        $lucy = Movie::where('title', 'Lucy')->first();
        $lucy->categories()->attach([
            Category::where('name', 'Acción')->first()->id,
            Category::where('name', 'Fantasía')->first()->id,
            Category::where('name', 'Thriller')->first()->id
        ]);

        $ironMan = Movie::where('title', 'Iron Man')->first();
        $ironMan->categories()->attach([
            Category::where('name', 'Acción')->first()->id
        ]);

        $lost = Movie::where('title', 'Lost in Translation')->first();
        $lost->categories()->attach([
            Category::where('name', 'Drama')->first()->id,
            Category::where('name', 'Comedia')->first()->id
        ]);

        $dreams = Movie::where('title', 'Sueños de libertad')->first();
        $dreams->categories()->attach([
            Category::where('name', 'Thriller')->first()->id,
            Category::where('name', 'Drama')->first()->id
        ]);

        $invictus = Movie::where('title', 'Invictus')->first();
        $invictus->categories()->attach([
            Category::where('name', 'Drama')->first()->id
        ]);

        $cisne = Movie::where('title', 'Cisne negro')->first();
        $cisne->categories()->attach([
            Category::where('name', 'Drama')->first()->id,
            Category::where('name', 'Thriller')->first()->id,
        ]);

        $vendetta = Movie::where('title', 'V de Vendetta')->first();
        $vendetta->categories()->attach([
            Category::where('name', 'Thriller')->first()->id,
            Category::where('name', 'Acción')->first()->id,
            Category::where('name', 'Drama')->first()->id,
            Category::where('name', 'Romance')->first()->id
        ]);

        $ironman = Movie::where('title', 'Iron Man')->first();
        $ironman->categories()->attach([
            Category::where('name', 'Acción')->first()->id
        ]);

        $sherlock = Movie::where('title', 'Sherlock Holmes')->first();
        $sherlock->categories()->attach([
            Category::where('name', 'Acción')->first()->id,
            Category::where('name', 'Misterio')->first()->id
        ]);
    }
}
