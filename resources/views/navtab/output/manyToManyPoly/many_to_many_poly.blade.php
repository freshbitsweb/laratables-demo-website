    <table id="one-to-many-poly" class="table table-bordered table-striped" style="width:100%">
        <thead class="thead-dark">
            <tr>
                <th>Post Title</th>
                <th>Post Image</th>
                <th>Liked By</th>
            </tr>
        </thead>
    </table>

@push('scripts')
    <script>
        $(document).ready(function(){
            $("#one-to-many-poly").DataTable({
                serverSide: true,
                ajax: "{{ route('one_to_many_poly') }}",
                columns: [
                    { name: 'title' },
                    { name: 'url', searchable: false },
                    { name: 'postLiked', orderable: false },
                ],
            });
        });
    </script>
@endpush