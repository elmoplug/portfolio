<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Post;

class Reply extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'post_id',
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
    
    public function post()
    {
        //belongsTo..多(posts)対一(user)
        return $this->belongsTo(Post::class);
    }
    
    
}
