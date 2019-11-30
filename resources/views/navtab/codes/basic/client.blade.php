    <pre>
        <code class="language-javascript">
            $(document).ready(function(){
                $("#basic-lara-table-table").DataTable({
                    serverSide: true,
                    ajax: "@{{ route('basicLaraTable') }}",
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
