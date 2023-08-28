<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    //Postに対するリレーション
    //1対多の関係なので'posts'と複数形
    
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}

