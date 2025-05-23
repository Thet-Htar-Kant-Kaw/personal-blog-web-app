<?php

namespace App\Http\Controllers\admin;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::paginate(5);
        return view('admin-panel.projects.index', compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'projectName' => 'required|string|max:255',
            'projectUrl' => 'required|url|max:255',
        ]);

        Project::create([
            'name' => $request->projectName,
            'url' => $request->projectUrl,
        ]);
        return redirect()->back()->with('success', 'Project added successfully');}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = Project::find($id);
        return view('admin-panel.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'projectName' => 'required|string|max:255',
            'projectUrl' => 'required|url|max:255',
        ]);

        $project = Project::find($id);
        $project->name = $request->projectName;
        $project->url = $request->projectUrl;
        $project->save();

        return redirect('admin/projects')->with('success', 'Project updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::find($id);
        $project->delete();

        return redirect('admin/projects')->with('success', 'Project deleted successfully');
    }
}
