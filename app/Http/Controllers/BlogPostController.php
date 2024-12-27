<?php
namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function index()
    {
        return BlogPost::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $post = $request->user()->blogPosts()->create($validated);

        return response()->json($post, 201);
    }

    public function show(BlogPost $blogPost)
    {
        return $blogPost;
    }

    public function update(Request $request, BlogPost $blogPost)
    {
        $this->authorize('update', $blogPost);

        $validated = $request->validate([
            'title' => 'string|max:255',
            'content' => 'string',
        ]);

        $blogPost->update($validated);

        return $blogPost;
    }

    public function destroy(BlogPost $blogPost)
    {
        $this->authorize('delete', $blogPost);

        $blogPost->delete();

        return response()->json(null, 204);
    }
}
