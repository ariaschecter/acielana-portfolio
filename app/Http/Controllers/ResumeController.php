<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResumeController extends Controller
{
    public function index()
    {
        $breadcrumbs = [
            ['Resume', true, route('admin.resume.index')],
            ['Index', false],
        ];
        $title = 'All Resume';
        $resumes = Resume::latest()->get();
        return view('admin.resume.index', compact('breadcrumbs', 'title', 'resumes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $breadcrumbs = [
            ['Resume', true, route('admin.resume.index')],
            ['Create', false],
        ];
        $title = 'Create Resume';
        return view('admin.resume.create', compact('breadcrumbs', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'resume_url' => 'required|file|mimes:pdf',
        ]);

        $resume_url = $request->resume_url->storeAs('resume', 'Resume Aria Maulana Eka Mahendra '. Carbon::now()->format('d M Y'). ' - ' . time() .'.pdf');

        $validated['resume_url'] = $resume_url;

        Resume::create($validated);

        return redirect()->route('admin.resume.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Resume $resume)
    {
        return redirect(Storage::url($resume->resume_url));
        // return view('admin.resume.show', compact('breadcrumbs', 'title', 'skill'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resume $resume)
    {
        Storage::delete($resume->resume_url);
        $resume->delete();
        return redirect()->back();
    }
}
