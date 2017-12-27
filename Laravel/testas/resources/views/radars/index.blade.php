@extends('layouts.app')

@section('content')

<h1>Radars</h1>
<table class="table">
    <tr>
        <th>Id</th>
        <th>Date</th>
        <th>Number</th>
        <th>Distance, m </th>
        <th>Time, s </th>
        <th>Speed, km/h </th>
        <th>Edit </th>
        <th>Delete </th>
        <th>Driver Id </th>
        <th>Driver Name </th>
        

        
    <tr>
@foreach ($radars as $radar)
    <tr>
        <td>{{$radar->id}}</td>
        <td>{{$radar->date}}</td>
        <td><a href="{{ url('radars', $radar->id) }}">{{$radar->number}}</td>
        <td>{{$radar->distance}}</td>
        <td>{{$radar->time}}</td>
        <td>{{ROUND($radar->distance/$radar-> time) * 3.6}}</td>
        <td><a href="radars/{{ $radar->id }}/edit">Edit</a></td>
        <td><a href="radars/{{ $radar->id }}/delete">Delete</a></td>
        <td>{{$radar->driver_id}}</td>
        <td>{{$radar->driver ? $radar->driver->name: '' }}</td>
        
        
                
    </tr>

@endforeach
</table>
{{ $radars->links() }}

<br>
        
        <a href={{ url('radars/create') }}><h3>Naujas įrašas</h3></a>

@endsection