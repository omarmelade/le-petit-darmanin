<?php

namespace Database\Seeders;

use App\Models\Definition;
use App\Models\DefinitionExample;
use Illuminate\Database\Seeder;

class DefinitionExampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DefinitionExample::create([
            'example' => 'Nous assistions à un ensauvagement de la société.',
            'definition_id' => '1'
        ]);

        DefinitionExample::create([
            'example' => 'Il y\'a un ensauvagement de la jeunesse',
            'definition_id' => '2'
        ]);

        DefinitionExample::create([
            'example' => 'Les soulevements de la terre sont une bande d\'écoterroristes.',
            'definition_id' => '3'
        ]);

        DefinitionExample::create([
            'example' => 'La macronie est un groupe organisé d\'écoterroristes',
            'definition_id' => '4'
        ]);

        DefinitionExample::create([
            'example' => 'La Nupes ne cherche qu\'à bordéliser le pays',
            'definition_id' => '5'
        ]);

        DefinitionExample::create([
            'example' => 'Cette réforme des retraites bordélise le pays',
            'definition_id' => '6'
        ]);

        DefinitionExample::create([
            'example' => 'Des black bourges car on sait que ce sont parfois des enfants de bonne familles.',
            'definition_id' => '7'
        ]);

        DefinitionExample::create([
            'example' => 'Le terrorisme intellectuel de l’extrême gauche.',
            'definition_id' => '8'
        ]);

        DefinitionExample::create([
            'example' => 'Les gens seront encadrés positivement par la police et la gendarmerie.',
            'definition_id' => '9'
        ]);

    }
}
