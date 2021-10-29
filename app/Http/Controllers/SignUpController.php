<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SignUpController extends Controller
{
    public function create()
    {
        return view('signup.create', []);
    }

    public function store(Request $request)
    {
         $validatedData = $request->validate([
             'email' => 'required|email:dns|unique:users',
             'name' => ['required', 'min:3', 'max:255', 'unique:users'],
             'password' => 'required|min:5|max:255'
         ]);

        //  $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        // $request->session()->flash('success', 'Registration successfull! please login');

        return redirect('/login')->with('success', 'Registration successfull! please login');
    }
}
