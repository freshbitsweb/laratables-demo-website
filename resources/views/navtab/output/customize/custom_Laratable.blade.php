    <table id="custom-laratable" class="table table-bordered table-striped" style="width:100%">
        <thead class="thead-dark">
            <tr>
                <th>Name</th>
                <th>Start Date</th>
                <th>Salary</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>

@push('scripts')
    <script>
        $(document).ready(function(){
            $("#custom-laratable").DataTable({
                serverSide: true,
                ajax: "{{ route('custom_Laratable') }}",
                columns: [
                    { name: 'Name' },
                    { name: 'start_date' },
                    { name: 'salary' },
                    { name: 'action', orderable: false, searchable:false},
                ],
            });
        });
    </script>
@endpush
