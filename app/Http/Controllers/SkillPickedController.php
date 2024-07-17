<?php

namespace App\Http\Controllers;

use App\Http\Resources\SkillResource;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillPickedController extends Controller
{
    public function showSkillPickedPage()
    {
        return inertia('Onboarding/SkillPicked', [
            'skills' => SkillResource::collection(Skill::all())
        ]);
    }
}
