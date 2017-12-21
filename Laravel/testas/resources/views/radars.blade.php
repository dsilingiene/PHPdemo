<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>About</title>
    </head>
<body>
<h1>Radars</h1>
<table border=1px>
    <tr>
        <th>Id</th>
        <th>Date</th>
        <th>Number</th>
        <th>Distance, m </th>
        <th>Time, s </th>
        <th>Speed, km/h </th>
        
    <tr>
@foreach ($radars as $radar)
    <tr>
        <td>{{$radar->id}}</td>
        <td>{{$radar->date}}</td>
        <td><a href="{{ url('radar', $radar->id) }}">{{$radar->number}}</td>
        <td>{{$radar->distance}}</td>
        <td>{{$radar->distance/$radar-> time * 3.6}}</td>
        <td>{{$radar->time}}</td>
    </tr>
@endforeach
</table>
</body>
</html>