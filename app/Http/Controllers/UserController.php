<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\User;
use Redirect;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $users = User::all();

        $title = "User administration";

        return view('admin.users')->with('users', $users)->with('title', $title);
    }
    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $title = "Add new user";

        return view('admin.new_user')->with('title', $title);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $psw = $request->input('password');
        $psw2 = $request->input('password-confirm');
        $isAdmin = $request->input('admincheck');
        if($isAdmin == "on")
            $isAdmin = 1;
        else
            $isAdmin = 0;
        if ($psw == $psw2) 
        {
        $user = new User;

        $user->name = $name;
        $user->email = $email;
        $user->password = Hash::make($psw);
        $user->isAdmin = $isAdmin;

        $user->save();

        $users = User::all();

        $alert = "New user saved!";

        return Redirect::route('indexusers')->with('alert', $alert);
        }
        else
        {
            $alert = "Passwords didn't matched!";
            return back()->withInput()->with('alert', $alert);
        }
    }
    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show()
    {
        $user = Car::all();

        return view('user')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        $title = "Save user";

        return view('admin.edit_user')->with('title', $title)->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $psw = $request->input('password');
        $psw2 = $request->input('password-confirm');
        if ($psw == $psw2) {
            $psw = Hash::make($psw);
        }

        $user = User::find($id);

        $user->name = $name;
        $user->email = $email;
        $user->password = Hash::make($psw);

        $user->save();

        $users = User::all();

        $alert = "User updated!";

        return Redirect::route('indexusers', $user->id)->with('alert', $alert);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $user = User::destroy($id);

        $alert = "User deleted!";

        return Redirect::route('indexusers')->with('alert', $alert);
    }

    public function authority($id)
    {
        if($id == 1)
        {
            $alert = "Can t change the main admin s authority!";
            return Redirect::route('indexusers')->with('alert', $alert);
        }
        else
        {
        $user = User::find($id);

        if ($user->isAdmin == 0) {
            $user->isAdmin = 1;
        }
        else
        {
            $user->isAdmin = 0;
        }
        
        $user->save();

        $alert = "Authority changed!";

        return Redirect::route('indexusers')->with('alert', $alert);
        }
        
    }
}
