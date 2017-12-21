@extends('layout')

@section('content')
        <h1>Delete Radar</h1>

        <form action="{{ url('/radars', $radar->id)}}" method="post" > 
        {{ csrf_field() }}
        {{ method_field('PUT') }}

            <input name="date" value="{{$radar ->date}}">
            <input name="number" value="{{$radar ->number}}">
            <input name="distance" value="{{$radar ->distance}}"">
            <input name="time" value="{{$radar ->time}}">
            <button type="submit">Save</button>
        </form>

    <br>

    <a href="{{url('radars')}}"><h3>Atgal į sąrašą</h3></a>
@endsection