@extends('layout')

@section('content')
<h1>Radar</h1>
<div>Id: {{$radar->id}}</div>
<div>Date: {{$radar->date}}</div>
<div>Number: {{$radar->number}}</div>
<div>Distance: {{$radar->distance}}</div>
<div>Time: {{$radar->time}}</div>
<div>Speed: {{$radar->distance/$radar->time*3.6}}</div>
<br>
<a href="{{url('radars')}}"><h3>Atgal į sąrašą</h3></a>

@endsection