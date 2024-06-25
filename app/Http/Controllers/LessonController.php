<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\CreateLessonRequest;
use App\Models\Classroom;
use App\Models\DayOfTheWeek;
use App\Models\Lesson;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;



class LessonController extends Controller
{
    public function show_schedule()
    {
        $lessons = Lesson::all();
        $classrooms = Classroom::with('lessons.user', 'lessons.dayOfTheWeek')->get();
        $days = DayOfTheWeek::all();

        return view('pages.schedule', compact('lessons', 'classrooms', 'days'));
    }

    public function store(CreateLessonRequest $request): RedirectResponse
    {
        $lesson = new Lesson;
        $lesson->subject_id = $request->subject;
        $lesson->user_id = $request->teacher;
        $lesson->classroom_id = $request->classroom;
        $lesson->day_of_week_id = $request->day_of_the_week;
        $lesson->start_time = $request->start_time;
        $lesson->end_time = $request->end_time;
        $lesson->save();

        return redirect()->route('show_schedule')->with('succes', "Schedule has been updated!");
    }

    public function schedule_input(Request $request)
    {
        $lessons = Lesson::all();
        $subjects = Subject::all();
        $weekdays = DayOfTheWeek::all();
        $teachers = User::where('role_id', '2')->get();
        $classrooms = classroom::all();

        return view('pages.schedule_edit', compact('lessons', 'subjects', 'weekdays', 'teachers', 'classrooms'));
    }

    public function edit_schedule()
    {
        return view('pages.update_schedule', ['user' => Auth::User()]);
    }
    
    public function update_schedule(Request $request)
    {
        // later maybe...
    }
}
