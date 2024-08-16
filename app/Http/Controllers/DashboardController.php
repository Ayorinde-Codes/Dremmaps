<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Skill;
use App\Models\SkillLevel;
use App\Models\UserSkill;

class DashboardController extends Controller
{
    public function getUsersCount()
    {
        dd(User::count());
        return response()->json(['count' => User::count()]);
    }

    public function getCategoriesCount()
    {
        return response()->json(['count' => Category::count()]);
    }

    public function getSkillsCount()
    {
        return response()->json(['count' => Skill::count()]);
    }

    public function getSkillLevelsCount()
    {
        return response()->json(['count' => SkillLevel::count()]);
    }
}
