<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'title',
        'body',
        'category1_id'
    ];
    
    public function getPaginateByLimit(int $limit_count = 5)
    {
        return $this::with('category1')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
     public function category1()
    {
        return $this->belongsTo(Category1::class,'category1_id');
    }
}
