<pre>
    <code class="language-php">
        /**
         * Get all of the post's likes.
        */
        public function likes()
        {
            return $this->morphMany('App\Like', 'likeable');
        }

        /**
         * Eager load likes value of the post.
         *
         * @param \Illuminate\Database\Eloquent\Builder
         * @return \Illuminate\Database\Eloquent\Builder
        */
        public static function laratablesQueryConditions($query)
        {
            return $query->with('likes');
        }

        /**
         * Display the relationship data in custom column(post_Liked).
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
        public static function laratablesImageUrl($post)
        {
            return "<<pre><code>img src</code></pre>='$post->image_url'>";
        }

        /**
         * searching the post_Liked column data.
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
        }
    </code>
</pre>
