@extends('layout')

@section('content')
    <div>
        <h2>Description</h2>
        <hr>
        <p>Le Petit Darmanin est un projet qui tend à réunir toutes les phrases <i>choc</i> du gouvernement.<br>
            Étant donnée qu'il crée des mots à chaque nouvelle prise de parole, j'ai décidé de créer ce <b>modeste</b> dictionnaire.
        </p>
    </div>
    <br>
    <div>
        <h2>Définitions</h2>
        <hr>
        <div class="cards">
            @foreach($definitions as $definition)
                <div class="card-def">
                    <div>
                        <p class="word">{{$definition->word}}</p>
                        <p class="def">{{$definition->definition}}</p>
                    </div>
                    <p class="author">{{$authors->firstWhere('id', $definition->author_id)->firstname}}
                        {{$authors->firstWhere('id', $definition->author_id)->lastname}}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection


