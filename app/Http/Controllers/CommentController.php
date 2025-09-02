<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function comment (Request $request, $postId) {
        $request->validate([
            'text' => 'required'
        ]);
        Comment::create([
            'post_id' => $postId,
            'user_id' => Auth::id(),
            'text' => $request->text
        ]);
        return back();
    }

}
