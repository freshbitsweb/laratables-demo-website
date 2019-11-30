    <pre>
        <code class="language-javascript">
            $(document).ready(function(){
                $("#one-to-one-laratable").DataTable({
                    serverSide: true,
                    ajax: "@{{ route('one_to_one') }}",
                    columns: [
                        { name: 'first_name' },
                        { name: 'last_name' },
                        { name: 'start_date' },
                        { name: 'salary' },
                        { name: 'country.name', orderable: false},
                    ],
                });
            });
        </code>
    </pre>
