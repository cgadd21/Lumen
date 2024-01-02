<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        $skill = Skill::all();
        return response()->json($skill);
    }

    public function show($id)
    {
        $skill = Skill::find($id);
        if (!$skill) {
            return response()->json(['error' => 'Skill not found'], 404);
        }
        return response()->json($skill);
    }

    public function store(Request $request)
    {
        $skill = Skill::create($request->all());
        return response()->json($skill, 201);
    }

    public function update(Request $request)
    {
        $skillId = $request->input('skillId');
        $skill = Skill::find($skillId);
        if (!$skill) {
            return response()->json(['error' => 'Skill not found'], 404);
        }
        $skill->update($request->all());
        return response()->json($skill);
    }

    public function destroy($id)
    {
        $skill = Skill::find($id);
        if (!$skill) {
            return response()->json(['error' => 'Skill not found'], 404);
        }
        $skill->delete();
        return response()->json(['message' => 'Skill deleted']);
    }
}
