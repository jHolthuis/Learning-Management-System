<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function show_subjects(Request $request)
    {
        $subjects = Subject::all();

        return view('pages.edit_schedule', [
            'subjects' => $subjects
        ]);
    }
}
