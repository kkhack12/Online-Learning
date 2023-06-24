<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\User; // User Model
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
class LoginController extends Controller
{


    public function process_login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        

        $user = User::where('email',$request->email)->first();

        if (!auth()->attempt($request->only(['email', 'password']), $request->remember)) {  // user and password match

            return back()->with("failed", "Invalid Details");  // Redirect to homepage

        }
        return redirect('/')->with('success', 'You have been logged in.');
    }

    public function process_signup(Request $request)
    {

        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password'
        ]);

        try{
            User::create([
                'firstname' => trim($request->input('firstname')),
                'lastname' => trim($request->input('lastname')),
                'email' => strtolower($request->input('email')),

                'password' => bcrypt($request->input('password')),  // Password bcrypt
            ]);

            session()->flash('message', 'Your account is created');

        } catch (\Illuminate\Database\QueryException $e) {
            //report($e);
            session()->flash('message', 'Your registration is getting problem');

        }

        return redirect('/')->with('success', 'You have been logged in.');

    }
}
