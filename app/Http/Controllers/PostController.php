<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Reply;
use App\Models\Like;

/**
 * Post一覧を表示する
 * 
 * @param Post Postモデル
 * @return array Postモデルリスト
 */

class PostController extends Controller
{
    public function index(Post $post,Reply $reply,Category $category)
    {
        //return $post->get();
        //return view('posts.index')->with(['users' => $user->get()]); 
        $user = auth()->user();
        $posts = Post::withCount('likes')->orderByDesc('updated_at')->get();
        
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit(),'categories' =>$category->get()])->with(['replies'=>$reply->getPaginateByLimit()]);  
            
            
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
    
    public function like(Request $request)
{
    $user_id = Auth::user()->id; // ログインしているユーザーのidを取得
    $post_id = $request->post_id; // 投稿のidを取得

    // すでにいいねがされているか判定するためにlikesテーブルから1件取得
    $already_liked = Like::where('user_id', $user_id)->where('post_id', $post_id)->first(); 

    if (!$already_liked) { 
        $like = new Like; // Likeクラスのインスタンスを作成
        $like->post_id = $post_id;
        $like->user_id = $user_id;
        $like->save();
    } else {
        // 既にいいねしてたらdelete 
        Like::where('post_id', $post_id)->where('user_id', $user_id)->delete();
    }
    // 投稿のいいね数を取得
    $post_likes_count = Post::withCount('likes')->findOrFail($post_id)->likes_count;
    $param = [
        'post_likes_count' => $post_likes_count,
    ];
    return response()->json($param); // JSONデータをjQueryに返す
}
    
    
}
