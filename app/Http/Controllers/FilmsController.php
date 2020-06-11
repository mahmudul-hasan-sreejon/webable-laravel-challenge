<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Films;
use App\Countries;

class FilmsController extends Controller
{
    public function index() {
        $films = Films::with('countries')->get();
        return view('films.index', compact('films'));
    }

    public function create() {
        $countries = Countries::all();
        return view('films.add', compact('countries'));
    }
}
