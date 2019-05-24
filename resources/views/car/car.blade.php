@extends('layouts.master')

    @section('content')

    @foreach ($cars as $car)
        <ul>
            <li>
                <a href="{{'/cars/'. $car->id}}">
                {{$car->title}}
                </a>
            </li>
        </ul>
        @endforeach
    
    @endsection
