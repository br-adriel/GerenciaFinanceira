<!DOCTYPE html>
<html>
    <head>
        <title>Páginas de usuários</title>
    </head>
    <body>
        <h1>Usuários</h1>

        @foreach ($usuarios as $user)
        <a href="{{ route('usuario-ind', ['nome'=>$user]) }}">{{$user}}</a> <br>
        @endforeach
    </body>
</html>