<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Car;
use App\Picture;

class HomeController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      //$this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function home()
  {
    $car = Car::find(1);
    $car_picture = Picture::where('car_id', 1)->first();

    $cars = Car::all();
    $cars_pictures = Picture::all();

    $title = 'Home';
    
      return view('home')->with('title', $title)->with('car', $car)->with('car_picture', $car_picture)->with('cars_pictures', $cars_pictures)->with('cars', $cars);
  }

  public function cars()
  {
    $cars = Car::all();

    $images = Picture::all();

    $title = 'All cars';

    return view('all_cars')->with('title', $title)->with('cars', $cars)->with('images', $images);
  }

  public function about()
  {
      $title = 'About';
      return view('about')->with('title', $title);
  }

  public function contact()
  {
    $title = 'Contact';
    return view('contact')->with('title', $title);
  }
}
      