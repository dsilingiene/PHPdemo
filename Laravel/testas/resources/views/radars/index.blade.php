@extends('layout')

@section('content')

<h1>Radars</h1>
<table border=1px>
    <tr>
        <th>Id</th>
        <th>Date</th>
        <th>Number</th>
        <th>Distance, m </th>
        <th>Time, s </th>
        <th>Speed, km/h </th>
        <th>Edit </th>
        <th>Delete </th>
        
    <tr>
@foreach ($radars as $radar)
    <tr>
        <td>{{$radar->id}}</td>
        <td>{{$radar->date}}</td>
        <td><a href="{{ url('radars', $radar->id) }}">{{$radar->number}}</td>
        <td>{{$radar->distance}}</td>
        <td>{{ROUND($radar->distance/$radar-> time) * 3.6}}</td>
        <td>{{$radar->time}}</td>
        <td><a href="radars/{{ $radar->id }}/edit">Edit</a></td>
        <td><a href="radars/{{ $radar->id }}/delete">Delete</a></td>
                
    </tr>

@endforeach
</table>
{{ $radars->links() }}

<br>
        
        <a href={{ url('radars/create') }}><h3>Naujas įrašas</h3></a>

@endsection