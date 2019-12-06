    <pre>
        <code class="language-php">
            namespace App\Http\Controllers;

            use App\User;
            use Freshbitsweb\Laratables\Laratables;

            /**
             * Display the Home Page.
             *
             * @return \Illuminate\Http\Response
             **/
            public function index()
            {
                return view('one_to_many_poly');
            }

            /**
             * return data of the One To Many Polymorphic Relationship datatables.
             *
             * @return type Json
             **/
            public function oneToManyPolyData()
            {
                return Laratables::recordsOf(User::class);
            }
        </code>
    </pre>
