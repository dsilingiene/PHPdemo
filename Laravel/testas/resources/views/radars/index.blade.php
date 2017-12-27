@extends('layouts.app')

@section('content')

<h1>Radars</h1>
<table class="table">
    <tr>
        <th>Id</th>
        <th>{{__('Date')}}</th>
        <th>{{__('Number')}}</th>
        <th>{{__('Distance, m')}}</th>
        <th>{{__('Time, s')}}</th>
        <th>{{__('Speed, km/h')}}</th>
        <th>{{__('Edit')}}</th>
        <th>{{__('Delete')}}</th>
        <th>Driver Id </th>
        <th>Driver Name </th>
        <th>Creator Id </th>
        <th>Updator Id </th>

        

        

        
    <tr>
@foreach ($radars as $radar)
    <tr>
        <td>{{$radar->id}}</td>
        <td>{{$radar->date}}</td>
        <td><a href="{{ url('radars', $radar->id) }}">{{$radar->number}}</td>
        <td>{{$radar->distance}}</td>
        <td>{{$radar->time}}</td>
        <td>{{ROUND($radar->distance/$radar-> time) * 3.6}}</td>
        <td><a href="radars/{{ $radar->id }}/edit"><button type="submit">{{ __('buttons.edit') }}</button></a></td>
        <td><a href="radars/{{ $radar->id }}/delete"><button type="submit">{{ __('buttons.delete') }}</button></a></td>
        <td>{{$radar->driver_id}}</td>
        <td>{{$radar->driver ? $radar->driver->name: '' }}</td>
        <td>{{$radar->creator_id}}</td>
        <td>{{$radar->updator_id}}</td>
        
        
                
    </tr>

@endforeach
</table>
{{ $radars->links() }}

<br>
        
        <a href={{ url('radars/create') }}><button type="submit">{{ __('buttons.new') }}</button></a></a>
        

@endsection