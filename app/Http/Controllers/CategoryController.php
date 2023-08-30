<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $breadcrumbs = [
            ['Category', true, route('admin.category.index')],
            ['Index', false],
        ];
        $title = 'All Category';
        $categories = Category::latest()->get();
        return view('admin.category.index', compact('breadcrumbs', 'title', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $breadcrumbs = [
            ['Category', true, route('admin.category.index')],
            ['Create', false],
        ];
        $title = 'Create Category';
        return view('admin.category.create', compact('breadcrumbs', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_name' => 'required|unique:categories,category_name',
        ]);

        $validated['category_slug'] = Str::slug($request->category_name);

        Category::create($validated);

        return redirect()->route('admin.category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        $breadcrumbs = [
            ['Category', true, route('admin.category.index')],
            [$category->category_name, false],
        ];
        $title = $category->category_name;
        return view('admin.category.show', compact('breadcrumbs', 'title', 'category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $breadcrumbs = [
            ['Category', true, route('admin.category.index')],
            ['Edit', false],
        ];
        $title = $category->category_name;
        return view('admin.category.edit', compact('breadcrumbs', 'title', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'category_name' => 'required|unique:categories,category_name,' . $category->id,
        ]);
        $validated['category_slug'] = Str::slug($request->category_name);
        $category->update($validated);

        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back();
    }
}
