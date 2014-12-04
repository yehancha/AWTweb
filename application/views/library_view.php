<html>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
    <body>
        <form>
            Type <input type="text" name="type" id="bookType"><br /><br />
            Subgenre <input type="number" name="subgenre" id="bookSubgenre"><br /><br />
            Title <input type="text" name="title" id="bookTitle"><br /><br />
            <input type="button" value="Search (GET)" id="findSubmit" />
            <input type="button" value="Insert (PUT/POST)" id="createBook" />
            <input type="button" value="Delete (DELETE)" id="deleteBook" />
        </form>
        <div id="searchResults"></div>
    </body>
    <script language="javascript">
        $('#findSubmit').click(function() {
            $.get('http://localhost/awtweb/index.php/library/type/' + $('#bookType').val() + '/subgenre_id/' + $('#bookSubgenre').val() + '/', function(data) {
                $('#searchResults').html(data);
            });
        });
        
        $('#createBook').click(function() {
            $.ajax({
                url: 'http://localhost/awtweb/index.php/library/type/' + $('#bookType').val() + '/subgenre_id/' + $('#bookSubgenre').val() + '/title/' + $('#bookTitle').val() + '/',
                success: function(data) {
                    $('#searchResults').html(data);
                },
                async: true,
                type: 'PUT'
            });
        });
        
        $('#deleteBook').click(function() {
            $.ajax({
                url: 'http://localhost/awtweb/index.php/library/type/' + $('#bookType').val() + '/subgenre_id/' + $('#bookSubgenre').val() + '/',
                success: function(data) {
                    $('#searchResults').html(data);
                },
                async: true,
                type: 'DELETE'
            });
        });
    </script>
</html>