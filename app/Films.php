<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Films extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'release_date', 'rating',
        'ticket_price', 'country', 'photo', 'slug'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'country'
    ];

    function countries() {
        return $this->belongsTo('App\Countries', 'id');
    }

    function genres() {
        return $this->hasMany('App\Genres', 'film');
    }

    public function genreList() {
        $genreList = array();
        foreach($this->genres as $item) {
            $genreList[] = $item->genre;
        }

        return join(", ", $genreList);
    }

    function comments() {
        return $this->hasMany('App\Comments', 'film');
    }
}
