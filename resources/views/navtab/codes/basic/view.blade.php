    <pre>
        <code class="language-html">
            &lt;div class="container"&gt;
                &lt;table id="basic-laratable" class="table table-bordered table-striped"&gt;
                    &lt;thead class="thead-dark"&gt;
                        &lt;tr&gt;
                            &lt;th&gt;First Name&lt;/th&gt;
                            &lt;th&gt;Last Name&lt;/th&gt;
                            &lt;th&gt;Start Date&lt;/th&gt;
                            &lt;th&gt;Salary&lt;/th&gt;
                        &lt;/tr&gt;
                    &lt;/thead&gt;
                &lt;/table&gt;
            &lt;/div&gt;
        </code>
    </pre>

    <pre>
        <code class="language-javascript">
            $(document).ready(function(){
                $("#basic-laratable").DataTable({
                    serverSide: true,
                    ajax: "@{{ route('basic_laratable') }}",
                    columns: [
                        { name: 'first_name' },
                        { name: 'last_name' },
                        { name: 'start_date' },
                        { name: 'salary' },
                    ],
                });
            });
        </code>
    </pre>
