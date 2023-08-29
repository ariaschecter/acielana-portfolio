<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $breadcrumbs = [
            ['Blog', true, route('admin.blog.index')],
            ['Index', false],
        ];
        $title = 'All Blog';
        $blogs = Blog::latest()->get();
        return view('admin.blog.index', compact('breadcrumbs', 'title', 'blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $breadcrumbs = [
            ['Blog', true, route('admin.blog.index')],
            ['Create', false],
        ];
        $title = 'Create Blog';
        $categories = Category::orderBy('category_name', 'ASC')->get();
        return view('admin.blog.create', compact('breadcrumbs', 'title', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required',
            'blog_title' => 'required',
            'blog_desc' => 'required',
            'blog_quote' => 'sometimes',
            'blog_picture' => 'required|file|image',
        ]);

        $image_upload = $request->blog_picture->store();

        $validated['blog_picture'] = $image_upload;

        Blog::create($validated);

        return redirect()->route('admin.blog.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        $breadcrumbs = [
            ['Blog', true, route('admin.blog.index')],
            [$blog->blog_title, false],
        ];
        $title = $blog->blog_title;
        return view('admin.blog.show', compact('breadcrumbs', 'title', 'blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        $breadcrumbs = [
            ['Blog', true, route('admin.blog.index')],
            [$blog->blog_title, true, route('admin.blog.show', $blog->id)],
            ['Edit', false],
        ];
        $title = $blog->blog_title;
        $categories = Category::orderBy('category_name', 'ASC')->get();
        return view('admin.blog.edit', compact('breadcrumbs', 'title', 'blog', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'category_id' => 'required',
            'blog_title' => 'required',
            'blog_desc' => 'required',
            'blog_quote' => 'sometimes',
            'blog_picture' => 'file|image',
        ]);

        if ($request->blog_picture !== null) {
            Storage::delete($blog->blog_picture);
            $validated['blog_picture'] = $request->blog_picture->store();
        }

        $blog->update($validated);

        return redirect()->route('admin.blog.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        Storage::delete($blog->blog_picture);
        $blog->delete();
        return redirect()->back();
    }
}
