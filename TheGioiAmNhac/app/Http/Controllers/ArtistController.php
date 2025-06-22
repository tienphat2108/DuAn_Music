<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function show(Artist $artist)
    {
        return view('artist.show', compact('artist'));
    }
}
