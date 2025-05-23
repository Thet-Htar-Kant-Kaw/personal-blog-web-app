<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Project;
use App\Models\StudentCount;
use Illuminate\Http\Request;

class UiController extends Controller
{
    public function index() {
        $skills = Skill::paginate(8);
        $projects = Project::all();
        $studentCount = StudentCount::find(1);        
        return view('ui-panel.index', compact('skills', 'projects', 'studentCount'));
    }

    public function postsIndex() {
        return view('ui-panel.posts');
    }
}
