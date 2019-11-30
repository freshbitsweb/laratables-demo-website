    <pre>
        <code class="language-php">
            namespace App\Http\Controllers;

            use App\User;
            use Freshbitsweb\Laratables\Laratables;

            /**
             * Show Table Header column
             *
             *
             * @return \Illuminate\Http\Response
            **/
            public function index()
            {
                return view('one_to_many_poly');
            }

            /**
             * return data of the basic datatables.
             *
             *
             * @return type Json
            **/
            public function basicLaratableData()
            {
                return Laratables::recordsOf(User::class);
            }
        </code>
    </pre>
