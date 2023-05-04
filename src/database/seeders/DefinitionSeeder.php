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
            'definition' => 'Qui devient sauvage, se dit d\'un lieu ou d\'une personne',
            'word_id' => '1',
            'author_id' => '1'
        ]);

        Definition::create([
            'definition' => 'Engagement politique de la population en défaveur du gouvernement en place',
            'word_id' => '1',
            'author_id' => '1'
        ]);

        Definition::create([
            'definition' => 'Désigne les manifestants qui pensent que l\'environnement est une priorité absolue',
            'word_id' => '2',
            'author_id' => '1'
        ]);

        Definition::create([
            'definition' => 'Toute personne ayant le pouvoir d\'empêcher une action destructrice de l\'environnement et qui ne le ferait pas pour protéger ses intérêts ou ceux de ses amis',
            'word_id' => '2',
            'author_id' => '1'
        ]);

        Definition::create([
            'definition' => 'En parlant du pays, désigne tout parti politique qui fait preuve d\'une opposition forte à un projet et soutient les manifestations',
            'word_id' => '3',
            'author_id' => '1'
        ]);

        Definition::create([
            'definition' => 'Rendre incontrôlable une situation par l\'usage de méthodes démocratiques ou non démocratiques',
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

        Definition::create([
            'definition' => 'Désigne le fait que certains militants d’extrême-gauche viennent d’autres pays pour manifester en France, notamment à St-Soline.',
            'word_id' => '7',
            'author_id' => '1'
        ]);

        Definition::create([
            'definition' => 'Se réfère au moment où les causes défendues par les opposants traversent les frontières du pays et mobilisent les activistes dans toute l\'Europe.',
            'word_id' => '7',
            'author_id' => '1'
        ]);

        Definition::create([
            'definition' => 'Tout objet servant à faire du bruit en vue de ne pas entendre le discours ou les mots d\'une personne, ce qui constitue donc un manque de respect envers cette personne.',
            'word_id' => '8',
            'author_id' => '1'
        ]);

        Definition::create([
            'definition' => 'N\'importe quel objet qui permet de faire résonner son mécontentement dans la rue, le but étant de faire comprendre aux gens concernés que l\'heure n\'est plus à l\'écoute.',
            'word_id' => '8',
            'author_id' => '1'
        ]);


    }
}
