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
        <a href='/posts/create'>投稿を作成する</a>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>&emsp;😀<a href="/posts/{{ $post->id }}">{{$post->user->name}}</a></h2>
                    <p class='content'>&emsp;&emsp;&emsp;{{ $post->content }}</p>
                    <p class='good'>&emsp;&emsp;👍</p>
                    
                    <a href='/posts/{{$post->id}}/reply' style="text-decoration:none;">&emsp;&emsp;&emsp;返信する</a>
                    <h3>&emsp;&emsp;&emsp;返信一覧</h3>
                    <div class='replies'>
                         
                         @foreach ($replies as $reply)
                            <div class='reply'>
                                <h2 class='title_reply'>&emsp;😀<a href="/posts/{{ $post->id }}">{{$post->user->name}}</a></h2>
                                <p class='content_reply'>&emsp;&emsp;&emsp;{{ $reply->content }}</p>
                                <p class='good_reply'>&emsp;&emsp;👍</p>
                            </div>
                         @endforeach
                    </div>
                </div>
            @endforeach
            <div class='replies1'>
                <div class='reply1'>
                    <h2 class='user'>&emsp;&emsp;😀返信者名</h2>
                    <p class='body'>&emsp;&emsp;&emsp;&emsp;This is a sample body.</p>
                    <p class='good'>&emsp;&emsp;&emsp;👍</p>
                </div>
            </div>
            
        </div>
        
        <div class='paginate'>
            {{ $posts->links() }}
            {{ $replies->links() }}
        </div>
    </body>
</html>