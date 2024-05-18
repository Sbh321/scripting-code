<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <h2>Users</h2>
    <button id="btn">Fetch Data</button>
    <div id="user-list"></div>
    <script>
        $(document).ready(function() {
            $('#btn').click(function() {
                $.ajax({
                    url: 'fetch_data.php',
                    type: 'GET',
                    success: function(data) {
                        $('#user-list').html(data);
                    }
                });
            });
        });
    </script>
</body>
</html>
