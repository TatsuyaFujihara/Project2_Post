<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Requests\CreatePostRequest;
use App\Post;


class PostController extends Controller
{    
// 投稿一覧表示
public function index(Request $request)
{
    $posts = Post::all();
    $user = \Auth::user();
    return view('post/index', compact('posts', 'user'));
}

// 新規投稿画面
public function create()
{
    return view('post/post');
}

// 新規投稿
public function store(Request $request)
{
    $user = \Auth::user();

    $validatedData = $request->validate([
        'title' => 'required|unique:posts|max:20',
        'content' => 'required|max:140',
    ]);
    Post::create([
        'title' => $request->title,
        'content' => $request->content,
        'user_id' => $user->id,
    ]);
    return redirect('post');
}

// 編集画面
public function edit($id)
{
    $posts = Post::find($id);
    return view('post/edit', compact('posts'));
}

// 編集情報更新
public function update(Request $request, $id)
{
    $update = ([
        'title' => $request->title,
        'content' => $request->content
    ]);
    Post::where('id', $id)->update($update);
    return redirect('post');
}

// 投稿削除
public function destroy($id)
    {
        $del = Post::find($id);
        $del->delete();
        return redirect('post');
    }

}
