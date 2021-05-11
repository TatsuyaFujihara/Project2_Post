@extends('layouts.app')

@section('content')
<div class="container">
    
    @foreach($posts as $post)

    @if ($post->user_id == $user->id)
    {{-- 投稿一覧表示 --}}
        <div class="border-bottom border-primary">
            <h5 class="text-muted">タイトル : {{$post->title}}</h5>
            <p>投稿内容 : {{$post->content}}</p>
        </div>
    {{-- 削除機能 --}}
        <form method="post" action="{{ route('post.destroy', $post->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">削除</button>
        </form>
    {{-- 編集ページ表示 --}}
    <form method="get" action="{{ route('post.edit', $post->id) }}">
        @csrf
        @method('GET')
        <button type="submit" class="btn btn-danger">編集</button>
    </form>
    @else
        <div class="border-bottom border-primary">
            <h5 class="text-muted">タイトル : {{$post->title}}</h5>
            <p>投稿内容 : {{$post->content}}</p>
        </div>
    @endif

    @endforeach
</div>
@endsection
