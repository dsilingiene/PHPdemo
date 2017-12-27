@extends('layouts.app')

@section('content')
<h1>Delete Driver</h1>

        <form method="post" action="{{ url('drivers', $driver->id) }}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            
            <div>id: {{$driver->id}}</div>
            <div>Name: {{$driver->name}}</div>
            <div>City: {{$driver->numbercity}}</div>
            
            <br>
            <button type="submit">Delete</button>
        </form>

        <a href="{{url('drivers')}}"><h3>Atgal į sąrašą</h3></a>

@endsection