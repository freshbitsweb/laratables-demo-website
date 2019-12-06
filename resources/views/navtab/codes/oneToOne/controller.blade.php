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
                return view('one_to_one');
            }

            /**
             * return data of the One To One Relationship datatables.
             *
             * @return type Json
             **/
            public function oneToOneData()
            {
                return Laratables::recordsOf(User::class);
            }
        </code>
    </pre>
