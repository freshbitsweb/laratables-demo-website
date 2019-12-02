    <table id="one-to-many" class="table table-bordered table-striped" style="width:100%">
        <thead class="thead-dark">
            <tr>
                <th>Name</th>
                <th>Start Date</th>
                <th>Salary</th>
                <th>User Comments</th>
            </tr>
        </thead>
    </table>

@push('scripts')
    <script>
        $(document).ready(function(){
            $("#one-to-many").DataTable({
                serverSide: true,
                ajax: "{{ route('one_to_many') }}",
                columns: [
                    { name: 'Name' },
                    { name: 'start_date' },
                    { name: 'salary' },
                    { name: 'userComments',  orderable: false },
                ],
            });
        });
    </script>
@endpush
