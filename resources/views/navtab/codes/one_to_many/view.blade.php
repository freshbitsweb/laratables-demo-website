<pre>
    <code class="language-html">
        &lt;div class="container"&gt;
            &lt;table id="one-to-many" class="table table-bordered table-striped"&gt;
                &lt;thead class="thead-dark"&gt;
                    &lt;tr&gt;
                        &lt;th&gt;Name&lt;/th&gt;
                        &lt;th&gt;Start Date&lt;/th&gt;
                        &lt;th&gt;Salary&lt;/th&gt;
                        &lt;th&gt;User Comments&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
            &lt;/table&gt;
        &lt;/div&gt;
    </code>
</pre>

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
                    { name: 'user_comments',  orderable: false },
                ],
            });
        });
    </code>
</pre>
