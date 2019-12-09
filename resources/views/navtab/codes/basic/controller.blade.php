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
            return view('basic_laratable');
        }

        /**
            * Returns data of the basic datatables.
            *
            * @return Illuminate\Http\JsonResponse
            **/
        public function basicLaratableData()
        {
            return Laratables::recordsOf(User::class);
        }
    </code>
</pre>
