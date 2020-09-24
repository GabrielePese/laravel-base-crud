
    @extends('layouts.main-layout')
    @section('content')

            <ul>
                @foreach ($paganti as $value)
            <li>{{$value -> name}} {{$value -> lastname}}</li>
                @endforeach
                
            </ul>

    @endsection
