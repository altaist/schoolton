<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        $data = [
            'type' => $request->input('type'),
            'form_data' => $request->input('form_data')
        ];

        return response()->json(Feedback::create($data));
    }
}
