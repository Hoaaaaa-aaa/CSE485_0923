<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <!-- Thêm liên kết đến Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('font/font/bootstrap-icons.css') }}" rel="stylesheet">
</head>
<body class="m-5">
    <nav class="navbar bg-body">
    <div class="container-fluid">
        <h2>Post Details</h2>
        <form class="d-flex">
        <a class="btn btn-success" href="{{ route('posts.create') }}"><b>+</b> Add New Post</a>
        </form>
    </div>
    </nav>
    <div>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th colspan="2" style="width: 8%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <th>{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->body }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td>{{ $post->updated_at }}</td>
                        <td>
                            <a href= "{{ route('posts.show', ['post' => $post->id]) }}"><i class="bi bi-eye"></i></a>
                            <a href= "{{ route('posts.edit', ['post' => $post->id]) }}"><i class="bi bi-pencil"></i></a>
                            <form id="delete-form-{{ $post->id }}" action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST" style="display: none;">
                                @method('DELETE')
                                @csrf
                            </form>
                            <a href="#" onclick="event.preventDefault(); if (confirm('Do you want to delete?')) { document.getElementById('delete-form-{{ $post->id }}').submit(); }">
                                <i class="bi bi-trash3"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <ul class="pagination">
            <li class="page-item {{ ($posts->currentPage() == 1) ? 'disabled' : '' }}">
                <a class="page-link" href="{{ $posts->previousPageUrl() }}">Previous</a>
            </li>
            @for ($i = 1; $i <= $posts->lastPage(); $i++)
                <li class="page-item {{ ($posts->currentPage() == $i) ? 'active' : '' }}">
                    <a class="page-link" href="{{ $posts->url($i) }}">{{ $i }}</a>
                </li>
            @endfor
            <li class="page-item {{ ($posts->currentPage() == $posts->lastPage()) ? 'disabled' : '' }}">
                <a class="page-link" href="{{ $posts->nextPageUrl() }}">Next</a>
            </li>
        </ul>
    </div>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>
