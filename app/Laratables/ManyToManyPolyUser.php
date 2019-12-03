<?php
namespace App\Laratables;

use App\User;

class ManyToManyPolyUser extends User
{
    /**
     * Display the relationship data in custom column(postLiked).
     *
     * @param \App\Post
     * @return string
    */
    public static function laratablesCustomPostLiked($post)
    {
        return $post->likes->implode('name', ',');
    }

    /**
     * Display image from url in table
     *
     * @param \App\Post
     * @return string
    */
    public static function laratablesUrl($post)
    {
        return "<img src='$post->url'>";
    }

    /**
     * searching the postLiked column data.
     *
     * @param \Illuminate\Database\Eloquent\Builder
     * @param string search term
     * @return \Illuminate\Database\Eloquent\Builder
    */
    public static function laratablesSearchPostLiked($query, $searchValue)
    {
        return $query->orWhereHas('likes', function ($query) use ($searchValue) {
            $query->where('name', 'like', "%" .$searchValue. "%");
        });
        return $query;
    }
}
