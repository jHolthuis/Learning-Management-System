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


// the controller for all the lessons in hacklab
class LessonController extends Controller
{
    // Let's show the schedule to the user
    public function show_schedule()
    {
        // get the DB information
        $classrooms = Classroom::with('lessons.user', 'lessons.subject', 'lessons.dayOfTheWeek')->get();
        $days = DayOfTheWeek::all();

        // an array for the starting and ending time
        $timeslots = [];
        $startHour = 9;
        $endHour = 16;

        // fill the array with all the time slots that are needed.
        for($hour = $startHour; $hour < $endHour; $hour++) {
            $timeslots[] = sprintf('%02d:00 - %02d:00', $hour, $hour + 1);
        }
        $classrooms->map(function($classroom){
            $classroom->lessons = $classroom->lessons->map(function($lesson){
                $lesson->timeslot = substr($lesson->start_time, 0, 5) . ' - ' .  substr($lesson->end_time, 0, 5);
                return $lesson;
            })->groupBy('timeslot');
            return $classroom;
        });
        // go to the schedule page with the usable variables
        return view('pages.schedule', compact('classrooms', 'days', 'timeslots'));
    }

        
    // let's store the lesson form in the DB
    public function store(CreateLessonRequest $request): RedirectResponse
    {
        // post all the input from the form in the DB
        $lesson = new Lesson;
        $lesson->subject_id = $request->subject;
        $lesson->user_id = $request->teacher;
        $lesson->classroom_id = $request->classroom;
        $lesson->day_of_week_id = $request->day_of_the_week;
        $lesson->start_time = $request->start_time;
        $lesson->end_time = $request->end_time;
        
        // save the DB
        $lesson->save();

        // redirect to the route show_schedule so you can instantly see the changes that have been made
        return redirect()->route('show_schedule')->with('succes', "Schedule has been updated!");
    }

    // all the input needed for the schedule input form
    public function schedule_input(Request $request)
    {
        // All varaibles needed from the DB
        $lessons = Lesson::all();
        $subjects = Subject::all();
        $weekdays = DayOfTheWeek::all();
        $teachers = User::where('role_id', '2')->get();
        $classrooms = classroom::all();

        // go to the edit schedule page with the created variables
        return view('pages.schedule_edit', compact('lessons', 'subjects', 'weekdays', 'teachers', 'classrooms'));
    }
}
