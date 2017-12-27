@extends('layouts.app')

@section('content')
<h1>Delete Radar</h1>

        <form method="post" action="{{ url('radars', $radar->id) }}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            
            <div>id: {{$radar->id}}</div>
            <div>Date: {{$radar->date}}</div>
            <div>Number: {{$radar->number}}</div>
            <div>Distance: {{$radar->distance}}</div>
            <div>Time: {{$radar->time}}</div>
            <div>Speed: {{$radar->distance / $radar->time * 3.6}}</div>
            <br>
            <button type="submit">{{ __('buttons.delete') }}</button>
            
        </form>

        <a href="{{url('radars')}}"><h3>Atgal į sąrašą</h3></a>

@endsection