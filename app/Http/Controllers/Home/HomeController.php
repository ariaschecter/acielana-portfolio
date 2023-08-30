<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Resume;
use App\Models\Skill;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        // Experience Now
        $exp1 = Experience::where('experience_end', null)->orderBy('experience_start', 'ASC')->get();
        // Finish Experience
        $exp2 = Experience::where('experience_end', '!=', null)->orderBy('experience_end', 'DESC')->get();
        // Merge
        $experiences = $exp1->merge($exp2)->all();

        // Experience Now
        $edu1 = Education::where('education_end', null)->orderBy('education_start', 'ASC')->get();
        // Finish Experience
        $edu2 = Education::where('education_end', '!=', null)->orderBy('education_end', 'DESC')->get();
        // Merge
        $educations = $edu1->merge($edu2)->all();

        $projects = Project::latest()->take(6)->get();
        $project = Project::latest()->get();
        $total_project = count($project);

        $skills = Skill::all();

        $blogs = Blog::with('comment')->latest()->take(3)->get();

        $resume = Resume::latest()->first();

        return view('home.index', compact('experiences', 'educations', 'projects', 'skills', 'blogs', 'total_project', 'resume'));
    }

    public function contactStore(Request $request) {
        // dd($request);
        $validated = $request->validate([
            'contact_name' => 'required',
            'contact_email' => 'required',
            'contact_message' => 'required'
        ]);

        Contact::create($validated);

        return redirect('/#contact')->with('message', 'Your Message is Sent Successfully!');
    }

    public function blogStore(Request $request, $id) {
        // dd($request);
        $validated = $request->validate([
            'comment_name' => 'required',
            'comment_email' => 'required',
            'comment_message' => 'required'
        ]);

        $validated['parent_id'] = $id;

        Comment::create($validated);

        return redirect('/#blog')->with('message_blog', 'Your Comment is Sent Successfully!');
    }

    public function projectStore(Request $request, $id) {
        // dd($request);
        $validated = $request->validate([
            'comment_name' => 'required',
            'comment_email' => 'required',
            'comment_message' => 'required'
        ]);

        $validated['parent_id'] = $id;

        Comment::create($validated);

        return redirect('/#portfolio')->with('message_project', 'Your Comment is Sent Successfully!');
    }
}
