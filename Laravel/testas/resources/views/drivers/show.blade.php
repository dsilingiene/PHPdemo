@extends('layouts.app')

@section('content')
<h1>Driver</h1>
<div>Id: {{$driver->id}}</div>
<div>Name: {{$driver->name}}</div>
<div>City: {{$driver->city}}</div>
<a href="{{url('drivers')}}"><h3>Atgal į sąrašą</h3></a>
@endsection