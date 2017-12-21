@extends('layout')

@section('content')

<h1>Radar</h1>
<div>Id: {{$radar->id}}</div>
<div>Date: {{$radar->date}}</div>
<div>Number: {{$radar->number}}</div>
<div>Distance, m: {{$radar->distance}}</div>
<div>Time, s: {{$radar->time}}</div>
<div>Speed km/h: {{ROUND($radar->distance/$radar->time)*3.6}}</div>
<br>
<a href="{{url('radars')}}"><h3>Atgal į sąrašą</h3></a>
<a href="radars/{{ $radar->id }}/edit">Edit</a></a><br>
<a href="radars/{{ $radar->id }}/delete">Delete</a></a>

@endsection