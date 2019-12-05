    <pre>
        <code class="language-javascript">
            $(document).ready(function(){
                $("#basic-laratable").DataTable({
                    serverSide: true,
                    ajax: "@{{ route('basic_laratable') }}",
                    columns: [
                        { name: 'first_name' },
                        { name: 'last_name' },
                        { name: 'start_date' },
                        { name: 'salary' },
                    ],
                });
            });
        </code>
    </pre>
