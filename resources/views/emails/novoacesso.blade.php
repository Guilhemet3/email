<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bem vindo(a)</title>
</head>
<body>
    <h4>Seja bem vindo(a), {{$nome}} </h4>

    <p>Você acabou de acessar o sistema utilizando seu email {{$email}} </p>

    <p>Data/Hora de acesso: {{$datahora}} </p>

    <div>
        <!--embutir a imagem dentro do email--> 
        <img width="10%" height="10%" src="{{$message->embed(public_path() . '/img/laravel.png') }}" >
    </div>
</body>
</html>