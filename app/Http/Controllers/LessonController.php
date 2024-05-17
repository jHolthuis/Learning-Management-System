<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;


class LessonController extends Controller
{
    public function store(Request $request)
    {
        $lesson = new Lesson;
        $lesson->subject_id = $request->subject_id;
        $lesson->user_id = $request->user_id;
        $lesson->classroom_id = $request->classroom_id;
        $lesson->start_time = $request->start_time;
        $lesson->end_time = $request->end_time;
        $lesson->day_of_week = $request->day_of_week;
        $lesson->save();

        return redirect()->route('lesson')->with('succes', "Lesson added successfully");
    }
}
