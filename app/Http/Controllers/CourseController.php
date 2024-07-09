<?php

namespace App\Http\Controllers;

use App\Services\GptService;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function getAllCourses()
    {
    }

    public function createGpt(Request $request)
    {
        $validated = $request->validate([
            'message' => 'required|string'
        ]);
        $message = $validated['message'];

        $generatedText = GptService::make()->getCourses($message);
        return response()->json(json_decode($generatedText));
    }
}
