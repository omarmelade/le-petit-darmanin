@extends('layout')

@section('content')
    <div>
        <p>Le Petit Darmanin est un dictionnaire qui répertorie les expressions <i>choc</i> du gouvernement.<br>
            N'hésitez pas à m'envoyer vos suggestions <a href="https://twitter.com/omar_melade">@omar_melade</a> sur Twitter.
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
                            @if ($word->gender != \App\Enums\GenderEnum::Neutre)
                                <label class="gender">{{strtolower($word->gender->value)}}</label>
                            @endif
                        </div>
                    </div>
                    <div class="def-list">
                        @foreach($word->definitions as $definition)
                            <div class="def-list-item">
                                <span class="def"><span class="index-def">{{$loop->index + 1}}.</span> {{$definition->definition}}.
                                    @foreach($definition->examples as $ex)
                                        <span class="def-example">{{$ex->example}}</span>
                                    @endforeach
                                </span>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection


