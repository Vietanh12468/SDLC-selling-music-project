<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        
        Users::create($request->post());

        return redirect()->route('Users.index')->with('success','Account has been created successfully.');
    }

    public function index()
    {
        return view('Users.Home');
    }

    public function create()
    {
        return view('Users.register');
    }

    public function show(Users $users)
    {
        return view('Users.show',compact('$users'));
    }

    public function loginFunc(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $email = $request->input('email');
        $password = $request->input('password');
        $user = DB::table('users')->where('email', $email)->first();
        if (! $user) {
            return redirect()->back()->withErrors(['email' => 'Email not found.']);
        }
        else if ($password !== $user->password) {
            return redirect()->back()->withErrors(['password' => 'Invalid password.']);
        }
        else {
            Auth::loginUsingId($user->id);
            return redirect()->route('Users.index');
        }
    }
    public function logoutFunc(Request $request)
    {
        Auth::logout();
        return view('Users.Home');
    }

    public function Home(Request $request)
    {
        return view('Users.Home');
    }

    public function Purchase(Request $request)
    {
        return view('Home.purchase');
    }
    //
}
