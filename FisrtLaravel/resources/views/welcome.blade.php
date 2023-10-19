<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <!-- Thêm liên kết đến Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body class="m-5">
    <div class="container">
        <h1>Welcome to the PostController demo!</h1>
        <h2>Index Page</h2>
        <form action="{{ route('posts.index') }}" class="mb-3">
            <button type="submit" class="btn btn-primary">Go to Index Page</button>
        </form>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>





















2