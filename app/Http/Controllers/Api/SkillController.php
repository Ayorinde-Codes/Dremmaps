<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\SkillResource;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        return response()->json(SkillResource::collection(Skill::all()));
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);
        $skill = Skill::create($request->validated());
        return response()->json($skill, 201);
    }

    public function update(Request $request, Skill $skill)
    {
        $request->validate(['name' => 'required|string|max:255']);
        $skill->update($request->validated());
        return response()->json($skill);
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();
        return response()->json(null, 204);
    }
}