<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Reply;

/**
 * Post一覧を表示する
 * 
 * @param Post Postモデル
 * @return array Postモデルリスト
 */

class PostController extends Controller
{
    public function index(Post $post,Reply $reply)
    {
        //return $post->get();
        //return view('posts.index')->with(['users' => $user->get()]); 
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit()])->with(['replies'=>$reply->getPaginateByLimit()]);  
            
            
    }
        
    public function show(Post $post)
    {
        //Postモデルのrepliesメソッド
        $replies = $post->replies()->get();
        return view('posts.show')->with(['post' => $post, 'replies' => $replies]);
        //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
    }
    
    public function create(Category $category)
    {
        return view('posts.create')->with(['categories' => $category->get()]);
    }
    
    public function store(Request $request, Post $post)
    {
        $input = $request['post'];
        //認証済ユーザのidを取得
        $input['user_id'] = Auth::id();
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    
}
