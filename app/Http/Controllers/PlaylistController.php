<?php

namespace App\Http\Controllers;
use App\Models\Playlist;
use Illuminate\Http\Request;



class PlaylistController extends Controller
{
    public function create()
    {
        return view('create'); // Ganti dengan nama view yang sesuai
    }

    public function store(Request $request)
    {
    // Debugging: Check incoming data
    dd($request->all());

    // Validate the request data
    $request->validate([
        'playlist_name' => 'required|max:255',
        'description' => 'nullable|max:1000',
    ]);

    // Create the playlist
    Playlist::create($request->only(['playlist_name', 'description']));

    // Redirect to the playlist section with a success message
    return redirect()->route('playlists.index')->with('success', 'Playlist created successfully!');
    }
}
