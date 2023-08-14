<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

//use宣言は外部にあるクラスをPostController内にインポートできる
//この場合、App＼Models内のPostクラスをインポートしている。

class PostController extends Controller//インポートしたPostをインスタンス化して$postとして使用。
{
    public function index(Post $post)
    {
        return $post->get();//$postの中身を戻り値にする。
    }
}
