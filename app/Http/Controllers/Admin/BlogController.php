<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'type' => 'required|in:1,2',
            'photo' => 'nullable|image|max:2048', // use 'photo' here
        ]);

        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('img/uploads', 'public');
        }

        $blog = Blog::create($validated);
        return response()->json($blog, 201);
    }

    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'type' => 'required|in:1,2',
            'photo' => 'nullable|image|max:2048', // use 'photo' here
        ]);

        if ($request->hasFile('photo')) {
            if ($blog->photo) {
                Storage::disk('public')->delete($blog->photo); // delete old image
            }
            $validated['photo'] = $request->file('photo')->store('img/uploads', 'public');
        }

        $blog->update($validated);
        return response()->json($blog);
    }

    // Show a single blog for editing
    public function showBlog($id)
    {
        $blog = Blog::findOrFail($id);  // Find the blog by its ID
        return view('template', compact('blog'));
    }

    public function show(Blog $blog)
    {
        return response()->json($blog);
    }


    public function destroy(Blog $blog)
    {
        if ($blog->photo) {
            Storage::disk('public')->delete($blog->photo);
        }

        $blog->delete();
        return response()->json(['message' => 'Blog deleted']);
    }
}
