<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function index()
    {
        $volunteer = Volunteer::all();
        return response()->json($volunteer);
    }

    public function show($id)
    {
        $volunteer = Volunteer::find($id);
        if (!$volunteer) {
            return response()->json(['error' => 'Volunteer not found'], 404);
        }
        return response()->json($volunteer);
    }

    public function store(Request $request)
    {
        $volunteer = Volunteer::create($request->all());
        return response()->json($volunteer, 201);
    }

    public function update(Request $request)
    {
        $volunteerId = $request->input('volunteerId');
        $volunteer = Volunteer::find($volunteerId);
        if (!$volunteer) {
            return response()->json(['error' => 'Volunteer not found'], 404);
        }
        $volunteer->update($request->all());
        return response()->json($volunteer);
    }

    public function destroy($id)
    {
        $volunteer = Volunteer::find($id);
        if (!$volunteer) {
            return response()->json(['error' => 'Volunteer not found'], 404);
        }
        $volunteer->delete();
        return response()->json(['message' => 'Volunteer deleted']);
    }
}
