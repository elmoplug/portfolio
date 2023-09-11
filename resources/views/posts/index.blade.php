<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>投稿画面</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        
        <p>&emsp;ホーム&emsp;&emsp;
        プロフィール&emsp;&emsp;
        メッセージ&emsp;&emsp;
        ヘルプ&emsp;&emsp;</p>
        
        <hr>
        
        <h1>(ゲーム名)の投稿一覧</h1>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='user'>&emsp;😀{{ $post->name }}</h2>
                    <p class='content'>&emsp;&emsp;&emsp;{{ $post->content }}</p>
                    <p class='good'>&emsp;&emsp;👍</p>
                </div>
            @endforeach
            <div class='replies'>
                <div class='reply'>
                    <h2 class='user'>&emsp;&emsp;😀返信者名</h2>
                    <p class='body'>&emsp;&emsp;&emsp;&emsp;This is a sample body.</p>
                    <p class='good'>&emsp;&emsp;&emsp;👍</p>
                </div>
            </div>
            
        </div>
        
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>