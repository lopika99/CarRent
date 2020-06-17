<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Picture;
use App\Car;
use Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class PictureController extends Controller
{
    public function index($car_id)
    {   
        $pictures = Picture::where('car_id', $car_id)->get();
        
        $title = $car_id . " pictures";

        return view('admin.pictures')->with('title', $title)->with('pictures', $pictures)->with('car_id', $car_id);
    }

    public function create()
    {
        return view('pictures::create');
    }

    public function store(Request $request, $car_id)
    {
        $image = $request->file('pic');
        
        $picture = new Picture;

        if($request->file('pic')) {
            $path = Storage::disk('public')->put('pic', $request->file('pic'));
            $picture->image_path = $path;
        }

        $picture->car_id = $car_id;

        $picture->save();

        $alert = "Picture added!";

        return Redirect::route('indexpictures', $car_id)->with('alert', $alert);
    }

    public function show($id)
    {
        return view('pictures');
    }

    public function edit($id)
    {
        return view('pictures');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $picture = Picture::destroy($id);

        $alert = "Picture deleted";

        return back()->with('alert', $alert);
    }
}
