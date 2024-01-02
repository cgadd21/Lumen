<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        $experience = Experience::all();
        return response()->json($experience);
    }

    public function show($id)
    {
        $experience = Experience::find($id);
        if (!$experience) {
            return response()->json(['error' => 'Experience not found'], 404);
        }
        return response()->json($experience);
    }

    public function store(Request $request)
    {
        $experience = Experience::create($request->all());
        return response()->json($experience, 201);
    }

    public function update(Request $request)
    {
        $experienceId = $request->input('experienceId');
        $experience = Experience::find($experienceId);
        if (!$experience) {
            return response()->json(['error' => 'Experience not found'], 404);
        }
        $experience->update($request->all());
        return response()->json($experience);
    }

    public function destroy($id)
    {
        $experience = Experience::find($id);
        if (!$experience) {
            return response()->json(['error' => 'Experience not found'], 404);
        }
        $experience->delete();
        return response()->json(['message' => 'Experience deleted']);
    }
}
