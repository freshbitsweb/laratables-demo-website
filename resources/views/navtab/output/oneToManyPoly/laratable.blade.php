    <table id="one-to-many-poly-laratable" class="table table-bordered table-striped" style="width:100%">
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
            $("#one-to-many-poly-laratable").DataTable({
                serverSide: true,
                ajax: "{{ route('one_to_many_poly') }}",
                columns: [
                    { name: 'title' },
                    { name: 'image_url', searchable: false },
                    { name: 'post_liked', orderable: false },
                ],
            });
        });
    </script>
@endpush
