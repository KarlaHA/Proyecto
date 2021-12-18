@extends('templates.plantilla')


@section('titulo', 'Inicio')

@section('contenido')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <style>
        body{
            font-family: sans-serif
        }

        .contenedor{
            height: 20vh;
            margin: 5%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="contenedor">
    <h1>PROYECTOS DISPONIBLES</h1>
</body>
</html>


@endsection