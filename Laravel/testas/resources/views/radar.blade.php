<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>About</title>
    </head>
<body>
<h1>Radar</h1>
<div>Id: {{$radar->id}}</div>
<div>Date: {{$radar->date}}</div>
<div>Number: {{$radar->number}}</div>
<div>Distance: {{$radar->distance}}</div>
<div>Time: {{$radar->time}}</div>
<div>Speed: {{$radar->distance/$radar->time*3.6}}</div>
<br>
<a href="{{url('radars')}}"><h3>Atgal į sąrašą</h3></a>
</body>
</html>