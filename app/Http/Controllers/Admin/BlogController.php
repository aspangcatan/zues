<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Ensure only authorized users with 'admin' role can access these routes
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    // Display a list of blogs
    public function index(Request $request)
    {
        $search = $request->input('q_', '');
        $blogs = Blog::where('title', 'like', "%$search%")->get();
        return response()->json($blogs);
    }

    // Store a new blog
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'type' => 'required|in:1,2', // Planning or Moments
            'link' => 'nullable|url', // Link is optional but must be a valid URL if provided
        ]);

        $blog = Blog::create($validated);
        return response()->json($blog, 201); // return created blog
    }

    // Show a single blog for editing
    public function show(Blog $blog)
    {
        return response()->json($blog);
    }

    // Update an existing blog
    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'type' => 'required|in:1,2', // Planning or Moments
            'link' => 'nullable|url', // Link is optional but must be a valid URL if provided
        ]);

        $blog->update($validated);
        return response()->json($blog); // return updated blog
    }

    // Delete a blog
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return response()->json(null, 204); // return no content status
    }
}
