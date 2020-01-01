<pre>
    <code class="language-php">
        /**
         * The attributes that should be mutated to dates.
         *
         * @var array
         */
        protected $dates = [
            'start_date',
        ];

        /**
         * Display currency symbol with format in salary column value.
         *
         * @param \App\User
         * @return string
         */
        public static function laratablesSalary($user)
        {
            return "$".number_format($user->salary);
        }

        /**
         * Adds the condition for searching the salary if custom/modify for display.
         *
         * @param \Illuminate\Database\Eloquent\Builder
         * @param string search term
         * @return \Illuminate\Database\Eloquent\Builder
         */
        public static function laratablesSearchSalary($query, $searchValue)
        {
            if ($searchSalary = filter_var($searchValue, FILTER_SANITIZE_NUMBER_INT)) {
                return $query->orWhere('salary', 'like', '%'. $searchSalary. '%');
            }

            return $query;
        }

        /**
         * Returns the first_name & last_name value in Name column for datatables.
         *
         * @param \App\User
         * @return string
         */
        public static function laratablesCustomName($user)
        {
            return $user->first_name.' '.$user->last_name;
        }

        /**
         * Additional merged columns to be loaded for datatables.
         *
         * @return array
         */
        public static function laratablesAdditionalColumns()
        {
            return ['first_name', 'last_name'];
        }

        /**
         * First_name column should be used for sorting when Name column is selected in Datatables.
         *
         * @return string
         */
        public static function laratablesOrderName()
        {
            return 'first_name';
        }

        /**
         * Searching the user(column merged) in the query.
         *
         * @param \Illuminate\Database\Eloquent\Builder
         * @param string search term
         * @param \Illuminate\Database\Eloquent\Builder
         */
        public static function laratablesSearchName($query, $searchValue)
        {
            return $query->orWhere('first_name', 'like', '%'. $searchValue. '%')
                ->orWhere('last_name', 'like', '%'. $searchValue. '%')
            ;
        }

        /**
         * Returns the action Column html for datatables.
         *
         * @param \App\User
         * @return string
         */
        public static function laratablesCustomAction($user)
        {
            return view('action', compact('user'))->render();
        }

        /**
         * Sets the serial number column value for each user.
         *
         * @param \Illuminate\Support\Collection
         * @return \Illuminate\Support\Collection
         **/
        public static function laratablesModifyCollection($users)
        {
            return $users->map(function ($user, $key) {
                $user->serial_no = $key + 1 + request()->input('start');
                return $user;
            });
        }

        /**
         * Returns the custom column serial number value for table.
         *
         * @param \App\User $user
         * @return string
         **/
        public static function laratablesCustomSerialNo($user)
        {
            return $user->serial_no;
        }
    </code>
</pre>
