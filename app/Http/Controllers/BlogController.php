<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        try {
            $query = $request->input('q_');

            $blogs = Blog::when($query, function ($queryBuilder) use ($query) {
                return $queryBuilder->where('title', 'like', "%{$query}%")
                    ->orWhere('description', 'like', "%{$query}%");
            })->get();

            return response()->json($blogs);
        } catch (\Exception $exception) {
            return response()->json($exception->getMessage(), 500);
        }
    }


    // Store a new blog
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'link' => 'required|url',
            'type' => 'required|integer|in:1,2', // Ensuring type is either 1 or 2
        ]);

        Blog::create($request->all());

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
    }

    // Show the edit form
    public function edit(Blog $blog)
    {
        return view('blogs.edit', compact('blog'));
    }

    // Update an existing blog
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'link' => 'required|url',
            'type' => 'required|integer|in:1,2',
        ]);

        $blog->update($request->all());

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
    }

    // Delete a blog
    public function delete(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }
}
