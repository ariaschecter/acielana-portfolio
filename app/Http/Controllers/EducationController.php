<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index()
    {
        $breadcrumbs = [
            ['Education', true, route('admin.education.index')],
            ['Index', false],
        ];
        $title = 'All Education';
        $educations = Education::latest()->get();
        return view('admin.education.index', compact('breadcrumbs', 'title', 'educations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $breadcrumbs = [
            ['Education', true, route('admin.education.index')],
            ['Create', false],
        ];
        $title = 'Create Education';
        return view('admin.education.create', compact('breadcrumbs', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'education_name' => 'required',
            'education_institution'  => 'required',
            'education_start' => 'required',
            'education_end' => '',
            'education_desc' => 'required',
        ]);

        Education::create($validated);

        return redirect()->route('admin.education.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Education $education)
    {
        $breadcrumbs = [
            ['Education', true, route('admin.education.index')],
            [$education->education_name, false],
        ];
        $title = $education->education_name;
        return view('admin.education.show', compact('breadcrumbs', 'title', 'education'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Education $education)
    {
        $breadcrumbs = [
            ['Education', true, route('admin.education.index')],
            [$education->education_name, true, route('admin.education.show', $education->id)],
            ['Edit', false],
        ];
        $title = $education->education_name;
        return view('admin.education.edit', compact('breadcrumbs', 'title', 'education'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Education $education)
    {
        $validated = $request->validate([
            'education_name' => 'required',
            'education_institution'  => 'required',
            'education_start' => 'required',
            'education_end' => '',
            'education_desc' => 'required',
        ]);

        $education->update($validated);

        return redirect()->route('admin.education.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $education)
    {
        $education->delete();
        return redirect()->back();
    }
}
