<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <meta name="twitter:card" content="summary">
        <meta name="twitter:creator" content="@omar_melade">
        <meta name="twitter:title" content="Dictionnaire - Le petit darmanin">
        <meta name="twitter:description" content="Le petit darmanin recense tous les mots et expressions choc utilisés par les ministres.">
        <meta name="twitter:image" content="{{asset('images/bordeliser.png')}}">
        <meta property="og:title" content="Dictionnaire - Le petit darmanin"/>
        <meta property="og:description" content="Le petit darmanin est un dictionnaire qui recense tous les mots et expressions parfois vagues et incompréhensibles utilisés par le ministre de l'Intérieur et ses collègues." />

        <meta name="description" content="Le petit darmanin est un dictionnaire qui recense tous les mots et expressions parfois vagues et incompréhensibles utilisés par le ministre de l'Intérieur et ses collègues.">
        <title>Le Petit Darmanin</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div id="page-container">
            @include('header')
            <div class="content-wrap container">
                @yield('content')
            </div>
            @include('footer')
        </div>

        <script src="{{asset('js/bootstrap.min.js')}}" type="text/js"></script>
        <script src="{{asset('js/jquery.min.js')}}" type="text/js"></script>
        <script src="{{asset('js/app.js')}}" charset="utf-8" type="text/js" ></script>
    </body>
</html>
