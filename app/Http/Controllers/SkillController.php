<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SkillController extends Controller
{
    public function index()
    {
        $breadcrumbs = [
            ['Skill', true, route('admin.skill.index')],
            ['Index', false],
        ];
        $title = 'All Skill';
        $skills = Skill::latest()->get();
        return view('admin.skill.index', compact('breadcrumbs', 'title', 'skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $breadcrumbs = [
            ['Skill', true, route('admin.skill.index')],
            ['Create', false],
        ];
        $title = 'Create Skill';
        return view('admin.skill.create', compact('breadcrumbs', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'skill_name' => 'required',
            'skill_desc' => 'required',
            'skill_svg'  => 'required|mimes:svg',
        ]);

        $image_upload = $request->skill_svg->store();

        $validated['skill_svg'] = $image_upload;

        Skill::create($validated);

        return redirect()->route('admin.skill.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {
        $breadcrumbs = [
            ['Skill', true, route('admin.skill.index')],
            [$skill->skill_name, false],
        ];
        $title = $skill->skill_name;
        return view('admin.skill.show', compact('breadcrumbs', 'title', 'skill'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
        $breadcrumbs = [
            ['Skill', true, route('admin.skill.index')],
            [$skill->skill_name, true, route('admin.skill.show', $skill->id)],
            ['Edit', false],
        ];
        $title = $skill->skill_name;
        return view('admin.skill.edit', compact('breadcrumbs', 'title', 'skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
        $validated = $request->validate([
            'skill_name' => 'required',
            'skill_desc' => 'required',
            'skill_svg'  => 'mimes:svg',
        ]);

        if ($request->skill_svg !== null) {
            Storage::delete($skill->skill_svg);
            $validated['skill_svg'] = $request->skill_svg->store();
        }

        $skill->update($validated);

        return redirect()->route('admin.skill.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        Storage::delete($skill->skill_svg);
        $skill->delete();
        return redirect()->back();
    }
}
