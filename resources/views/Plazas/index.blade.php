<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Plazas</h1>
    <ul>
        @foreach ($plazas as $plaza)
             <li> {{$plaza->NombrePlaza}}</li>
        @endforeach
       
    </ul>
</body>
</html>