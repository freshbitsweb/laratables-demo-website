    <pre>
        <code class="language-javascript">
            $(document).ready(function(){
                $("#one-to-many-poly").DataTable({
                    serverSide: true,
                    ajax: "@{{ route('one_to_many_poly') }}",
                    columns: [
                        { name: 'title' },
                        { name: 'url', searchable: false },
                        { name: 'postLiked', orderable: false },
                    ],
                });
            });
        </code>
    </pre>
