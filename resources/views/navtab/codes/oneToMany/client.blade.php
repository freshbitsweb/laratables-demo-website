    <pre>
        <code class="language-javascript">
            $(document).ready(function(){
                $("#one-to-many").DataTable({
                    serverSide: true,
                    ajax: "@{{ route('one_to_many') }}",
                    columns: [
                        { name: 'Name' },
                        { name: 'start_date' },
                        { name: 'salary' },
                        { name: 'userComments',  orderable: false },
                    ],
                });
            });
        </code>
    </pre>
