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
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]);
        //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入
    }
}
