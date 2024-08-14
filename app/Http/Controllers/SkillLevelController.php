<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSkillLevelRequest;
use App\Http\Requests\UpdateSkillLevelRequest;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\SkillResource;
use App\Models\Category;
use App\Models\Skill;
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

        return inertia('SkillLevel/Index', [
            'skilLevels' => $skillLevels,
            'skills' => SkillResource::collection(Skill::all()),
            'categories' => CategoryResource::collection(Category::all()),
        ]);
    }

    public function create()
    {
        return inertia('SkillLevel/Create', [
            'skills' => SkillResource::collection(Skill::all()),
            'categories' => CategoryResource::collection(Category::all()),
        ]);
    }

    public function store(StoreSkillLevelRequest $request)
    {
        SkillLevel::create($request->validated());
        return redirect()->route('skillLevel.index');
    }

    public function edit(SkillLevel $skillLevel)
    {
        return inertia('SkillLevel/Edit', [
            'skillLevel' => $skillLevel,
            'skills' => SkillResource::collection(Skill::all()),
            'categories' => CategoryResource::collection(Category::all()),
        ]);

        // return inertia('SkillLevel/Edit', [
        //     'student' => Skill::make($student),
        // ]);
    }

    public function update(UpdateSkillLevelRequest $request, SkillLevel $skillLevel)
    {
        $skillLevel->update($request->validated());

        return redirect()->route('skillLevel.index');
    }

    public function destroy(SkillLevel $skillLevel)
    {
        $skillLevel->delete();
        return redirect()->route('skillLevel.index');
    }
}