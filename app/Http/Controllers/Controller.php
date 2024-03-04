<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        $cars = Car::orderBy('make')->get();
        return view('cars.index')->with('cars', $cars);
    }

    public function create()
    {
        return view('cars.create');
    }
        
}