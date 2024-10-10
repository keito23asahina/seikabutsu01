<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
        use HasFactory;
    
    protected $fillable = ['user_id', 'gym_id', 'title', 'body'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function gym()
    {
        return $this->belongsTo(Gym::class);
    }
    
    // いいねのリレーション
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
    
    // コメントのリレーション
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
    public function getByLimit(int $limit_count = 10)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }
}