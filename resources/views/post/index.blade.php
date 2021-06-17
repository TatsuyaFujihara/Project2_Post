@extends('layouts.app')

@section('content')
<div class="container">
    
    @foreach($dates as $date)
    @if ($date->user_id == Auth::id())
    {{-- @if ($date->user_id == $date->user->id) --}}
    {{-- 投稿一覧表示 --}}
        <div class="border-bottom border-primary">
            <h5 class="text-muted">タイトル : {{$date->title}}</h5>
            <p>投稿内容 : {{$date->content}}</p>
        </div>
    {{-- 削除機能 --}}
        <form method="post" action="{{ route('post.destroy', $date->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">削除</button>
        </form>
    {{-- 編集ページ表示 --}}
    <form method="get" action="{{ route('post.edit', $date->id) }}">
        @csrf
        @method('GET')
        <button type="submit" class="btn btn-danger">編集</button>
    </form>
    @else
        <div class="border-bottom border-primary">
            <h5 class="text-muted">タイトル : {{$date->title}}</h5>
            <p>投稿内容 : {{$date->content}}</p>
        </div>
    @endif

    @endforeach
</div>
@endsection
