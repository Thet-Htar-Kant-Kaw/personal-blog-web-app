<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\StudentCount;
use Illuminate\Http\Request;

class StudentCountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studentCount = StudentCount::all();
        return view('admin-panel.student-count.index', compact('studentCount'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'count' => 'required|integer',
        ]);
        StudentCount::create([
            'count' => $request->count,
        ]);
        return back();
    }
    
    public function update(Request $request, $id)
    {
        $studentCount = StudentCount::find($id);
        $request->validate([
            'count' => 'required|integer',
        ]);
        $studentCount->update([
            'count' => $studentCount->count + $request->count,
        ]);
        return back()->with('success', 'Student count updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
