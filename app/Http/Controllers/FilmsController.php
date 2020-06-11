<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Films;

class FilmsController extends Controller
{
    public function index() {
        $films = Films::with('countries')->get();
        return view('films.index', compact('films'));
    }
}
