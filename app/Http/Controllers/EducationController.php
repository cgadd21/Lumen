<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index()
    {
        $education = Education::all();
        return response()->json($education);
    }

    public function show($id)
    {
        $education = Education::find($id);
        if (!$education) {
            return response()->json(['error' => 'Education not found'], 404);
        }
        return response()->json($education);
    }

    public function store(Request $request)
    {
        $education = Education::create($request->all());
        return response()->json($education, 201);
    }

    public function update(Request $request)
    {
        $educationId = $request->input('educationId');
        $education = Education::find($educationId);
        if (!$education) {
            return response()->json(['error' => 'Education not found'], 404);
        }
        $education->update($request->all());
        return response()->json($education);
    }

    public function destroy($id)
    {
        $education = Education::find($id);
        if (!$education) {
            return response()->json(['error' => 'Education not found'], 404);
        }
        $education->delete();
        return response()->json(['message' => 'Education deleted']);
    }
}
