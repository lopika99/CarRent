<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Car;
use App\Reserve;
use App\Picture;
use App\Http\Controllers\PictureController;
use DB;
use Auth;
use Redirect;

// File
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;


class ReserveController extends Controller
{

    public function index()
    {   
        $reserves = Reserve::all();

        
        $title = "Reserves";


        return view('/admin/reserves')->with('title', $title)->with('reserves', $reserves);
    }


    public function store(Request $request)
    {
        $car_id = $request->input('car_id');
        $from = $request->input('from');
        $to = $request->input('to');

        $reserve = new Reserve;

        $reserve->user_id = Auth::user()->id;
        $reserve->car_id = $car_id;
        $reserve->start_date = $from;
        $reserve->end_date = $to;

        $reserve->save();

        $alert = "Reserved succesfully!";

        return Redirect::route('home')->with('alert', $alert);
    }

    public function destroy($id)
    {      
        $reserves = Reserve::destroy($id);

        $alert = "Reserve deleted!";

        return Redirect::route('indexreserves')->with('alert', $alert);
    }

    public function search(Request $request)
    {
        if (!Auth::check()) {
            $alert = "Login is necessary!";
            return Redirect::route('home')->with('alert', $alert);
        }
        else
        {
            $s_d = $request->input('sd');
            $e_d = $request->input('ed');

            $not_available = Reserve::select('car_id')
            ->orwhereBetween('start_date', [$s_d, $e_d])
            ->orwhereBetween('end_date', [$s_d, $e_d])
            ->orwhere('start_date', $s_d)
            ->orwhere('start_date', $e_d)
            ->orwhere('end_date', $s_d)
            ->orwhere('end_date', $e_d)
            ->orWhere('start_date', '<=', $e_d)->where('end_date', '>=', $s_d)
            ->orWhere('end_date', '>=', $s_d)->where('start_date', '<=', $e_d)
            ->distinct()
            ->get();

            $cars = Car::whereNotIn('id', $not_available)->get();
            $pictures = Picture::whereNotIn('car_id', $not_available)->get();

            if(count($cars) != 0)
            {
                return view('ser_cars')
                    ->with('from', $s_d)
                    ->with('to', $e_d)
                    ->with('cars', $cars)
                    ->with('pictures', $pictures);
            }
            else
            {
                $alert = "No available cars found!";

                return Redirect::route('home')->with('alert', $alert);
            }
        }
    }
}