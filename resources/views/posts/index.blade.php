<x-app-layout>
    <x-slot name="header">
        　index
    </x-slot>
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
                    
                    <div class="category">
                    <p>&emsp;&emsp;&emsp;カテゴリ...<a href="/categories/{{$post->category->id}}">{{ $post->category->name }}</a></p>
                    </div>
                    
                    <p class='content'>&emsp;&emsp;&emsp;{{ $post->content }}</p>
                    <p class='good'>&emsp;&emsp;👍</p>
                    
                    @auth
                    <!-- Post.phpに作ったisLikedByメソッドをここで使用 -->
                    @if (!$post->isLikedBy(Auth::user()))
                        <span class="likes">
                            <i class="fas fa-heart like-toggle" data-post-id="{{ $post->id }}"></i>
                        <span class="like-counter">{{$post->likes_count}}</span>
                        </span><!-- /.likes -->
                    @else
                        <span class="likes">
                            <i class="fas fa-heart heart like-toggle liked" data-post-id="{{ $post->id }}"></i>
                        <span class="like-counter">{{$post->likes_count}}</span>
                        </span><!-- /.likes -->
                    @endif
                    @endauth
                    
                    <a href='/posts/{{$post->id}}/reply' style="text-decoration:none;">&emsp;&emsp;&emsp;返信する</a>
                    <h3>&emsp;&emsp;&emsp;返信一覧</h3>
                    <div class='replies'>
                        
                        @if($post->replies->count())
                         
                         @foreach ($replies as $reply)
                            <div class='reply'>
                                <h2 class='title_reply'>&emsp;&emsp;&emsp;😀<a href="/posts/{{ $post->id }}">{{$post->user->name}}</a></h2>
                                <p class='content_reply'>&emsp;&emsp;&emsp;&emsp;&emsp;{{ $reply->content }}</p>
                                <p class='good_reply'>&emsp;&emsp;&emsp;&emsp;👍</p>
                            </div>
                         @endforeach
                         @else 
                            <p>&emsp;&emsp;&emsp;&emsp;返信はありません</p>
                         @endif
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
</x-app-layout>
