<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use App\Films;
use App\Countries;
use App\Genres;
use App\Comments;

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

    /**
     * @param $toSlug
     * @param int $counter
     * @return string
     */
    private function makeSlug($toSlug, $counter = 1) {
        $slug = Str::slug($toSlug);

        if($counter > 1) $slug .= "-$counter";

        if(Films::where('slug', $slug)->first()) return $this->makeSlug($toSlug, ++$counter);
        else return $slug;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function add(Request $request) {
        $request->validate([
            'name'         => 'required',
            'description'  => 'required',
            'release_date' => 'required|date',
            'rating'       => 'required|numeric|max:5|min:1',
            'ticket_price' => 'required|numeric',
            'country'      => 'required|numeric',
            'genres'       => 'required',
            'photo'        => 'required|file|mimes:png,jpg,jpeg'
        ]);

        $photo = Storage::disk('public')->put('', $request->file('photo'));
        $slug  = $this->makeSlug($request->name);

        $film = new Films();
        $film->name         = $request->name;
        $film->description  = $request->description;
        $film->release_date = $request->release_date;
        $film->rating       = $request->rating;
        $film->ticket_price = $request->ticket_price;
        $film->country      = $request->country;
        $film->photo        = $photo;
        $film->slug         = $slug;
        $film->save();

        foreach($request->genres as $genre) {
            Genres::create([
                'film' => $film->id,
                'genre' => $genre
            ]);
        }

        return redirect('films/create')->with('status', 'Film Saved!');
    }

    public function show($slug) {
        $film = Films::where('slug', $slug)->first();
        $comments = $film->comments;

        return view('films.single', compact('film', 'comments'));
    }

    public function addComment(Request $request) {
        $request->validate(['comment' => 'required']);

        $user = \Auth::user();
        $film = Films::find($request->film);

        $comment = new Comments();
        $comment->user = $user->id;
        $comment->comment = $request->comment;
        $film->comments()->save($comment);

        return redirect("films/{$film->slug}")->with('status', 'Comment Added!');
    }
}
