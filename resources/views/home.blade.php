{{-- GOAL: sualla base di quanto visto a lezione, generare in nuovo progetto la index sulla tabella paganti, andando a stampare nome e cognome in una lista (con il solito layout import/yield/section con header sopra e footer sotto)
NOTE: come detto a fine lezioni i nuovi file coinvolti sono il Model e il Controller che andranno creati con i relativi comandi e mappati nel file web.php
In piu'preso pure ospiti con MODEL SECONDO 
 --}}


    @extends('layouts.main-layout')
    @section('content')
            <h2>{{$txt}}</h2>
            <ul>
                @foreach ($paganti as $value)
            <li>{{$value -> name}} {{$value -> lastname}}</li>
                @endforeach
                
            </ul>

            <H1>STOP</H1>

            <ul>
                @foreach ($ospiti as $item)
                    <li>{{$item -> name}} {{$item -> lastname}}</li>
                @endforeach
            </ul>

    @endsection
