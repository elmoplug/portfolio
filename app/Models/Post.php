<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Reply;
use App\Models\Category;
use App\Models\Like;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'category_id',
        'content',
    ];
    
    public function getByLimit(int $limit_count = 10)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function user()
    {
        //belongsTo..多(posts)対一(user)
        return $this->belongsTo(User::class);
    }
    
    public function  replies()
    {
        return $this->hasMany(Reply::class);    
    }
    
    public function category()
    {
        //belongsTo..多(posts)対一(user)
        return $this->belongsTo(Category::class);
    }
    
    public function  likes()
    {
        return $this->hasMany(Like::class);    
    }
    
    // Viewで使う、いいねされているかを判定するメソッド。
    public function isLikedBy($user): bool {
        return Like::where('user_id', $user->id)->where('post_id', $this->id)->first() !==null;
    }
    
    
}
