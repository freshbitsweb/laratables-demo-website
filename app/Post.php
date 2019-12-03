<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
      * Indicates if the model should be timestamped.
      *
      * @var bool
     */
    public $timestamps = false;


    /**
     * Get all of the post's comments.
    */
    public function likes()
    {
        return $this->morphMany('App\Like','likeable');
    }
}
