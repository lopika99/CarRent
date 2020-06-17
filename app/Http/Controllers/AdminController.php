<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use Redirect;

use App\Car;


class AdminController extends Controller
{
    public function users()
    {
        $title = 'Users';
        return view('users')->with('title', $title);
    }

    public function cars()
    {
        $cars = Car::all();

        $title = 'Cars';
        return view('a_cars')
            ->with('title', $title)
            ->with('cars', $cars);
    }

    public function reserves()
    {
        $title = 'Reserves';
        return view('reserves')->with('title', $title);
    }
}
