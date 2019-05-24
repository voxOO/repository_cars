<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarsController extends Controller
{
    public function index() 
    {
        $cars = Car::allcars();
       return view('car/car', compact('cars'));      
    }

    public function show($id) 
    {
        $car = Car::findOrFail($id);
        return view('car/carshow', compact('car'));
    }
      
}
