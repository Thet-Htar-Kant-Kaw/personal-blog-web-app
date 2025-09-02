<?php

namespace App\Http\Controllers;

use App\Models\{Category, Comment, LikesDislike, Post, Skill, Project, StudentCount};
// use App\Models\LikesDislike;
// use App\Models\Post;
// use App\Models\Skill;
// use App\Models\Project;
// use App\Models\StudentCount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\FuncCall;

class UiController extends Controller
{
    public function index()
    {
        $skills = Skill::paginate(8);
        $projects = Project::all();
        $studentCount = StudentCount::find(1);
        $posts = Post::latest()->take(3)->get();
        
        return view('ui-panel.index', compact('skills', 'projects', 'studentCount', 'posts'));
    }

    public function postsIndex()
    {
        $categories = Category::all();
        $posts = Post::latest()->paginate(3); // get all posts
        return view('ui-panel.posts', compact('categories', 'posts'));
    }

    public function postDetailsIndex($id)
    {
        $post = Post::find($id);
        $likes = LikesDislike::where('post_id', $id)->where('type', 'like')->get();
        $dislikes = LikesDislike::where('post_id', $id)->where('type', 'dislike')->get();
        $likeStatus = LikesDislike::where('post_id', $id)->where('user_id', Auth::id())->first();
        $comments = Comment::where('post_id', $id)->where('status', 'show')->get();

        return view('ui-panel.post-details', compact('post', 'likes', 'dislikes', 'likeStatus', 'comments'));
    }

    public function like($postId)
    {

        $isExist = LikesDislike::where('post_id', $postId)->where('user_id', Auth::id())->first();

        if ($isExist) {
            if ($isExist->type == 'like') {

                return back();
            } else {

                LikesDislike::where('id', $isExist->id)->update([
                    'type' => 'like'
                ]);
                return back();
            }
        } else {

            LikesDislike::create([
                'post_id' => $postId,
                'user_id' => Auth::id(),
                'type' => 'like'
            ]);
            return back();
        }
    }

    public function dislike($postId)
    {

        $isExist = LikesDislike::where('post_id', $postId)->where('user_id', Auth::id())->first();

        if ($isExist) {

            if ($isExist->type == 'dislike') {

                return back();
            } else {

                LikesDislike::where('id', $isExist->id)->update([
                    'type' => 'dislike'
                ]);
                return back();
            }
        } else {
            LikesDislike::create([
                'post_id' => $postId,
                'user_id' => Auth::id(),
                'type' => 'dislike'
            ]);
            return back();
        }
    }

    public function search (Request $request) {
        $searchData = $request->search_data;
        $categories = Category::all();
        
        $posts = Post::where('title', 'like', '%'.$searchData.'%')
            ->orWhere('content', 'like', '%'.$searchData.'%')
            ->orWhereHas('category', function ($categories) use ($searchData) {
                $categories->where('name', 'like', '%'.$searchData.'%');
            })->latest()->paginate(5);

        return view('ui-panel.posts', compact('posts', 'categories'));
    }

    public function searchByCategory ($categoryId) {
        $categories = Category::all();
        $posts = Post::where('category_id', $categoryId)->paginate(10);

        return view('ui-panel.posts', compact('posts', 'categories'));
    }
}
