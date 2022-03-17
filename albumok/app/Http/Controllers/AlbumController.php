<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class AlbumController extends Controller
{
    public function index(){
        return view('album.view')->with('albums', Album::all());
    }
}
