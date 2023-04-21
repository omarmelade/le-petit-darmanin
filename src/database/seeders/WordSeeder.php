<?php

namespace Database\Seeders;

use App\Models\Word;
use Illuminate\Database\Seeder;

class WordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Word::create([
            'word' => 'Ensauvagement',
            'word_class' => 'Adverbe',
            'gender' => 'Masculin'
        ]);

        Word::create([
            'word' => 'Ecoterroristes',
            'word_class' => 'Nom',
            'gender' => 'Masculin'
        ]);

        Word::create([
            'word' => 'Bordéliser',
            'word_class' => 'Verbe',
            'gender' => 'Neutre'
        ]);

        Word::create([
            'word' => 'Black bourges',
            'word_class' => 'Expression',
            'gender' => 'Neutre'
        ]);

        Word::create([
            'word' => 'Terrorisme intellectuel',
            'word_class' => 'Expression',
            'gender' => 'Neutre'
        ]);

        Word::create([
            'word' => 'Encadrée positivement',
            'word_class' => 'Expression',
            'gender' => 'Neutre'
        ]);
    }
}
