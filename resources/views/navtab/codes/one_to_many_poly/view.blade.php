<pre>
    <code class="language-html">
        &lt;div class="container"&gt;
            &lt;table id="one-to-many-poly" class="table table-bordered table-striped"&gt;
                &lt;thead class="thead-dark"&gt;
                    &lt;tr&gt;
                        &lt;th&gt;Post Title&lt;/th&gt;
                        &lt;th&gt;Post Image&lt;/th&gt;
                        &lt;th&gt;Liked By&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
            &lt;/table&gt;
        &lt;/div&gt;
    </code>
</pre>

<pre>
    <code class="language-javascript">
        $(document).ready(function(){
            $("#one-to-many-poly").DataTable({
                serverSide: true,
                ajax: "@{{ route('one_to_many_poly') }}",
                columns: [
                    { name: 'title' },
                    { name: 'image_url', searchable: false },
                    { name: 'post_liked', orderable: false },
                ],
            });
        });
    </code>
</pre>
