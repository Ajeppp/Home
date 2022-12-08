<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        // return $request->all();

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:20',
            'line' => 'required|unique:users'
        ]);

        // User::create($validatedData);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->birthdate = $request->birthdate;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->line = $request->line;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/login')->with('success', 'Register Success');

    
    }
}
