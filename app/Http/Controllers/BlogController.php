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



}
