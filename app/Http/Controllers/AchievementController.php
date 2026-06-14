<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AchievementController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'style' => 'required',
        ]);

        Achievement::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'description' => $request->description,
            'style' => $request->style,
        ]);

        return back();
    }
}