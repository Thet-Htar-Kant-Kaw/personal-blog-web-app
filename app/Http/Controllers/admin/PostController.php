<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->paginate(3);
        return view('admin-panel.posts.index', compact('posts'));
    }

    public function show ($id) {
        $comments = Comment::where('post_id', $id)->paginate(10);
        return view('admin-panel.posts.comment', compact('comments'));
    }

    public function showHide ($id) {
        $comment = Comment::findOrFail($id);
        
        $status = $comment->status == 'show' ? 'hide' : 'show';

        $comment->update([
            'status' => $status
        ]);

        return back()->with('success', 'Comment status changed.');
        
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin-panel.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'categoryId' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,svg',
            'title' => 'required',
            'content' => 'required'
        ]);

        $image = $request->image;
        $imageName = time() .'_'. $image->getClientOriginalName();
        $image->storeAs('post-images', $imageName);
        
        Post::create([
            'category_id' => $request->categoryId,
            'user_id' => Auth::id(),
            'image' => $imageName,
            'title' => $request->title,
            'content' => $request->content,
        ]);
        return redirect('admin/posts')->with('success', 'Post created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categories = Category::all();
        $post = Post::find($id);
        return view('admin-panel.posts.edit', compact('categories', 'post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'categoryId' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,svg',
            'title' => 'required',
            'content' => 'required'
        ]);

        $post = Post::find($id);

        if($request->hasFile('image')) {
            $image = $post->image;
            File::delete('post-images/'.$image);
            $image = $request->image;
            $imageName = time() .'_'. $image->getClientOriginalName();
            $image->storeAs('post-images', $imageName);

            $validated['image'] = $imageName;
        }

        $post->update($validated);
        
        return redirect('admin/posts')->with('updateSuccess', 'Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $image = $post->image;
        File::delete('storage/post-images/'.$image);
        $post->delete();
        return back()->with('deleteSuccess', 'Post deleted successfully.');
    }
}
