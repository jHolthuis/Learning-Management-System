<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Subject;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;



class LessonController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $lessons = new Lesson;
        $lessons->subject_id = $request->subject_id;
        $lessons->user_id = $request->user_id;
        $lessons->classroom_id = $request->classroom_id;
        $lessons->start_time = $request->start_time;
        $lessons->end_time = $request->end_time;
        $lessons->day_of_week = $request->day_of_week;
        $lessons->save();

        return redirect()->route('schedule')->with('succes', "Lesson added successfully");
    }

    public function show_schedule(Request $request)
    {
        $lessons = Lesson::where('lesson_id', $request->lesson_id)->get();

        return view('pages.show_schedule', compact('lessons'));
    }

    public function edit_schedule()
    {
        return view('pages.update_schedule', ['user' => Auth::User()]);
    }
    
    public function update_schedule(Request $request)
    {
        $schedule = Schedule::all();

        return view('pages.update_schedule', compact('schedule'));

    }

    public function show_subject(Request $request)
    {
        $subjects = Subject::All();

        return view('pages.edit_schedule', compact('subjects'));
    }
}
