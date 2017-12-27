@extends('layouts.app')

@section('content')
        <h1>Edit Driver</h1>

        <form method="post" action="{{ url('drivers', $driver->id) }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <input name="name" value="{{old('name',$driver ->name)}}">
        <input name="city" value="{{old('city',$driver ->city)}}">
              
            <button type="submit">Update</button>

        </form>

        
    <br>

    <a href="{{url('drivers')}}"><h3>Atgal į sąrašą</h3></a>
@endsection