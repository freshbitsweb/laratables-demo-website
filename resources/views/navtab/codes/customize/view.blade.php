    <pre>
        <code class="language-javascript">
            $(document).ready(function(){
                $("#custom-laratable").DataTable({
                    serverSide: true,
                    ajax: "@{{ route('custom_laratable') }}",
                    columns: [
                        { name: 'Name' },
                        { name: 'start_date' },
                        { name: 'salary' },
                        { name: 'action', orderable: false, searchable:false},
                    ],
                });
            });
        </code>
    </pre>
