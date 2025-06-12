<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Check Upcoming posts</h1>

        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                        <img width="100%" style="margin-bottom: 12px;border-radius:4px;" src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" />
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text"><strong>Date:</strong> {{ $post->created_at }}</p>
                            <p class="card-text"><strong>Description:</strong> {{ $post->content }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
