<!DOCTYPE html>
<html>

<head>
    <title>AJAX Example</title>
    <!-- Include jQuery from a CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <h1>List of Posts:</h1>
    <button id="getPosts">Get Posts</button>
    <ul id="postList"></ul>

    <script>
        $(document).ready(function () {
            // Define a click event handler for the "Get Posts" button
            $("#getPosts").click(function () {
                // Make an AJAX GET request to retrieve the posts
                $.ajax({
                    url: './api/get_quote.php', // URL of the PHP script to handle the request
                    method: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        // Handle the successful response
                        var ul = $("#postList");
                        ul.empty(); // Clear the list before adding new items
                        $.each(data, function (index, post) {
                            ul.append("<li>" + post.title + "</li>");
                        });
                    },
                    error: function () {
                        // Handle any errors that occur during the request
                        alert("Failed to fetch posts.");
                    }
                });
            });
        });
    </script>
</body>

</html>