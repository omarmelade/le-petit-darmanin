@extends('layout')

@section('content')
    <div>
        <h2>Description</h2>
        <hr>
        <p>Le Petit Darmanin est un projet qui tend à réunir toutes les phrases <i>choc</i> du gouvernement.<br>
            Étant donner qu'il crée des mots à chaque nouvelle prise de parole, j'ai décidé de créer ce <b>modeste</b>
            dictionnaire.
        </p>
    </div>
    <br>
    <div>
        <h2>Définitions</h2>
        <hr>
        <div class="cards">
            @foreach($words as $word)
                <div id="capture"  class="card-def">
                    <div>
                        <p class="word">{{$word->word}}</p>
                        <div class="word-type">
                            <label class="sword-clas">{{strtolower($word->word_class->value)}}</label>
                            @if ($word->gender->value != \App\Enums\GenderEnum::Neutre)
                                <label class="gender">{{strtolower($word->gender->value)}}</label>
                            @endif
                        </div>
                    </div>
                    <div class="def-list">
                        @foreach($word->definitions as $definition)
                            <div class="def-list-item">
                                <label class="def"><label class="index-def">{{$loop->index + 1}}</label> {{$definition->definition}}
                                    @foreach($definition->examples as $ex)
                                        ,<i><label>{{$ex->example}}</label></i>
                                    @endforeach
                                </label>
                            </div>
                        @endforeach
                    </div>
{{--                    <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-size="large" data-text="{{$word->$word}}" data-url="https://lepetitdarmanin.fr" data-show-count="false">Tweet</a>--}}
                </div>
            @endforeach
        </div>
    </div>
@endsection


