<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>La mia prima app</title>
    </head>
    <body class="antialiased">
     <p>Pagina di prova</p>
     <form method="post" action="{{url("prova")}}">
        @csrf
        <input type="submit" value="invia">
    </form>

    <form method="post" action="/prova">
        @csrf
        <input type="submit" value="invia2">
    </form>




    </body>
</html>
