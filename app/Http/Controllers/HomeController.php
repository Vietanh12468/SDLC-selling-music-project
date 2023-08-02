<?php

namespace App\Http\Controllers;
use App\Models\Songs;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function SongShow($id)
    {
        $song = Songs::find($id); //
        return view('Home.songshow', [
            'song' => $song,
        ]);
    }
    public function explore()
    {
        $songs = Songs::orderBy('created_at', 'desc')->take(8)->get();
        return view('Home.explore', [
            'songs' => $songs,
        ]);
    }
    public function Search(Request $request){
        $search = $request->input('search');
        $songs = DB::table('songs')
                    ->where('name', 'LIKE', "%$search%")
                    ->get();
    
        return view ('Home.search', ['songs' => $songs]);
    }
    //
}
