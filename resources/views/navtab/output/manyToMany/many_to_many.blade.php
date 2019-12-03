    <table id="many-to-many" class="table table-bordered table-striped" style="width:100%">
        <thead class="thead-dark">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Start Date</th>
                <th>Salary</th>
                <th>User Roles</th>
            </tr>
        </thead>
    </table>

@push('scripts')
    <script>
        $(document).ready(function(){
            $("#many-to-many").DataTable({
                serverSide: true,
                ajax: "{{ route('many_to_many') }}",
                columns: [
                    { name: 'first_name' },
                    { name: 'last_name' },
                    { name: 'start_date' },
                    { name: 'salary' },
                    { name: 'userRoles',  orderable: false },
                ],
            });
        });
    </script>
@endpush
