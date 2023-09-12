<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>新規投稿</title>
    </head>
    <body>
        <h1>(ゲーム名)の投稿</h1>
        <form action="/posts" method="POST">
            @csrf
            
            <div class="content">
                <h2>投稿内容</h2>
                <textarea name="post[content]" placeholder="今日も1日お疲れさまでした。"></textarea>
            </div>
            <div class="category">
                <select name="post[category_id]">
                    @foreach($categories as $category)
                    <option value={{$category->id}}>{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>