<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class UiController extends Controller
{
    public function index() {
        $skills = Skill::paginate(8);
        return view('ui-panel.index', compact('skills'));
    }
}
