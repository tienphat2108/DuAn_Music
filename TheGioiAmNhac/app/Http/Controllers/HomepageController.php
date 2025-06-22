<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Chart;
use App\Models\Radio;
use App\Models\Song;
use App\Models\Suggestion;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    /**
     * Display the homepage.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $songs = Song::with('artist')->get();
        $artists = Artist::all();
        $albums = Album::with('artist')->get();
        $radios = Radio::all();
        $charts = Chart::all();
        $suggestions = Suggestion::all();
        return view('homepage.trangchu', compact('songs', 'artists', 'albums', 'radios', 'charts', 'suggestions'));
    }
}