<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>返信作成</title>
    </head>
    <body>
        <h1>返信</h1>
        <form action="/reply" method="POST">
            @csrf
            
            <div class="content">
                <h2>返信内容</h2>
                <textarea name="reply[content]" placeholder="今日も1日お疲れさまでした。"></textarea>
                <input name="reply[post_id]" type="hidden" value={{$post->id}}>
            </div>
           
            <input type="submit" value="store_reply"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>