<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="Le petit darmanin est un dictionnaire qui recense tous les mots et expressions parfois vagues et incompréhensibles utilisés par le ministre de l’intérieur.">
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

        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" type="text/js"></script>
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/app.js')}}" charset="utf-8"></script>
        <script src="{{asset('js/html2canvas.js')}}" charset="utf-8"></script>
    </body>
</html>
