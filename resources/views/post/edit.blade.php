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

    <form action="{{ route('post.update', $posts->id) }}" method="post">
        @csrf
        @method("PUT")
        <input type="text" name="title" value="{{ $posts->title }}"></p>
        <textarea class="ml-3" cols="50" rows="5" name="content">{{ $posts->content }}</textarea></p>
        <button>編集する</button>
    </form>
</div>
@endsection
