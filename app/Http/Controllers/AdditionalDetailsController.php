<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdditionalDetailsController extends Controller
{
    public function showAdditionalDetailsPage()
    {
        return inertia('Onboarding/AdditionalDetails');
    }

    public function saveAdditionalDetails(Request $request)
    {
        $user = $request->user();

        // Save user department and school
        $user->department = $request->input('department');
        $user->school = $request->input('school');
        $user->save();

        // Update user skills with selected categories
        foreach ($request->input('skills', []) as $skillId => $categoryId) {
            $user->userSkills()->where('skill_id', $skillId)->update(['category_id' => $categoryId]);
        }

        return redirect()->route('dashboard');
    }
}
