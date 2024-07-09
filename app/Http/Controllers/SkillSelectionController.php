<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserSkill;

class SkillSelectionController extends Controller
{
    public function showSkillSelectionPage()
    {
        return inertia('Onboarding/SkillSelection');
    }
    public function addUserSkills(Request $request)
    {
        $request->validate([
            'skills' => 'required|array',
            'skills.*' => 'exists:skills,id',
        ]);

        // $user = Auth::user();
        $user = $request->user();

        // Remove existing skills if you want to replace them
        $user->userSkills()->delete();

        foreach ($request->skills as $skillId) {
            UserSkill::create([
                'user_id' => $user->id,
                'skill_id' => $skillId,
            ]);
        }

        return redirect()->route('next-step'); // Redirect to the next step in the onboarding process
    }
}
