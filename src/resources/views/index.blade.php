@extends('layout')

@section('content')
    <div>
        <h2>Description</h2>
        <hr>
        <p>Le Petit Darmanin est un projet qui tend à réunir toutes les phrases <i>choc</i> du gouvernement.<br>
            L'idée m'est venue lorsque j'ai entendu Yael Gauze dire « Il faudrait que quelqu'un fasse un dictionnaire Darmanin ».<br>
            Etant donnée qu'il créait des mots à chaque nouvelle prise de parole, j'ai décidé de créer ce <b>modeste</b> dictionnaire.
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


