<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Categories;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function index()
    {
        $users = Users::all();

        return view('UsersManager.UserManager', [
            'users' => $users,
        ]);
    }

    public function create()
    {
        return view('UsersManager.AddAccount');
    }
    

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

    public function ChangeAccType(Request $request, $id){
        $user = Users::findOrFail($id);
        $type = $request->input('type');
    
        if ($type === "customer") {
            $user->type = "customer";
            $user->save();
            return redirect()->route('UsersManager.index')->with('success', 'This acc has been updated to customer');
        }
        elseif ($type === "producer") {
            $user->type = "producer";
            $user->save();
            return redirect()->route('UsersManager.index')->with('success', 'This acc has been updated to producer');
        }
        elseif ($type === "admin") {
            $user->type = "admin";
            $user->save();
            return redirect()->route('UsersManager.index')->with('success', 'This acc has been updated to admin');
        }
        elseif ($type === "ban") {
            $user->type = "ban";
            $user->save();
            return redirect()->route('UsersManager.index')->with('success', 'This acc has been banned from the website');
        }
    }
    public function SearchUser(Request $request)
    {
        $search = $request->input('search');
    
        $users = DB::table('users')
                    ->where('name', 'LIKE', "%$search%")
                    ->get();
    
        return view('UsersManager.UserManager', ['users' => $users]);
    }
}
