<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Blog') }}</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
         <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            padding: 20px;
        }
        .post {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ddd;
        }
    </style>
    </head>
    <body>
        <h1>{{ config('app.name', 'Blog Name') }}</h1>
        <div class='posts'>
            @forelse ($posts as $post)
                <div class='post'>
                    <h2 class='title'>
                        <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                    </h2>
                    <p class='body'>{{ Str::limit($post->body, 100) }}</p>
                </div>
            @empty
                <p>とうこうがありません。</p>
            @endforelse
        </div>
        
        {{ $posts->links() }}
    </body>
</html>