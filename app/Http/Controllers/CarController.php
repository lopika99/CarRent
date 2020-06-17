<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use Redirect;


class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $cars = Car::all();

        $title = "Car administration";

        return view('admin.cars')->with('cars', $cars)->with('title', $title);
    }
    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $title = "Add new cars";

        return view('admin.new_car')->with('title', $title);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $brand = $request->input('brand');
        $type = $request->input('type');
        $plate = $request->input('plate');
        $doors = $request->input('doors');
        $seats = $request->input('seats');
        $lugage = $request->input('lugage');
        $gearbox = $request->input('gearbox');
        $year = $request->input('year');
        $day_price = $request->input('day_price');

        $car = new Car;

        $car->brand = $brand;
        $car->type = $type;
        $car->plate = $plate;
        $car->doors = $doors;
        $car->seats = $seats;
        $car->lugage = $lugage;
        $car->gearbox = $gearbox;
        $car->year = $year;
        $car->day_price = $day_price;

        $car->save();

        $title = "Save new car";

        $alert = "New car saved";

        $cars = Car::all();

        return Redirect::route('indexcars')->with('title', $title)->with('cars', $cars)->with('alert', $alert);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public static function showcar($id)
    {
        $car = Car::find($id);

        return view('home')->with('car', $car);
    }

    public function showcars()
    {
        $cars = Car::all();

        return view('cars')->with('cars', $cars);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $car = Car::find($id);

        $title = "Edit " . $car->id;

        return view('admin.edit_car')->with('car', $car)->with('title', $title);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $brand = $request->input('brand');
        $type = $request->input('type');
        $plate = $request->input('plate');
        $doors = $request->input('doors');
        $seats = $request->input('seats');
        $lugage = $request->input('lugage');
        $gearbox = $request->input('gearbox');
        $year = $request->input('year');
        $day_price = $request->input('day_price');

        $car = Car::find($id);

        $car->brand = $brand;
        $car->type = $type;
        $car->plate = $plate;
        $car->doors = $doors;
        $car->seats = $seats;
        $car->lugage = $lugage;
        $car->gearbox = $gearbox;
        $car->year = $year;
        $car->day_price = $day_price;

        $car->save();

        $cars = Car::all();

        $title = "Cars administration";

        $alert = "Car updated";

        return Redirect::route('indexcars', $car->id)->with('alert', $alert)->with('title', $title);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $car = Car::destroy($id);

        $title = "Cars administration";

        $elert = "Car deleted";

        return Redirect::route('indexcars')->with('alert', $alert)->with('title', $title);
    }
}
