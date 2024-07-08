<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\AvailabilityRequest;
use Illuminate\Http\Request;
use App\Models\Availability;
use Illuminate\Http\RedirectResponse;

class AvailabilityController extends Controller
{
    // show the availability of the user
    public function index()
{
    $availabilities = Availability::where('user_id', auth()->id())->get();

    return view('pages.availability_index', compact('availabilities'));
}

    // store the availability of the user in the DB
    public function store(AvailabilityRequest $request): RedirectResponse
    {
        // create the availability table of a user
        Availability::create([
            'user_id' => auth()->id(),
            'date' => $request->date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
        ]);

        return back()->with('success', 'Availability saved successfully!');
    }
}
