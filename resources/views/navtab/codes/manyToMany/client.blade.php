    <pre>
        <code class="language-javascript">
            $(document).ready(function(){
                $("#many-to-many").DataTable({
                    serverSide: true,
                    ajax: "@{{ route('many_to_many') }}",
                    columns: [
                        { name: 'first_name' },
                        { name: 'last_name' },
                        { name: 'start_date' },
                        { name: 'salary' },
                        { name: 'userRoles',  orderable: false },
                    ],
                });
            });
        </code>
    </pre>
