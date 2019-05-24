@extends('layouts.master')

    @section('content')

  
        <h3>
            Model:{{$car->title}}
        </h3>
        <div>
            <p>
            Producer:{{$car->producer}}
            </p>
            <p>
            Number of doors:{{$car->number_of_doors}}
            </p>
        </div>
   

    @endsection