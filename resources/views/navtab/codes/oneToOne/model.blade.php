<pre>
    <code class="language-php">
        /**
         * Get the Country that owns the users
         *
         *
         * @param Type $var Description
         * @return type
         * @throws conditon
        **/
        public function country()
        {
            return $this->belongsTo('App\Country');
        }
    </code>
</pre>
