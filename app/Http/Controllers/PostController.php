<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;

class PostController extends Controller
{
    //文章列表
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->paginate(6);

        return view('post/index',compact('posts'));
    }
    //文章详情
    public function  show(Post $post)
    {
        return view('post/show',compact('post'));

    }
    //文章创建
    public function  create()
    {
        return view('post/create');

    }
    //创建逻辑
    public function store(){

    }
    //文章修改
    public function edit()
    {
        return view('post/edit');

    }
    //修改逻辑
    public function update()
    {

    }
    //删除逻辑
    public function delete(){

    }


}
