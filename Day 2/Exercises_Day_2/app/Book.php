<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Query\Builder;

class Book extends Model
{
    //
    public function author()
    {
        return $this->belongsTo('App\Author');
    }
}
