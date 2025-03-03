<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = Skill::all();
        return view('admin-panel.skills.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('admin-panel.skills.index');        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'skillName' => 'required|string|max:255',
            'skillPercentage' => 'required|integer|between:1,100',
        ]);
        Skill::create([
            'name' => $request->skillName,
            'percentage' => $request->skillPercentage,
        ]);
        return redirect()->back()->with('success', 'Skill added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "This is the show page of the skill controller" . $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "This is the edit page of the skill controller" . $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
