<pre>
    <code class="language-php">
        /**
         * Get the Country that owns the users
         *
         **/
        public function country()
        {
            return $this->belongsTo('App\Country');
        }
    </code>
</pre>
