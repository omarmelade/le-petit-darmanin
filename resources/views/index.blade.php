@extends('layout')

@section('content')
    <div>
        <h2>Description</h2>
        <hr>
        <p>Le Petit Darmanin est un projet qui consiste à réunir toutes les phrases *choc* du ministre de l'Intérieur.
            Etant donnée qu'il créé des mots à chaque nouvelle prise de parole, nous avons décidé de créer un dictionnaire.
        </p>
    </div>
    <br>
    <div>
        <h2>Définitions</h2>
        <hr>
        <div class="cards">
            @foreach($definitions as $definition)
                <div class="card-def">
                    <p class="word">{{$definition->word}}</p>
                    <p>{{$definition->definition}}</p>
                    <p class="author">{{$authors->firstWhere('id', $definition->author_id)->firstname}}
                        {{$authors->firstWhere('id', $definition->author_id)->lastname}}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection


