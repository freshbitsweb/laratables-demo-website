    <pre>
        <code class="language-php">
            namespace App\Http\Controllers;

            use App\User;
            use Freshbitsweb\Laratables\Laratables;

            /**
             * Show Table Header column
             *
             * @return \Illuminate\Http\Response
             **/
            public function index()
            {
                return view('one_to_many');
            }

            /**
             * return data of the One To Many Relationship datatables.
             *
             * @return type Json
             **/
            public function oneToManyData()
            {
                return Laratables::recordsOf(User::class);
            }
        </code>
    </pre>
