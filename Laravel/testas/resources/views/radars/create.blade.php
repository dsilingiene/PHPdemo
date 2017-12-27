@extends('layouts.app')

@section('content')

@section('content')
    <title>New Radar</title>
    <h1>New Radar</h1>

        <form method="post" action="{{ url("radars") }}">
            {{ csrf_field() }}
            <input name="date" placeholder="date" value = "{{old('date')}}">
            <input name="number" placeholder="number">
            <input name="distance" placeholder="distance">
            <input name="time" placeholder="time">
            
            <button type="submit">{{ __('buttons.edit') }}</button></a>
        </form>
        <br>
        @if (count($errors))
        @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
        @endif
        <br>

    <a href="{{url('radars')}}"><h3>Atgal į sąrašą</h3></a>
@endsection
