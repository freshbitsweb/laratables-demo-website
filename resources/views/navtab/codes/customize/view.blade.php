<pre>
    <code class="language-html">
        &lt;div class="container"&gt;
            &lt;table id="custom-laratable" class="table table-bordered table-striped"&gt;
                &lt;thead class="thead-dark"&gt;
                    &lt;tr&gt;
                        &lt;th&gt;Name&lt;/th&gt;
                        &lt;th&gt;Start Date&lt;/th&gt;
                        &lt;th&gt;Salary&lt;/th&gt;
                        &lt;th&gt;Action&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
            &lt;/table&gt;
        &lt;/div&gt;
    </code>
</pre>

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
