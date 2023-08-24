<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Project;
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

        return view('home.index', compact('experiences', 'educations', 'projects'));
    }
}
