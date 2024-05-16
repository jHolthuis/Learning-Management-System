<?php

namespace App\Http\Controllers;
use App\Mail\Schedulechanged;
use App\Models\Schedule;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ScheduleChangedController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $schedule = Schedule::findOrFail($request->schedule_id);
 
        // Send out the changed schedule
 
        Mail::to($request->user())->send(new ScheduleChanged($schedule));
 
        return redirect('/schedule');
    }
}
