<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
    public function books()
    {
        // * Not necessary for the exo
        return $this->hasMany('App\Book');
    }
}
