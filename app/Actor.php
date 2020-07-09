<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    public $guarded = [];

    public function getNombreCompleto(){
        return $this->first_name . " " . $this->last_name;
    }

    public function peliculas(){
        return $this->belongsToMany("App\Peliculas","actor_movie","actor_id","movie_id");
    }
}
