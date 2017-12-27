@extends('layouts.app')

@section('content')
<h1>Drivers</h1>
<table class="table">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>City</th>  
        <th>Edit</th>  
        <th>Delete</th> 

    <tr>
@foreach ($drivers as $driver)
    <tr>
        <td>{{$driver->id}}</td>
        <td><a href="{{ url('drivers', $driver->id) }}">{{$driver->name}}</td>
        <td>{{$driver->city}}</td>
        <td><a href="drivers/{{ $driver->id }}/edit">Edit</a></td>
        <td><a href="drivers/{{ $driver->id }}/delete">Delete</a></td>
    </tr>
@endforeach
</table>
{{ $drivers->links() }}

<br>
        
        <a href={{ url('drivers/create') }}><h3>Naujas įrašas</h3></a>
        
@endsection