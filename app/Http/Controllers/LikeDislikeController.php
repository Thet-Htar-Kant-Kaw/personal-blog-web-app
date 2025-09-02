<?php

namespace App\Http\Controllers;

use App\Models\LikesDislike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeDislikeController extends Controller
{
    public function like($postId)
    {
        $likeStatus = LikesDislike::where('post_id', $postId)->where('user_id', Auth::id())->where('type', 'like')->first();

        $likes = LikesDislike::where('post_id', $postId)->where('type', 'like');

        if ($likeStatus) {
            return back();
        } else {
            LikesDislike::update([
                'post_id' => $postId,
                'user_id' => Auth::id(),
                'type' => 'like'
            ]);
            return back();
        }
    }

    public function dislike($postId)
    {
        $likeStatus = LikesDislike::where('post_id', $postId)->where('user_id', Auth::id())->where('type', 'dislike')->first();

        $dislikes = LikesDislike::where('post_id', $postId)->where('type', 'dislike');

        if ($likeStatus) {
            return back();
        } else {
            LikesDislike::update([
                'post_id' => $postId,
                'user_id' => Auth::id(),
                'type' => 'dislike'
            ]);
            return back();
        }
    }
}
