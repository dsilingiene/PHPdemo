<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>About</title>
    </head>
<body>
<h1>Driver</h1>
<div>Id: {{$driver->id}}</div>
<div>Name: {{$driver->name}}</div>
<div>City: {{$driver->city}}</div>
<a href="{{url('drivers')}}"><h3>Atgal į sąrašą</h3></a>
</body>
</html>