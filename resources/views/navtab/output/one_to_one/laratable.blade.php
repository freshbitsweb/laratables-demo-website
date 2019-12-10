<table id="one-to-one-laratable" class="table table-bordered table-striped" style="width:100%">
    <thead class="thead-dark">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Start Date</th>
            <th>Salary</th>
            <th>Country Name</th>
        </tr>
    </thead>
</table>

@push('scripts')
    <script>
        $(document).ready(function(){
            $("#one-to-one-laratable").DataTable({
                serverSide: true,
                ajax: "{{ route('one_to_one') }}",
                columns: [
                    { name: 'first_name' },
                    { name: 'last_name' },
                    { name: 'start_date' },
                    { name: 'salary' },
                    { name: 'country.name', orderable: false},
                ],
            });
        });
    </script>
@endpush
