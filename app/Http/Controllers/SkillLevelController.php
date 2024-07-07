<?php

namespace App\Http\Controllers;

use App\Models\SkillLevel;
use Illuminate\Http\Request;

class SkillLevelController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'skill_id' => 'required|exists:skills,id',
            'category_id' => 'required|exists:categories,id',
        ]);

        $skillLevels = SkillLevel::with(['skill', 'category'])
            ->where('skill_id', $request->skill_id)
            ->where('category_id', $request->category_id)
            ->get();

        return response()->json($skillLevels);
    }

    public function store(Request $request)
    {
        $request->validate([
            'skill_id' => 'required|exists:skills,id',
            'category_id' => 'required|exists:categories,id',
            'video_link' => 'required|string|url',
        ]);

        $skillLevel = SkillLevel::create($request->validated());
        return response()->json($skillLevel, 201);
    }

    public function update(Request $request, SkillLevel $skillLevel)
    {
        $request->validate([
            'skill_id' => 'required|exists:skills,id',
            'category_id' => 'required|exists:categories,id',
            'video_link' => 'required|string|url',
        ]);

        $skillLevel->update($request->validated());
        return response()->json($skillLevel);
    }

    public function destroy(SkillLevel $skillLevel)
    {
        $skillLevel->delete();
        return response()->json(null, 204);
    }
}