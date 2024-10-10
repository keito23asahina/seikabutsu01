<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">
            {{ $post->title }}
        </h1>
        
        <div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p>{{ $post->body }}</p>    
            </div>
            <div class="content__details">
                <h3>投稿者</h3>
                <p>{{ $post->user->name }}</p> <!-- 投稿者の名前 -->
                
                <h3>投稿日時</h3>
                <p>{{ $post->created_at->format('Y-m-d H:i') }}</p> <!-- 投稿日時 -->

                <h3>体育館</h3>
                <p>{{ $post->gym->name }}</p> <!-- 体育館名 -->
                <p>{{ $post->gym->address }}</p> <!-- 体育館住所 -->

                @if ($post->gym->phone)
                    <p>電話番号: {{ $post->gym->phone }}</p> <!-- 電話番号があれば表示 -->
                @endif
                
                @if ($post->gym->reserve_link)
                    <p><a href="{{ $post->gym->reserve_link }}">予約リンク</a></p> <!-- 予約リンク -->
                @endif
            </div>
        </div>
        
        <!-- コメントセクションの追加 -->
        <div class="mt-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h3 class="text-lg font-semibold mb-4">コメント</h3>

                @foreach($post->comments as $comment)
                    <div class="mb-4 pb-4 border-b">
                        <p>{{ $comment->body }}</p>
                        <p class="mt-2 text-sm text-gray-600">
                            {{ $comment->user->name }} | 
                            {{ $comment->created_at->diffForHumans() }}
                        </p>
                        @can('delete', $comment)
                            <form action="{{ route('comments.destroy', $comment) }}" method="POST" class="mt-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">削除</button>
                            </form>
                        @endcan
                    </div>
                @endforeach

                <!-- コメント投稿フォーム -->
                @auth
                    <form action="{{ route('comments.store', $post) }}" method="POST" class="mt-6">
                        @csrf
                        <textarea name="body" rows="3" class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" placeholder="コメントを入力..."></textarea>
                        <button type="submit" class="mt-2 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">コメントする</button>
                    </form>
                @else
                    <p class="mt-4 text-gray-600">コメントするには<a href="{{ route('login') }}" class="text-blue-600 hover:underline">ログイン</a>してください。</p>
                @endauth
            </div>
        </div>
        
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>