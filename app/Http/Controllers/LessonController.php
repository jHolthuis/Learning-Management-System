<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\UpdateLessonRequest;
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

    public function storeOrUpdate(UpdateLessonRequest $request): RedirectResponse
    {
        // check if the lesson already exists
        $lessons = Lesson::where('start_time', $request->input('start_time'))
            ->where('day_of_week_id', $request->input('day_of_the_week'))
            ->where('classroom_id', $request->input('classroom'))
            ->first();

        // update existing lesson
        if ($lessons) {
            $lessons->subject_id = $request->subject;
            $lessons->user_id = $request->teacher;
            $lessons->end_time = $request->end_time;
            $lessons->save();
        }
        // create a new lesson
        else {
            $lessons = new Lesson;
            $lessons->subject_id = $request->subject;
            $lessons->user_id = $request->teacher;
            $lessons->classroom_id = $request->classroom;
            $lessons->day_of_week_id = $request->day_of_the_week;
            $lessons->start_time = $request->start_time;
            $lessons->end_time = $request->end_time;
            $lessons->save();
        
        }
        return redirect('schedule')->with('success', 'The schedule has been updated successfully!');
    }
}
