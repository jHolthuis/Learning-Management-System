<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;


class LessonController extends Controller
{
    public function store(Request $request)
    {
        $lessons = new Lesson;
        $lessons->subject_id = $request->subject_id;
        $lessons->user_id = $request->user_id;
        $lessons->classroom_id = $request->classroom_id;
        $lessons->start_time = $request->start_time;
        $lessons->end_time = $request->end_time;
        $lessons->day_of_week = $request->day_of_week;
        $lessons->save();

        return redirect()->route('lesson')->with('succes', "Lesson added successfully");
    }

    public function show(Request $request)
    {
        $lessons = Lesson::where('lesson_id', $request->lesson_id)->get();

        return view('pages.edit_schedule', compact('lessons'));
    }
}