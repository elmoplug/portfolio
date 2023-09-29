<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Reply;
use App\Models\Post;

class ReplyController extends Controller
{
    public function create(Reply $reply, Post $post)
    {
        return view('replies.create')->with(['post' => $post]);
    }
    
    public function store(Request $request, Reply $reply,Post $post)
    {
        $input = $request['reply'];
        //認証済ユーザのidを取得
        $input['user_id'] = Auth::id();
        //$input['post_id'] = Reply::with('post')->where('replies.post_id',$post)->get();
        //返信したい投稿のpost_idを取得
        $reply->fill($input)->save();
        return redirect('/posts/' . $reply->id);
    }
}
