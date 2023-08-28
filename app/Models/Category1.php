<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category1 extends Model
{
    use HasFactory;
    
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    
    public function getByCategory1(int $limit_count = 5)
    {
        return $this->posts()->with('category1')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
