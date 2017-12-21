@extends('layout')

@section('content')
        <h1>Edit Radar</h1>

        <form method="post" action="{{ url('radars', $radar->id) }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <input name="date" value="{{old('date',$radar ->date)}}">
            <input name="number" value="{{$radar ->number}}">
            <input name="distance" value="{{$radar ->distance}}">
            <input name="time" value="{{$radar ->time}}">
            
            <button type="submit">Update</button>
        </form>

        
    <br>

    <a href="{{url('radars')}}"><h3>Atgal į sąrašą</h3></a>
@endsection