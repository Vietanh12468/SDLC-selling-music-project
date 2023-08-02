<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Songs;
use App\Models\Categories;
use Illuminate\Support\Facades\Storage;

class SongsController extends Controller
{
    public function index()
    {
        $songs = Songs::all();
        $categories = Categories::all();
        
        return view('SongsManager.SongsManager', [
            'songs' => $songs,
            'categories' => $categories,
        ]);
    }

    public function store(Request $request)
    {
        if ($request->has('song'))
        {
            $this->validate($request, [
                'song' => 'required|file|mimes:mp3,wav|max:100000',
                'image' => 'required|file|mimes:jpeg,png,jpg|max:10000',
                'category' => 'required',
                'artist' => 'required',
                'name' => 'required',
            ]);
    
            $song_path = $request->file('song')->store('songs', 'public');
            $image_path = $request->file('image')->store('images', 'public');
    
            $data = Songs::create([
                'name' => $request->input('name'),
                'song' => $song_path,
                'image' => $image_path,
                'category' => $request->input('category'),
                'artist' => $request->input('artist'),
            ]);
    
            session()->flash('success', 'Song uploaded successfully.');
            return redirect()->route('SongsManager.index');
        }
        else
        {
            $this->validate($request, [
                'name' => 'required',
                'image' => 'required|file|mimes:jpeg,png,jpg|max:10000',
            ]);

            $image_path = $request->file('image')->store('categories', 'public');
    
            $data = Categories::create([
                'name' => $request->input('name'),
                'image' => $image_path,
            ]);
    
            session()->flash('success', 'Category created successfully.');
            return redirect()->route('SongsManager.CategoryManager');
        }
    }

    public function destroy($id)
    {
        if ($song = Songs::find($id)) {
            $song->delete();
            //destroy the song here
            return redirect()->route('SongsManager.index')->with('success', 'Song has been deleted successfully');
        }
    }

    public function DestroyCategory($name)
    {
        if ($category = Categories::where('name', $name))  {
            $category->delete();
            //destroy the category here
            return redirect()->route('SongsManager.CategoryManager')->with('success', 'Category has been deleted successfully');
        }
    }
    public function show()
    {
        $categories = Categories::all();
        return view('SongsManager.CategoryManager', [
            'categories' => $categories,
        ]);
    }
    
    public function download($id)
    {
    $song = Songs::findOrFail($id);

    $headers = [
        'Content-Type' => 'audio/mpeg',
    ];

    return response()->download(storage_path('app/public/'.$song->song), $song->name.'.mp3', $headers);
    }

}