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
         * Returns data of the One To Many Polymorphic Relationship datatables.
         *
         * @return Illuminate\Http\JsonResponse
         **/
        public function oneToManyPolyData()
        {
            return Laratables::recordsOf(User::class);
        }
    </code>
</pre>
