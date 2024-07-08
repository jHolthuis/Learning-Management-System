<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{

    // protected day of the week
    protected $with = ["dayOfTheWeek"];

    // belongs to different models
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }
    public function dayOfTheWeek()
    {
        return $this->belongsTo(DayOfTheWeek::class, 'day_of_week_id');
    }
}
