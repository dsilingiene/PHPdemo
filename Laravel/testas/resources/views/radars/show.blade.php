@extends('layouts.app')

@section('content')

<h1>Radar</h1>
<div>Id: {{$radar->id}}</div>
<div>Date: {{$radar->date}}</div>
<div>Number: {{$radar->number}}</div>
<div>Distance, m: {{$radar->distance}}</div>
<div>Time, s: {{$radar->time}}</div>
<div>Speed km/h: {{ROUND($radar->distance/$radar->time)*3.6}}</div>
<br>
<a href="{{url('radars')}}"><button type="submit">{{ __('buttons.back') }}</button></a></a>


@endsection