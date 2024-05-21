<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function show_classrooms(Request $request)
    {
        $classrooms = Classroom::all();

        return view('pages.edit_schedule', [
            'classrooms' => $classrooms
        ]);
    }
}
