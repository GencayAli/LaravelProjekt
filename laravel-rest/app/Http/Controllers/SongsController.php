<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use Illuminate\Support\Facades\DB;


class SongsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // $songs = Song::all();
       $song = Song::join('labels', 'labels_id_ref', '=', 'labels.id')
       ->select('songs.id', 'songs.title', 'songs.band', 'labels.name')
       ->orderBy('songs.title', 'asc')
       ->get();
        return view('songs.index', ['songs' => $song]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $labels = DB::table('labels')->select('id', 'name')->get();
        return view('songs.create', ['labels' => $label]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|min:3',
            'band' =>  'required|min:2',
            'labels_id_ref' => 'required',
        ]);

        $song = new Song();
        $song->title = $validateData['title'];
        $song->band = $validateData['band'];
        $song->labels_id_ref = $validateData['labels_id_ref'];
        $song->save();

        return redirect('/songs');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       // $song = Song::find($id);
       $song = Song::join('labels', 'labels_id_ref', '=', 'labels.id')
             ->select('songs.title', 'songs.band', 'songs.created_at', 'labels.name')
             ->where('songs.id', '=', $id)
             ->first();
             

        return view('songs.show', compact('song'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $song = Song::find($id);
        $lables = DB::table('labels')->select('id', 'name')->get();

        return view( 'songs.edit', [
            'song' => $song,

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $song = Song::find($id);

        $validateData = $request->validate([
            'title' => 'required|min:3',
            'band' =>  'required|min:2',
            'labels_id_ref' => 'required',
        ]);

        $song->title = $validateData['title'];
        $song->band = $validateData['band'];
        $song->labels_id_ref = $validateData['labels_id_ref'];

        $song->save();
        return redirect('songs');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $song = Song::find($id);
    }
}
