@extends('layouts.app')

@section('content')
<div class="container">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $errors)
                    <li>{{ $errors }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('post.store') }}" method="post">
        @csrf　
        <input type="text" name="title" placeholder="タイトル"></p>
        <textarea class="ml-3" cols="50" rows="5" name="content" placeholder="投稿内容"></textarea></p>
        <button class="ml-3 btn btn-outline-primary">投稿</button>
    </form>
</div>
@endsection
