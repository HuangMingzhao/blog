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
    public function store()
    {
        $this->validate(\request(),[
            'title'=>'required|string|max:100|min:5',
            'content'=>'required|string|min:10'
        ]);
        Post::create(request(['title','content']));
        return redirect('/posts');
    }
    //文章修改
    public function edit(Post $post)
    {
        return view('post/edit',compact('post'));

    }
    //修改逻辑
    public function update(Post $post)
    {
        //验证
        $this->validate(\request(),[
            'title'=>'required|string|max:100|min:5',
            'content'=>'required|string|min:10'
        ]);
        //逻辑
        $post->title =  \request('title');
        $post->content =  \request('content');
        $post->save();
        //渲染
        return redirect("/posts/{$post->id}");

    }
    //删除逻辑
    public function delete(Post $post)
    {
        //todo::权限验证
        $post->delete();
        return redirect('/posts');


    }
    //上传图片
    public function imageUpload(Request $request)
    {
        $path = $request->file('wangEditorH5File')->storePublicly(md5(time()));
        return asset('storage/'.$path);

    }


}
