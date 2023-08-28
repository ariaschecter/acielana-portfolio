<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $breadcrumbs = [
            ['Project', true, route('admin.project.index')],
            ['Index', false],
        ];
        $title = 'All Project';
        $projects = Project::latest()->get();
        return view('admin.project.index', compact('breadcrumbs', 'title', 'projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $breadcrumbs = [
            ['Project', true, route('admin.project.index')],
            ['Create', false],
        ];
        $title = 'Create Project';
        return view('admin.project.create', compact('breadcrumbs', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'project_name' => 'required',
            'project_category' => 'required',
            'project_client' => 'required',
            'project_date' => 'required',
            'project_desc' => 'required',
            'project_picture' => 'required|file|image',
            'project_url' => 'required|active_url',
        ]);

        $image_upload = $request->project_picture->store();

        $validated['project_picture'] = $image_upload;

        Project::create($validated);

        return redirect()->route('admin.project.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $breadcrumbs = [
            ['Project', true, route('admin.project.index')],
            [$project->project_name, false],
        ];
        $title = $project->project_name;
        return view('admin.project.show', compact('breadcrumbs', 'title', 'project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $breadcrumbs = [
            ['Project', true, route('admin.project.index')],
            [$project->project_name, true, route('admin.project.show', $project->id)],
            ['Edit', false],
        ];
        $title = $project->project_name;
        return view('admin.project.edit', compact('breadcrumbs', 'title', 'project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'project_name' => 'required',
            'project_category' => 'required',
            'project_client' => 'required',
            'project_date' => 'required',
            'project_desc' => 'required',
            'project_picture' => 'file|image',
            'project_url' => 'required',
        ]);

        if ($request->project_picture !== null) {
            Storage::delete($project->project_picture);
            $validated['project_picture'] = $request->project_picture->store();
        }

        $project->update($validated);

        return redirect()->route('admin.project.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        Storage::delete($project->project_picture);
        $project->delete();
        return redirect()->back();
    }
}
