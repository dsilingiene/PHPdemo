<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>About</title>
    </head>
<body>
<h1>Drivers</h1>
<table border=1px>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>City</th>  
        <th>Edit</th>        
    <tr>
@foreach ($drivers as $driver)
    <tr>
        <td>{{$driver->id}}</td>
        <td><a href="{{ url('drivers', $driver->id) }}">{{$driver->name}}</td>
        <td>{{$driver->city}}</td>
        <td><a href="">Edit</a></td></td>
    </tr>
@endforeach
</table>

<br>
        
        <a href={{ url('drivers/create') }}><h3>Naujas įrašas</h3></a>
        
</body>
</html>