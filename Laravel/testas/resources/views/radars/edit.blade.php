@extends('layouts.app')

@section('content')
        <h1>Edit Radar</h1>

        <form method="post" action="{{ url('radars', $radar->id) }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <input name="date" value="{{old('date',$radar ->date)}}">
            <input name="number" value="{{old('number',$radar ->number)}}">
            <input name="distance" value="{{old('distance',$radar ->distance)}}">
            <input name="time" value="{{old('time',$radar ->time)}}">
            
            <button type="submit">{{ __('buttons.edit') }}</button></a>
        </form>

        
    <br>

    <a href="{{url('radars')}}"><h3>Atgal į sąrašą</h3></a>
@endsection