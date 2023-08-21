<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        $breadcrumbs = [
            ['Experience', true, route('admin.experience.index')],
            ['Index', false],
        ];
        $title = 'All Experience';
        $experiences = Experience::latest()->get();
        return view('admin.experience.index', compact('breadcrumbs', 'title', 'experiences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $breadcrumbs = [
            ['Experience', true, route('admin.experience.index')],
            ['Create', false],
        ];
        $title = 'Create Experience';
        return view('admin.experience.create', compact('breadcrumbs', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'experience_name' => 'required',
            'experience_institution'  => 'required',
            'experience_start' => 'required',
            'experience_end' => '',
            'experience_desc' => 'required',
        ]);

        Experience::create($validated);

        return redirect()->route('admin.experience.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Experience $experience)
    {
        $breadcrumbs = [
            ['Experience', true, route('admin.experience.index')],
            [$experience->experience_name, false],
        ];
        $title = $experience->experience_name;
        return view('admin.experience.show', compact('breadcrumbs', 'title', 'experience'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $experience)
    {
        $breadcrumbs = [
            ['Experience', true, route('admin.experience.index')],
            [$experience->experience_name, true, route('admin.experience.show', $experience->id)],
            ['Edit', false],
        ];
        $title = $experience->experience_name;
        return view('admin.experience.edit', compact('breadcrumbs', 'title', 'experience'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Experience $experience)
    {
        $validated = $request->validate([
            'experience_name' => 'required',
            'experience_institution'  => 'required',
            'experience_start' => 'required',
            'experience_end' => '',
            'experience_desc' => 'required',
        ]);

        $experience->update($validated);

        return redirect()->route('admin.experience.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {
        $experience->delete();
        return redirect()->back();
    }
}
