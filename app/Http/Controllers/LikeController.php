<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Like;
use App\User;


class LikeController extends Controller
{
    // いいね
    public function like($id)
    {
        $user = \Auth::user();
        Like::create([
                'post_id' => $id,
                'user_id' => $user->id,
            ]);
            return redirect('post');
    }

    // 
    public function unlike($id)
    {
        $del = Like::where('post_id', '=', $id)->where('user_id', '=', Auth::id())->first();
        // dd($del);
        $del->delete();
            return redirect('post');
    }
}
