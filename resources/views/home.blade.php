
    @extends('layouts.main-layout')
    @section('content')
            <h2>{{$txt}}</h2>
            <ul>
                @foreach ($paganti as $value)
            <li>{{$value -> name}} {{$value -> lastname}}</li>
                @endforeach
                
            </ul>

    @endsection
