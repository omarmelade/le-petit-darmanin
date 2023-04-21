<?php

namespace Database\Seeders;

use App\Models\Definition;
use Illuminate\Database\Seeder;

class DefinitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Definition::create([
            'definition' => 'Deviens sauvage, se dit d\'un lieu ou d\'une personne',
            'word_id' => '1',
            'author_id' => '1'
        ]);

        Definition::create([
            'definition' => 'Désigne les manifestants qui pensent que l\'environnement est une priorité absolue',
            'word_id' => '2',
            'author_id' => '1'
        ]);

        Definition::create([
            'definition' => 'En parlant du pays. Désigne la Nupes et plus généralement tout parti politique qui fait preuve d\'une opposition forte à un projet et soutiens les manifestations',
            'word_id' => '3',
            'author_id' => '1'
        ]);

        Definition::create([
            'definition' => 'Mot-valise visant à présenter certains black blocs comme des bourgeois "fils à papa"',
            'word_id' => '4',
            'author_id' => '1'
        ]);

        Definition::create([
            'definition' => 'Expression dont l\'objectif est d\'associer des opposants politiques qui contestent un projet (social ou environnemental) à des terroristes. Tout cela dans le but de décrédibiliser les pensées contestataires',
            'word_id' => '5',
            'author_id' => '1'
        ]);

        Definition::create([
            'definition' => 'Se dit d\'une manifestation qui ne présente aucun risque pour les manifestants et à laquelle ils peuvent participer "sans craintes". Durant ce type de manifestation les policiers et les gendarmes sont "positifs"',
            'word_id' => '6',
            'author_id' => '1'
        ]);
    }
}
